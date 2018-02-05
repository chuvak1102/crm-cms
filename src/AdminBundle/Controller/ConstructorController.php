<?php
namespace AdminBundle\Controller;
use Framework\Component\HttpFoundation\Request;
use Framework\Component\Controller\Controller;
use AdminBundle\Entity\Constructor;
use AdminBundle\Services\Helpers;
use Framework\Modules\Authorization\Authorization;

/**
 * @Route("/admin/constructor")
 */
class ConstructorController extends Controller{

    /**
     * @Route("/")
     */
    function indexAction()
    {
        if(Authorization::isConfirmed())
        {
            $mysql = $this->getMysql();
            $categories = Helpers::getFilesInDir('/app/Views/default/');
            $constructors = $mysql->findAll('E_Binder');

            return $this->render('AdminBundle:constructor/index', array(
                'page' => $categories,
                'constructor' => $constructors
            ));
        } else {

            return $this->redirectToRoute('/admin/login/');
        }

    }

    /**
     * @Route("/save")
     */
    function saveAction(Request $request)
    {
        if(Authorization::isConfirmed())
        {
            $constructor = new Constructor();
            $constructor->setPage($request->get('page'));
            $constructor->setMethod($request->get('method'));
            $constructor->setVariable($request->get('variable'));
            $constructor->setParameters($request->get('parameters'));
            $this->getMysql()->save($constructor);
            return $this->redirectToRoute('/admin/constructor/');
        } else {

            return $this->redirectToRoute('/admin/login/');
        }

    }

    /**
     * @Route("/delete/{constructor}")
     */
    function deleteAction(Constructor $constructor)
    {
        if(Authorization::isConfirmed())
        {
            $this->getMysql()->remove('E_Binder', array('id' => $constructor->getId()));
            return $this->redirectToRoute('/admin/constructor/');
        } else {

            return $this->redirectToRoute('/admin/login/');
        }

    }

}