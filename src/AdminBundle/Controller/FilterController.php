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
                'filter' => $lRepo->findAll()
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }


}