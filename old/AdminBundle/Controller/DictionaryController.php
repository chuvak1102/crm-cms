<?php
namespace AdminBundle\Controller;

use Framework\Component\Controller\Controller;
use Framework\Modules\Authorization\Authorization;
use Framework\Component\HttpFoundation\Request;
use AdminBundle\Entity\FieldTypes;
use AdminBundle\Entity\Dictionary;
use AdminBundle\Entity\DictionaryData;
use Framework\Modules\FileUploader\FileUploader;
use AdminBundle\Services\FieldType;

/**
 * @Route("/admin/dictionary")
 */
class DictionaryController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $fRepo = $this->getORM()->getRepository(FieldTypes::class);
            $dRepo = $this->getORM()->getRepository(Dictionary::class);

            return $this->render('AdminBundle:dictionary/index.twig', array(
                'fields' => $fRepo->findAll(),
                'dictionary' => $dRepo->findAll()
            ));

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
            $dictionary = new Dictionary();
            $dictionary->setName($request->get('dictionary_name'));

            $alias = $this->createAlias($request->get('dictionary_name'), $request->get('dictionary_alias'));

            $dictionary->setAlias($alias);
            $dictionary->setType($request->get('dictionary_type'));

            $em = $this->getORM()->getManager();
            $em->persist($dictionary);
            $em->flush();

            return $this->redirectToRoute('/admin/dictionary/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/remove/{id}")
     */
    public function removeAction(Request $request, Dictionary $dictionary)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $em = $this->getORM()->getManager();
            $fRepo = $this->getORM()->getRepository(DictionaryData::class);
            $data = $fRepo->findBy(array(
                'dictionary' => $dictionary->getId()
            ));

            if($data)
            {
                foreach($data as $row)
                {
                    $em->remove($row);
                    $em->flush();
                }
            }

            $em->remove($dictionary);
            $em->flush();

            return $this->redirectToRoute('/admin/dictionary/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/remove_entry/{id}")
     */
    public function removeRowAction(Request $request, DictionaryData $row)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $em = $this->getORM()->getManager();
            $em->remove($row);
            $em->flush();

            $dRepo = $this->getORM()->getRepository(DictionaryData::class);
            $diRepo = $this->getORM()->getRepository(Dictionary::class);
            $fRepo = $this->getORM()->getRepository(FieldTypes::class);

            $dictionary = $diRepo->findOneBy(array(
                'id' => $row->getDictionary()
            ));

            $fields = $dRepo->findBy(array(
                'dictionary' => $dictionary->getId()
            ));

            return $this->render('AdminBundle:dictionary/show.twig', array(
                'fields' => $fields,
                'dictionary' => $dictionary,
                'field_types' => $fRepo->findAll(),
                'type' => new FieldType()
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/create_entry/{id}")
     */
    public function createRecordAction(Request $request, Dictionary $dictionary)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $value = $request->get('entry_value');

            if(!empty($request->files)){
                $uploader = new FileUploader();
                foreach($request->files as $k => $v){
                    $value = $uploader->save($v);
                }
            }

            $record = new DictionaryData();
            $record->setDictionary($dictionary->getId());
            $record->setName($request->get('entry_name'));
            $record->setValue($value);

            $em = $this->getORM()->getManager();
            $em->persist($record);
            $em->flush();

            $dRepo = $this->getORM()->getRepository(DictionaryData::class);
            $fRepo = $this->getORM()->getRepository(FieldTypes::class);
            $fields = $dRepo->findBy(array(
                'dictionary' => $dictionary->getId()
            ));

            return $this->render('AdminBundle:dictionary/show.twig', array(
                'fields' => $fields,
                'dictionary' => $dictionary,
                'field_types' => $fRepo->findAll(),
                'type' => new FieldType()
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/show/{id}")
     */
    public function showAction(Request $request, Dictionary $dictionary)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $dRepo = $this->getORM()->getRepository(DictionaryData::class);
            $fRepo = $this->getORM()->getRepository(FieldTypes::class);
            $fields = $dRepo->findBy(array(
                'dictionary' => $dictionary->getId()
            ));

            return $this->render('AdminBundle:dictionary/show.twig', array(
                'fields' => $fields,
                'dictionary' => $dictionary,
                'field_types' => $fRepo->findAll(),
                'type' => new FieldType()
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }
}
