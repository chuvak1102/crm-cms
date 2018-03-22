<?php
namespace AdminBundle\Controller;

use AdminBundle\Entity\Log;
use Framework\Component\Controller\Controller;
use Framework\Modules\Authorization\Authorization;
use Framework\Component\HttpFoundation\Request;

/**
 * @Route("/admin/filter")
 */
class FilterController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $lRepo = $this->getORM()->getRepository(Log::class);

            return $this->render('AdminBundle:filter/index', array(
                'log' => $lRepo->findAll()
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/shit/")
     */
    public function shitAction(Request $request)
    {
        return $this->render('AdminBundle:filter/filter', array(

        ), false);
    }

    /**
     * @Route("/shit/{param}")
     */
    public function shit1Action(Request $request, $shit)
    {
        return $this->render('AdminBundle:filter/filter', array(
            $shit
        ), false);
    }

    /**
     * @Route("/shit/shit/shit/shit/{param}")
     */
    public function shit4Action(Request $request, $shit)
    {
        return $this->render('AdminBundle:filter/filter', array(
            $shit
        ), false);
    }

    /**
     * @Route("/shit/shit")
     */
    public function shit2Action(Request $request, $shit)
    {
        return $this->render('AdminBundle:filter/filter', array(
            $shit
        ), false);
    }

    /**
     * @Route("/shit/shit/{param}")
     */
    public function shit3Action(Request $request, $shit)
    {
        return $this->render('AdminBundle:filter/filter', array(
            $shit
        ), false);
    }



}