<?php
namespace AdminBundle\Controller;

use AdminBundle\Services\Helpers;
use Framework\Core\HttpFoundation\Request;
use Framework\Core\Controller\Controller;
use Framework\Modules\Authorization\Authorization;
use Framework\Modules\MySql\MySql;

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
            return $this->render('AdminBundle:form/index', array(
                'forms' => $mySql->findAll('E_Form')
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/new")
     */
    public function newAction(MySql $mySql)
    {
        if(Authorization::isConfirmed())
        {
            return $this->render('AdminBundle:form/new', array(
                'fields' => $mySql->findAll('E_Field_Types')
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
            return $this->render('AdminBundle:form/show', array(
                'form' => $mySql->findOneBy('E_Form', array(
                    'id' => $id
                )),
                'fields' => $mySql->findBy('E_Form_Fields', array(
                    'E_Form' => $id
                )),
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/submit/{alias}")
     */
    public function submitAction()
    {

    }
}