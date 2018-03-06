<?php
namespace AdminBundle\Controller;

use AdminBundle\Entity\ContentType;
use Framework\Component\Controller\Controller;
use Framework\Component\HttpFoundation\Response;
use Framework\Modules\Authorization\Authorization;
use Framework\Component\HttpFoundation\Request;
use AdminBundle\Entity\Import;
use Framework\Modules\MySql\MySql;
use XMLReader;
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

                $tags = XMLParser::getTagsFromXml($_SERVER['DOCUMENT_ROOT'].'/web/files/'.$import->getLocation());

                return $this->render('AdminBundle:import/import', array(
                    'tags' => $tags,
                    'set' => $import,
                    'columns' => $mySql->getColumnList($import->getTable()),
                    'file' => $import->getLocation()
                ), false);
            }

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
    public function saveAction(Import $import, Request $request, MySql $mySql)
    {
//        $mySql->insert('addrobj', array(
//            'category' => 84,
//            'NORMDOC' => $reader->getAttribute('NORMDOC'),
//            'UPDATEDATE' => $reader->getAttribute('UPDATEDATE'),
//            'ENDDATE' => $reader->getAttribute('ENDDATE'),
//            'STARTDATE' => $reader->getAttribute('STARTDATE'),
//            'OKTMO' => $reader->getAttribute('OKTMO'),
//            'OKATO' => $reader->getAttribute('OKATO'),
//            'IFNSUL' => $reader->getAttribute('IFNSUL'),
//            'IFNSFL' => $reader->getAttribute('IFNSFL'),
//            'OPERSTATUS' => $reader->getAttribute('OPERSTATUS'),
//            'CENTSTATUS' => $reader->getAttribute('CENTSTATUS'),
//            'LIVESTATUS' => $reader->getAttribute('LIVESTATUS'),
//            'ACTSTATUS' => $reader->getAttribute('ACTSTATUS'),
//            'CURRSTATUS' => $reader->getAttribute('CURRSTATUS'),
//            'CODE' => $reader->getAttribute('CODE'),
//            'PLAINCODE' => $reader->getAttribute('PLAINCODE'),
//            'SEXTCODE' => $reader->getAttribute('SEXTCODE'),
//            'EXTRCODE' => $reader->getAttribute('EXTRCODE'),
//            'STREETCODE' => $reader->getAttribute('STREETCODE'),
//            'PLANCODE' => $reader->getAttribute('PLANCODE'),
//            'PLACECODE' => $reader->getAttribute('PLACECODE'),
//            'CTARCODE' => $reader->getAttribute('CTARCODE'),
//            'CITYCODE' => $reader->getAttribute('CITYCODE'),
//            'AUTOCODE' => $reader->getAttribute('AUTOCODE'),
//            'AREACODE' => $reader->getAttribute('AREACODE'),
//            'REGIONCODE' => $reader->getAttribute('REGIONCODE'),
//            'AOLEVEL' => $reader->getAttribute('AOLEVEL'),
//            'SHORTNAME' => $reader->getAttribute('SHORTNAME'),
//            'OFFNAME' => $reader->getAttribute('OFFNAME'),
//            'FORMALNAME' => $reader->getAttribute('FORMALNAME'),
//            'PARENTGUID' => $reader->getAttribute('PARENTGUID'),
//            'AOGUID' => $reader->getAttribute('AOGUID'),
//            'AOID' => $reader->getAttribute('AOID'),
//        ));

//        return $this->render('AdminBundle:import/setup', array(
//            'tags' => $tags,
//            'set' => $import,
//            'columns' => $mySql->getColumnList($import->getTable()),
//            'file' => $name
//        ), false);
    }


}