<?php
namespace AdminBundle\Controller;

use AdminBundle\Services\Helpers;
use Framework\Component\HttpFoundation\Request;
use Framework\Component\Controller\Controller;
use AdminBundle\Entity\Category;
use AdminBundle\Entity\CategoryFields;
use AdminBundle\Entity\ContentType;
use Framework\Component\ORM\Extension\NestedSets;
use Framework\Modules\FileUploader\FileUploader;
use Framework\Modules\Authorization\Authorization;

/**
 * @Route("/admin/product")
 */
class ProductController extends Controller {

    /**
     * @Route("/")
     */
    function indexAction()
    {
        if(Authorization::isConfirmed())
        {
            $cRepo = $this->getORM()->getRepository(Category::class);

            $content = $this->getMysql()->findAll('E_Content');

            if(!empty($content))
            {
                foreach($content as $c)
                {
                    $data = $cRepo->findBy(array('alias' => $c['alias']));
                }
            }

            if(empty($data)) $data = null;

            return $this->render('AdminBundle:product/index', array(
                'category' => $data
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/new/{category}")
     */
    function newAction(Category $category, NestedSets $tree)
    {
        if(Authorization::isConfirmed())
        {
            $path = $tree->getPath($category->getAlias());
            $cRepo = $this->getORM()->getRepository(Category::class);
            $fRepo = $this->getORM()->getRepository(CategoryFields::class);

            $ctype = $cRepo->findBy(array('alias' => $path[1]['alias']));
            $fields = $fRepo->findBy(array('category' => $ctype[0]->getId()));

            return $this->render('AdminBundle:product/new', array(
                'category' => $category,
                'fields' => $fields,
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/save/{category}")
     */
    function saveAction(Category $category, Request $request, NestedSets $tree)
    {
        if(Authorization::isConfirmed()){

            $path = $tree->getCategoryPathById($category->getId());
            $ctypeAlias = $path[1]['alias'];

            $values = array(
                'category' => $category->getId()
            );

            foreach($request->post as $k => $v){
                $values[$k] = $v;
            }

            if(!empty($request->files)){
                $uploader = new FileUploader();

                foreach($request->files as $k => $v){

                    if(!empty($request->files[$k]['name']))
                    {
                        $name = $uploader->save($v);
                        $values[$k] = $name;
                    } else {
                        $values[$k] = null;
                    }
                }
            }

            if(!empty($request->get('alias')))
            {
                $values['alias'] = $request->get('alias');
            } else {

                $values['alias'] = Helpers::stringToAlias($request->get('name'));
            }

            $values['name'] = Helpers::sqlSanitize($values['name']);

            $this->getMysql()->insert($ctypeAlias, $values);

            return $this->redirectToRoute('/admin/product/');
        } else {

            return $this->redirectToRoute('/admin/login/');
        }

    }

    /**
     * @Route("/edit/{cid}")
     */
    function editAction($cid, NestedSets $tree){

        if(Authorization::isConfirmed()){
            $array = explode('_', $cid);
            $category = $array[0];
            $product = $array[1];

            $fRepo = $this->getORM()->getRepository(CategoryFields::class);
            $cRepo = $this->getORM()->getRepository(Category::class);
            $ctype = $tree->getCategoryPathById($category);
            $ctypeAlias = $ctype[1]['alias'];

            $fields = $fRepo->findBy(array(
                'category' => $ctype[1]['id']
            ));
            $category = $cRepo->findOneBy(array(
                'id' => $category
            ));
            $product = $this->getMysql()->findOneBy($ctypeAlias,
                array(
                    'id' => $product
                ));

            return $this->render('AdminBundle:product/edit', array(
                'fields' => $fields,
                'category' => $category,
                'product' => $product
            ), false);
        } else {

            return $this->redirectToRoute('/admin/login/');
        }

    }

    /**
     * @Route("/update/{cid}")
     */
    function updateAction($cid, Request $request, NestedSets $tree){

        if(Authorization::isConfirmed()){
            $array = explode('_', $cid);
            $category = $array[0];
            $product = $array[1];

            $ctype = $tree->getCategoryPathById($category);
            $ctypeAlias = $ctype[1]['alias'];

            $product = $this->getMysql()->findOneBy($ctypeAlias, array(
                'id' => $product
            ));

            $table = $ctypeAlias;
            $fields = $request->post;
            $id = $product['id'];

            if(!empty($request->files)){
                $uploader = new FileUploader();
                foreach($request->files as $k => $v){
                    $name = $uploader->save($v);
                    $fields[$k] = $name;
                }
            }

            $this->getMysql()->update($table, $fields, $id);

            return $this->redirectToRoute('/admin/product/');
        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/show/{category}")
     */
    function showAction(Category $category, NestedSets $tree)
    {
        if(Authorization::isConfirmed())
        {
            $cRepo = $this->getORM()->getRepository(ContentType::class);

            $path = $tree->getCategoryPathById($category->getId());
            $ctype = $path[1]['alias'];


//            $ctype = $cRepo->findBy(array(
//                'category' => $category->getId()
//            ));

            $products = $this->getMysql()->findBy($ctype, array(
                'category' => $category->getId()
            ), 100);

            return $this->render('AdminBundle:product/show', array(
                'category' => $category,
                'ctype' => $ctype,
                'products' => $products
            ), false);

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/delete/{cid}")
     */
    function deleteAction($cid, Request $request)
    {
        if(Authorization::isConfirmed()){
            $array = explode('_', $cid);
            $category = $array[0];
            $product = $array[1];

            $cRepo = $this->getORM()->getRepository(Category::class);

            $category = $cRepo->findOneBy(array(
                'id' => $category
            ));
            $product = $this->getMysql()->findOneBy($category->getAlias(), array(
                'id' => $product
            ));

            $table = $category->getAlias();
            $id = $product['id'];

            $this->getMysql()->remove($table, array('id' => $id));

            return $this->redirectToRoute('/admin/product/');
        } else {

            return $this->redirectToRoute('/admin/login/');
        }

    }

}