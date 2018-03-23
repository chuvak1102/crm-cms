<?php
namespace AdminBundle\Controller;
use Framework\Component\Session\Session;
use Framework\Component\HttpFoundation\Request;
use Framework\Component\Controller\Controller;
use Framework\Modules\Authorization\Authorization;
use AdminBundle\Services\DataChecker;

/**
 * @Route("/admin")
 */
class DefaultController extends Controller{

    /**
     * @Route("/")
     */
    function indexAction(){

        if(Authorization::isConfirmed())
        {

            return $this->render('AdminBundle:layout.twig');
        } else {

            return $this->redirectToRoute('/admin/login/');
        }

    }

    /**
     * @Route("/login")
     */
    function loginAction(Request $request)
    {
        if(!empty($request->get('login') && !empty($request->get('pass')))){

            $login = DataChecker::isString($request->get('login'));
            $password = DataChecker::isString($request->get('pass'));

            if($login && $password)
            {
                $authorization = new Authorization($request->get('login'), $request->get('pass'));
                if($authorization::isConfirmed())
                {

                    return $this->redirectToRoute('/admin/');
                } else {

                    return $this->redirectToRoute('/admin/login/');
                }
            } else {

                return $this->redirectToRoute('/admin/login/');
            }
        }

        return $this->render('AuthorizationBundle:login');
    }

    /**
     * @Route("/logout")
     */
    function logoutAction(Session $session)
    {
        $session->clear();
        return $this->redirectToRoute('/admin/login/');
    }

    /**
     * @Route("/disabled")
     */
    function disabledAction()
    {
        return $this->render('AdminBundle:disabled', null, false);
    }
}