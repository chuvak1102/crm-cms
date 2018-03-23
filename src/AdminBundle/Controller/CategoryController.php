<?php
namespace AdminBundle\Controller;

use AdminBundle\Entity\DataType;
use Framework\Component\HttpFoundation\JsonResponse;
use Framework\Component\HttpFoundation\Request;
use Framework\Component\Controller\Controller;
use AdminBundle\Services\Helpers;
use AdminBundle\Entity\CategoryFields as FieldSet;
use AdminBundle\Entity\Category;
use Framework\Component\ORM\Extension\NestedSets;
use Framework\Modules\Authorization\Authorization;
use Framework\Modules\MySql\MySql;
use AdminBundle\Entity\FieldTypes;

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
            $cRepo = $this->getORM()->getRepository(Category::class);

            $categories = $cRepo->findAll();

            foreach($categories as $i)
            {
                $paths = $tree->getCategoryPathById($i->getId());
                $path = array();
                $url = array();

                if($paths)
                {
                    foreach($paths as $p)
                    {
                        $path[] = $p['name'];
                        $url[] = $p['alias'];
                    }

                    $i->url = implode('/', $url);
                    $i->path = implode('/', $path);

                    $result[] = $i;
                } else {

                    $result[] = $i;
                }
            }

            return $this->render('AdminBundle:category/index.twig', array(
                'category' => $result
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
            return $this->render('AdminBundle:category/new.twig', array(
                'category' => $category,
                'tree' => $tree->getTree(),
                'templates' => Helpers::getFilesInDir('/app/Views/default')
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
            $name = $request->get('name');
            $image = $request->get('image');
            $description = $request->get('description');
            $template = $request->get('template');
            $alias = Helpers::stringToAlias($name);

            if(!empty($request->get('alias')))
            {
                $alias = Helpers::stringToAlias($request->get('alias'));
            }

            $tree->insertNode($name, $alias, $template, $image, $description, $id);

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
     * @Route("/edit/{id}")
     */
    function editAction(Category $category)
    {
        $cRepo = $this->getORM()->getRepository(Category::class);

        return $this->render('AdminBundle:category/edit.twig', array(
            'category' => $category,
            'tree' => $cRepo->findAll(),
            'templates' => Helpers::getFilesInDir('/app/Views/default')
        ));
    }

    /**
     * @Route("/edit-save/{id}")
     */
    function editSaveAction(Request $request, $id, MySql $mySql)
    {
        if(Authorization::isConfirmed())
        {
            $name = $request->get('name');
            $image = $request->get('image');
            $description = $request->get('description');
            $template = $request->get('template');
            $alias = Helpers::stringToAlias($name);

            if(!empty($request->get('alias')))
            {
                $alias = Helpers::stringToAlias($request->get('alias'));
            }

            $mySql->update('E_Content_Tree', array(
                'name' =>$name,
                'alias' => $alias,
                'template' => $template,
                'image' => $image,
                'description' => $description
            ), $id);

            $mySql->remove('E_Content', array(
                'category' => $id
            ));

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
    function setupAction(Category $category)
    {
        if(Authorization::isConfirmed())
        {
            $orm = $this->getORM();
            $fRepo = $orm->getRepository(FieldTypes::class);
            $tRepo = $orm->getRepository(DataType::class);

            return $this->render('AdminBundle:category/setup.twig', array(
                'category' => $category,
                'datatype' => $tRepo->findAll(),
                'fields' => $fRepo->findAll()
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
                'type' => 11,
                'fieldtype' => 1,
                'DataType' => 1,
                'canonical' => 'category',
                'alias' => 'category',
                'params' => ''
            );

            foreach($request->get('FieldType') as $k => $v)
            {
                $fieldType = $request->get('FieldType')[$k];
                $canonical = $request->get('canonical')[$k];
                $dataType = $request->get('DataType')[$k];

                if(empty($request->get('alias')[$k]))
                {
                    $alias = Helpers::stringToAlias($canonical);
                } else {
                    $alias = Helpers::stringToAlias($request->get('alias')[$k]);
                }

                $values = $request->get('params')[$k];

                $fields[] = array(
                    'type' => $dataType,
                    'DataType' => $dataType,
                    'fieldtype' => $fieldType,
                    'canonical' => $canonical,
                    'alias' => $alias,
                    'params' => $values
                );
            }

            if(!empty($fields)){

                $table = $category->getAlias();

                $MySql->createTable($table, $fields);

                $em = $this->getORM()->getManager();

                foreach($fields as $singleSet)
                {
                    $fieldSet = new FieldSet();
                    $fieldSet->setCategory($category->getId());
                    $fieldSet->setType($singleSet['DataType']);
                    $fieldSet->setFieldType($singleSet['fieldtype']);
                    $fieldSet->setAlias($singleSet['alias']);
                    $fieldSet->setCanonical($singleSet['canonical']);
                    $fieldSet->setParams($singleSet['params']);

                    $em->persist($fieldSet);

                    $tree->completeSetup($category->getId());
                }

                $em->flush();
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
            return $this->render('AdminBundle:category/show.twig', array(
                'category' => $category
            ), false);

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

}