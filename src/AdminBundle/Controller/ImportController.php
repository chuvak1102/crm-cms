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
            $reader = new XMLReader();
            $reader->open('/var/www/html/web/files/addr.XML', null, LIBXML_PARSEHUGE);

            $tags = $this->getTags($reader);
            $reader->close();

            return $this->render('AdminBundle:import/setup', array(
                'tags' => $tags,
                'set' => $import
            ), false);

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
    }

    private function getTags(XMLReader $reader)
    {
        $depth = 0;
        while($child = $reader->read())
        {
            $break = false;
            if($reader->nodeType === $reader::ELEMENT)
            {
                $level = $reader->depth;

                if($depth > $level)
                {
                    $element = $reader->expand();
                    $break = true;
                    break;
                }

                $depth++;
                $curr[] = $reader->localName;

            }

            if($break) break;
        }

        if(empty($element)) return null;

        $foundTags = $element->attributes;

        $tags = array();

        for($i = 0; $i < $foundTags->length; $i++)
        {
            if(!empty($foundTags->item($i)->name))
            {
                $tags[$foundTags->item($i)->name] = $foundTags->item($i)->nodeValue;
            }
        }

        if(empty($tags)) return null;

        return $tags;
    }



}