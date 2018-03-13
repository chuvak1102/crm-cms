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
use AdminBundle\Services\XMLParser;
use Framework\Modules\FileUploader\FileUploader;

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
            $iRepo = $this->getORM()->getRepository(Import::class);
            $cRepo = $this->getORM()->getRepository(ContentType::class);

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
            $import = new Import();
            $import->setName($request->get('name'));
            $import->setType($request->get('type'));
            $import->setSource($request->get('source'));
            $import->setTable($request->get('table'));

            $em = $this->getORM()->getManager();
            $em->persist($import);
            $em->flush();

            return $this->redirectToRoute('/admin/import/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
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
     * @Route("/begin/{import}")
     */
    public function beginAction(Request $request, Import $import)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            return $this->render('AdminBundle:import/begin', array(
                'set' => $import,
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
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
     * @Route("/setup/{import}")
     */
    public function setupAction(Request $request, MySql $mySql, Import $import)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $iRepo = $this->getORM()->getRepository(ImportFields::class);
            $parser = new XMLParser($import->getLocation());
            $tags = $parser->getTagsFromXml();

            return $this->render('AdminBundle:import/setup', array(
                'tags' => $tags,
                'set' => $import,
                'columns' => $mySql->getColumnList($import->getTable()),
                'file' => $import->getLocation(),
                'saved' => $iRepo->findBy(array('import' => $import->getId()))
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/save/{import}")
     */
    public function completeSetupAction(Import $import, Request $request, MySql $mySql)
    {
        $repo = $this->getORM()->getRepository(ImportFields::class);
        $em = $this->getORM()->getManager();

        $exist = $repo->findBy(array(
            'import' => $import->getId()
        ));

        if($exist)
        {
            foreach($exist as $i)
            {
                $em->remove($i);
            }
        }

        $em->flush();

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

        return $this->redirectToRoute('/admin/import/');
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


























