<?php
namespace AdminBundle\Controller;

use AdminBundle\Services\Helpers;
use Framework\Component\HttpFoundation\Request;
use Framework\Component\Controller\Controller;
use Framework\Modules\Authorization\Authorization;
use Framework\Modules\MySql\MySql;
use AdminBundle\Entity\FieldTypes;
use AdminBundle\Entity\DataType;
use AdminBundle\Services\FieldType;

/**
 * @Route("/admin/form")
 */
class FormController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(MySql $mySql)
    {
        if(Authorization::isConfirmed())
        {
            return $this->render('AdminBundle:form/index.twig', array(
                'forms' => $mySql->findAll('E_Form')
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/new")
     */
    public function newAction()
    {
        if(Authorization::isConfirmed())
        {
            $orm = $this->getORM();
            $fRepo = $orm->getRepository(FieldTypes::class);
            $tRepo = $orm->getRepository(DataType::class);

            return $this->render('AdminBundle:form/new.twig', array(
                'datatype' => $tRepo->findAll(),
                'fields' => $fRepo->findAll()
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/create")
     */
    public function create(Request $request, MySql $mySql)
    {
        if(Authorization::isConfirmed())
        {
            $formName = $request->get('form_name');
            $formAlias = $request->get('form_alias');

            if(empty($formAlias))
            {
                $formAlias = Helpers::stringToAlias($formName);
            }

            foreach($request->get('fields') as $k => $v)
            {
                $type = $v;
                $name = $request->get('column')[$k];

                $fields[] = array(
                    'type' => $type,
                    'alias' => $name,
                );
            }

            $mySql->createTable($formAlias, $fields);

            $mySql->insert('E_Form', array(
                'name' => $formName,
                'alias' => $formAlias,
                'token' => sha1($formAlias)
            ));

            $formId = $mySql->lastId;

            foreach($request->get('fields') as $k => $v)
            {
                $ailas = Helpers::stringToAlias($request->get('canonical')[$k]);
                $mySql->insert('E_Form_Fields', array(
                    'E_Form' => $formId,
                    'canonical' => $request->get('canonical')[$k],
                    'alias' => $ailas,
                    'type' => $request->get('fields')[$k],
                    'name' => $request->get('name')[$k],
                    'value' => $request->get('value')[$k],
                    'required' => $request->get('required')[$k],
                ));
            }

            return $this->redirectToRoute('/admin/form/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/show/{id}")
     */
    public function showAction(MySql $mySql, $id)
    {
        if(Authorization::isConfirmed())
        {
            return $this->render('AdminBundle:form/show.twig', array(
                'form' => $mySql->findOneBy('E_Form', array(
                    'id' => $id
                )),
                'fields' => $mySql->findBy('E_Form_Fields', array(
                    'E_Form' => $id
                )),
                'type' => new FieldType()
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/delete/{id}")
     */
    public function deleteAction(MySql $mySql, $id)
    {
        $form = $mySql->findOneBy('E_Form', array(
            'id' => $id
        ));

        if($form['alias'])
        {
            $mySql->remove('E_Form_Fields', array(
                'E_Form' => $id
            ));

            $mySql->remove('E_Form', array(
                'alias' => $form['alias']
            ));

            return $this->redirectToRoute('/admin/form/');
        }

        return $this->redirectToRoute('/admin/form/');
    }
}