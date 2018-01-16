<?php
namespace AdminBundle\Controller;

use AdminBundle\Entity\ContentType;
use Framework\Core\HttpFoundation\JsonResponse;
use Framework\Core\HttpFoundation\Request;
use Framework\Core\Controller\Controller;
use AdminBundle\Services\Helpers;
use AdminBundle\Entity\CategoryFields as FieldSet;
use AdminBundle\Entity\Category;
use Framework\Core\ORM\Extension\NestedSets;
use Framework\Modules\Authorization\Authorization;
use Framework\Modules\MySql\MySql;

/**
 * @Route("/admin/category")
 */
class CategoryController extends Controller
{
    /**
     * @Route("/")
     */
    function indexAction(NestedSets $tree)
    {
        if(Authorization::isConfirmed())
        {
            return $this->render('AdminBundle:category/index', array(
                'category' => $tree->getTree(),
                'templates' => Helpers::getFilesInDir('/app/Views/default/')
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/deleteall")
     */
    function deleteAllAction(NestedSets $tree)
    {
        if(Authorization::isConfirmed())
        {
            $tree->deleteAll();

            return $this->redirectToRoute('/admin/category/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }

    }

    /**
     * @Route("/new/{id}")
     */
    function newAction(Category $category, NestedSets $tree)
    {
        if(Authorization::isConfirmed())
        {
            return $this->render('AdminBundle:category/new', array(
                'category' => $tree->getTree(),
                'name' => $category->getName(),
                'to' => $category->getId()
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/save/{id}")
     */
    function saveAction(Request $request, $id, NestedSets $tree, MySql $mySql)
    {
        if(Authorization::isConfirmed())
        {
            $name = Helpers::sqlSanitize($request->get('name'));
            $image = $request->get('image');
            $description = $request->get('description');
            $alias = Helpers::stringToUrl($name);

            if(!empty($request->get('alias')))
            {
                $alias = Helpers::stringToUrl($request->get('alias'));
            }

            $tree->insertNode($name, $alias, $image, $description, $id);

            $mySql->insert('E_Content', array(
                'name' => $name,
                'alias' => $alias,
                'category' => $id
            ));

            return $this->redirectToRoute('/admin/category/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/delete/{id}")
     */
    function deleteAction(Category $category, NestedSets $tree, MySql $mySql)
    {
        if(Authorization::isConfirmed())
        {
            $mySql->remove('E_Content_Fields', array(
                'category' => $category->getId()
            ));

            $mySql->remove('E_Content', array(
                'category' => $category->getId()
            ));

            $tree->deleteNodeRecursively($category->getId());

            return $this->redirectToRoute('/admin/category/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/setup/{id}")
     */
    function setupAction(Category $category, NestedSets $tree)
    {
        if(Authorization::isConfirmed())
        {
            return $this->render('AdminBundle:category/setup', array(
                'category' => $tree->getTree(),
                'name' => $category->getName(),
                'to' => $category->getId()
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/complete/{id}")
     */
    function completeAction(Request $request, NestedSets $tree, Category $category, MySql $MySql)
    {
        if(Authorization::isConfirmed())
        {
            $fields[] = array(
                'fieldId' => 1,
                'type' => 2,
                'canonical' => 'category',
                'alias' => 'category',
                'params' => ''
            );

            foreach($request->get('fields') as $k => $v)
            {
                $fieldType = $request->get('fields')[$k];
                $canonical = $request->get('canonical')[$k];
                $type = $request->get('fieldType')[$k];

                if(empty($request->get('alias')[$k]))
                {
                    $alias = Helpers::stringToUrl($canonical);
                } else {
                    $alias = Helpers::stringToUrl($request->get('alias')[$k]);
                }

                $values = $request->get('params')[$k];

                $fields[] = array(
                    'fieldId' => $fieldType,
                    'type' => $type,
                    'canonical' => $canonical,
                    'alias' => $alias,
                    'params' => $values
                );
            }

            if(!empty($fields)){

                $table = $tree->getCategoryPathById($category->getId())[1]['alias'];

                $MySql->createTable($table, $fields);

                foreach($fields as $singleSet)
                {
                    $fieldSet = new FieldSet();
                    $fieldSet->setCategory($category->getId());
                    $fieldSet->setType($singleSet['fieldId']);
                    $fieldSet->setAlias($singleSet['alias']);
                    $fieldSet->setCanonical($singleSet['canonical']);
                    $fieldSet->setParams($singleSet['params']);

                    $MySql->save($fieldSet);

                    $tree->completeSetup($category->getId());
                }
            }

            return $this->redirectToRoute('/admin/category/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/show/{id}")
     */
    function showAction(Category $category){

        if(Authorization::isConfirmed())
        {
            return $this->render('AdminBundle:category/show', array(
                'category' => $category
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/template")
     */
    function templateAction(Request $request, NestedSets $tree)
    {
        if(Authorization::isConfirmed())
        {
            $tree->setTemplate($request->get('category'), $request->get('template'));

            return new JsonResponse(array(
                'template' => $request->get('template'),
                'category' => $request->get('category')
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/btn-set/{category}")
     */
    public function categoryButtonsAction(Request $request, Category $category)
    {
        if($request->isXmlHttpRequest())
        {
            if(Authorization::isConfirmed())
            {
                return $this->render('AdminBundle:category/tree-buttons', array(
                    'category' => $category,
                    'templates' => Helpers::getFilesInDir('/app/Views/default/')
                ), false);
            }
        }

        return null;
    }
}