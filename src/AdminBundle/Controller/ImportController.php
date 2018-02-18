<?php
namespace AdminBundle\Controller;

use AdminBundle\Entity\Log;
use Framework\Component\Controller\Controller;
use Framework\Modules\Authorization\Authorization;
use Framework\Component\HttpFoundation\Request;

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
            return $this->render('AdminBundle:import/index', array(

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
            return $this->render('AdminBundle:import/new', array(

            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/start")
     */
    public function importAction(Request $request)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            return $this->render('AdminBundle:import/new', array(

            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction(Request $request)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            return $this->redirectToRoute('/admin/import/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }


}