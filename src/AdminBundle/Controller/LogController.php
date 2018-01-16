<?php
namespace AdminBundle\Controller;

use AdminBundle\Services\Helpers;
use Framework\Core\HttpFoundation\Request;
use Framework\Core\Controller\Controller;
use Framework\Modules\Authorization\Authorization;
use Framework\Modules\MySql\MySql;

/**
 * @Route("/admin/logs")
 */
class LogController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(MySql $mySql)
    {
        if(Authorization::isConfirmed())
        {
            return $this->render('AdminBundle:log/index', array(
                'log' => $mySql->findAll('E_Log')
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }


}