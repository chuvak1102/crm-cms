<?php
namespace AdminBundle\Controller;

use Framework\Component\Controller\Controller;
use Framework\Modules\Authorization\Authorization;
use Framework\Component\HttpFoundation\Request;
use AdminBundle\Entity\FieldTypes;

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

            return $this->render('AdminBundle:dictionary/index', array(
                'fields' => $fRepo->findAll()
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }
}
