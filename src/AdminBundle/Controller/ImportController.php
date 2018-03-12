<?php
namespace AdminBundle\Controller;

use AdminBundle\Entity\Category;
use AdminBundle\Entity\ContentType;
use AdminBundle\Entity\ImportFields;
use Framework\Component\Controller\Controller;
use Framework\Component\HttpFoundation\Response;
use Framework\Modules\Authorization\Authorization;
use Framework\Component\HttpFoundation\Request;
use AdminBundle\Entity\Import;
use Framework\Modules\MySql\MySql;
use XMLReader;
use AdminBundle\Services\XMLParser;
use Framework\Modules\FileUploader\FileUploader;
use Framework\Component\System\System;

/**
 * @Route("/admin/import")
 */
class ImportController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $orm = $this->getORM();
            $iRepo = $orm->getRepository(Import::class);
            $cRepo = $orm->getRepository(ContentType::class);

            return $this->render('AdminBundle:import/index', array(
                'import' => $iRepo->findAll(),
                'tables' => $cRepo->findAll()
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/new")
     */
    public function newAction(Request $request)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $i = new Import();
            $i->setName($request->get('name'));
            $i->setType($request->get('type'));
            $i->setSource($request->get('source'));
            $i->setTable($request->get('table'));

            $em = $this->getORM()->getManager();
            $em->persist($i);
            $em->flush();

            return $this->redirectToRoute('/admin/import/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/setup/{import}")
     */
    public function setupAction(Request $request, MySql $mySql, Import $import)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            if(empty($import->getLocation()))
            {
                return $this->render('AdminBundle:import/setup', array(
                    'set' => $import,
                ), false);

            } else {

                $iRepo = $this->getORM()->getRepository(ImportFields::class);
                $parser = new XMLParser($import->getLocation());
                $tags = $parser->getTagsFromXml();

                return $this->render('AdminBundle:import/import', array(
                    'tags' => $tags,
                    'set' => $import,
                    'columns' => $mySql->getColumnList($import->getTable()),
                    'file' => $import->getLocation(),
                    'saved' => $iRepo->findBy(array('import' => $import->getId()))
                ), false);
            }

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/start_update/{import}")
     */
    public function setupUpdateAction(Import $import)
    {
        return $this->render('AdminBundle:import/setup_update', array(
            'import' => $import
        ), false);
    }

    /**
     * @Route("/load/{import}")
     */
    public function loadFileAction(Request $request,Import $import)
    {
        $location = '';

        if(!empty($request->files['file']['tmp_name']))
        {
            $uploader = new FileUploader();
            $location = $uploader->save($request->files['file']);
        }

        if(!empty($request->get('url')))
        {
            $location = $request->get('url');
        }

        $em = $this->getORM()->getManager();
        $import->setLocation($location);
        $em->persist($import);
        $em->flush();

        return $this->redirectToRoute('/admin/import/setup/'.$import->getId());
    }

    /**
     * @Route("/delete/{import}")
     */
    public function deleteAction(Request $request, Import $import)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $em = $this->getORM()->getManager();
            $em->remove($import);
            $em->flush();

            return $this->redirectToRoute('/admin/import/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }


    /**
     * @Route("/save/{import}")
     */
    public function saveFieldsetAction(Import $import, Request $request, MySql $mySql)
    {
        $em = $this->getORM()->getManager();
        $iRepo = $this->getORM()->getRepository(ImportFields::class);
        $parser = new XMLParser($import->getLocation());

        foreach($request->post as $k => $v)
        {
            if(!empty($v))
            {
                $field = new ImportFields();
                $field->setImport($import->getId());
                $field->setKey($k);
                $field->setColumn($v);
                $em->persist($field);
            }
        }

        $em->flush();

        return $this->render('AdminBundle:import/import', array(
            'tags' => $parser->getTagsFromXml(),
            'set' => $import,
            'columns' => $mySql->getColumnList($import->getTable()),
            'file' => $import->getLocation(),
            'saved' => $iRepo->findBy(array('import' => $import->getId()))
        ), false);
    }

    /**
     * @Route("/execute/{import}")
     */
    public function executeAction(Import $import, MySql $mySql)
    {
        $parser = new XMLParser($import->getLocation());
        $rootTag = $parser->getRootElementName();
        $reader = $parser->getReader();
        $iRepo = $this->getORM()->getRepository(ImportFields::class);
        $cRepo = $this->getORM()->getRepository(Category::class);
        $fields = $iRepo->findBy(array('import' => $import->getId()));
        $ctype = $cRepo->findOneBy(array('alias' => $import->getTable()));
        $insertArray = array();

        foreach($fields as $i)
        {
            $insertArray[$i->getKey()] = $i->getColumn();
        }

        $totalInserts = 0;

        $time1 = new \DateTime();

        while($reader->read())
        {
            if($reader->nodeType === $reader::ELEMENT)
            {
                if ($reader->localName == $rootTag)
                {
                    $statement = array(
                        'category' => $ctype->getId()
                    );
                    foreach($insertArray as $k => $v)
                    {
                        $statement[$k] = $reader->getAttribute($v);
                    }

                    $mySql->insert($import->getTable(), $statement);

                    $totalInserts++;
                }
            }
        }

        $reader->close();

        $time2 = new \DateTime();

        $speed = $time2->diff($time1);
        $h = $speed->format('%h');
        $m = $speed->format('%i');
        $s = $speed->format('%s');

        return $this->render('AdminBundle:import/report', array(
            'total' => $totalInserts,
            'start' => $time1->format('H:i:s'),
            'end' => $time2->format('H:i:s'),
            'speed' => $h.' ч. '.$m.' мин. '.$s.' сек.'
        ), false);

    }

}


























