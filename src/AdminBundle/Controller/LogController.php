<?php
namespace AdminBundle\Controller;

use AdminBundle\Entity\Log;
use Framework\Component\Controller\Controller;
use Framework\Modules\Authorization\Authorization;

/**
 * @Route("/admin/logs")
 */
class LogController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        if(Authorization::isConfirmed())
        {
            $lRepo = $this->getORM()->getRepository(Log::class);

            return $this->render('AdminBundle:log/index', array(
                'log' => $lRepo->findAll()
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }


}