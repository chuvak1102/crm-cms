<?php
namespace AdminBundle\Controller;

use AdminBundle\Services\Helpers;
use Framework\Component\HttpFoundation\Request;
use Framework\Component\Controller\Controller;
use AdminBundle\Services\Constructor;
use Framework\Component\ORM\Extension\NestedSets;
use Framework\Modules\MySql\MySql;
use Framework\Modules\Pagination\Pagination;
use Framework\Component\HttpFoundation\Response;

class ViewController extends Controller{

    private $paginationPrefix = 1;
    private $paginationButtons = 10;
    private $paginationItems = 25;
    private $totalItems = 0;
    private $isCategory = false;
    private $query;

    /**
     * @Route("/katalog-tovarov/{category_alias}")
     */
    function categoryAction()
    {
        die('[eq');
    }

    /**
     * @Route("/katalog-tovarov/{category_parent}/{category}")
     */
    function category2Action()
    {
        die('sub');
    }

    /**
     * @Route("/")
     */
    function indexAction123($query)
    {

        die('index');
        $queryArray = $this->getQueryArray($query);

        $ctype = $this->getCType($queryArray);
        $ctypeAlias = $ctype ? $ctype['alias'] : null;
        $template = $ctype ? $ctype['template'] : 'layout.twig';
        $constructor = $this->getPageVariables($template);
        $product = $this->getProducts($queryArray);
        $path = $this->getCategoryPath($queryArray);
        $productAlias = $this->getProductAlias($queryArray);

        $pagination = new Pagination(
            $product,
            $path,
            $this->paginationPrefix,
            $this->paginationButtons,
            $this->paginationItems,
            $this->totalItems
        );

        return $this->render('default:'.$template, array
        (
            'app' => array(
                'path' => $path,
                'productAlias' => $productAlias,
                'isCategory' => (string)$this->isCategory,
                'template' => $template
            ),
            'ctype' => $this->getCType($queryArray),
            'ctype_alias' => $ctypeAlias,
            'binder' => $constructor,
            'template' => $template,
            'pagination' => $pagination
        ));
    }

    /**
     * @Route("/form/submit/{token}")
     */
    public function submitAction($token, MySql $mySql)
    {
        die('form');
        $token = Helpers::sqlSanitize($token);

        $form = $mySql->findOneBy('E_Form', array(
            'token' => $token
        ));

        if($form)
        {

        }

        return $this->redirectToRoute('/');
    }

    private function getQueryArray($query)
    {
        if($query)
        {
            $queryArray = explode('/', $query);
            foreach(explode('/', $query) as $k => $v)
            {
                if(preg_match('/[p]{1}[a]{1}[g]{1}[e]{1}[-][0-9]{1,10}/', $v))
                {
                    $this->paginationPrefix = intval(str_replace('page-', '', $v));
                    unset($queryArray[$k]);
                    $this->query = implode('/', $queryArray);

                } else {

                    $this->query = implode('/', $queryArray);
                }

                if(empty($queryArray[$k]))
                {
                    unset($queryArray[$k]);
                }
            }

            $queryArray = array_values($queryArray);
        }

        if(!empty($queryArray)) return $queryArray;

        return [];
    }

    private function getPageVariables($template)
    {
        $constructor = new Constructor();
        $constructors = $this->getMysql()->findAll('E_Binder');

        if(is_array($constructors))
        {
            $variables = array();
            foreach($constructors as $single)
            {
                $method = $single['method'];
                $params = $single['parameters'];
                $page = $single['page'];

                if($page == $template)
                {
                    $variables[$single['variable']] = $constructor->$method($params);
                }
            }
        }

        if(empty($variables)) return null;

        return $variables;
    }

    private function getProducts($queryArray)
    {
        $mysql = $this->getMysql();
        $tree = new NestedSets();

        $start = ($this->paginationPrefix - 1) * $this->paginationItems;
        $limit = $start.','.$this->paginationItems;;

        switch(count($queryArray))
        {
            case 1 : {

                $this->isCategory = true;

                $ctypeExists = $mysql->findOneBy('E_Content', array(
                    'alias' => $queryArray[0]
                ));

                if($ctypeExists)
                {
                    $this->totalItems = $mysql->getRowsCount($queryArray[0]);
                    $products = $mysql->findAll($queryArray[0], $limit);

                    return $products;
                } else {

                    return $this->redirectToRoute('/404');
                }


            }

            default : {

                $count = count($queryArray);
                $category = $tree->getNodeByAlias($queryArray[$count - 1]);

                if($category)
                {
                    $this->isCategory = true;

                    $ctypeExists = $mysql->findOneBy('E_Content', array(
                        'alias' => $queryArray[0]
                    ));

                    if($ctypeExists)
                    {
                        $this->totalItems = $mysql->getRowsCount($queryArray[0]);
                        $products = $mysql->findBy($queryArray[0], array(
                            'category' => $category['id']
                        ), $limit);

                        if($products)
                        {

                            return $products;
                        } else {

                            return [];
                        }

                    } else {

                        return $this->redirectToRoute('/404');
                    }

                } else {

                    $category = $tree->getNodeByAlias($queryArray[$count - 2]);

                    if($category)
                    {
                        $ctypeExists = $mysql->findOneBy('E_Content', array(
                            'alias' => $queryArray[0]
                        ));

                        if($ctypeExists)
                        {
                            $this->totalItems = $mysql->getRowsCount($queryArray[0]);
                            $product = $mysql->findBy($queryArray[0], array(
                                'alias' => $queryArray[$count - 1],
                                'category' => $category['id']
                            ), $limit);

                            return $product ? $product : [];

                        } else {

                            return $this->redirectToRoute('/404');
                        }


                    }
                }

                return [];
            }
        }
    }

    private function getCType($queryArray)
    {
        if(!$queryArray) return null;

        $tree = new NestedSets();
        $count = count($queryArray);

        $ctype = $tree->getNodeByAlias($queryArray[count($queryArray) - 1]);

        if(!$ctype && $count > 1)
        {
            $ctype = $tree->getNodeByAlias($queryArray[count($queryArray) - 2]);
        }

        if(!$ctype) return null;

        return $ctype;
    }

    private function getProductAlias($queryArray)
    {
        $tree = new NestedSets();
        $count = count($queryArray) - 1;

        $ctype = $tree->getNodeByAlias($queryArray[count($queryArray) - 1]);

        if(!$ctype && $count > 1){
            $ctype = $tree->getNodeByAlias($queryArray[count($queryArray) - 2]);
            if(!$ctype)
            {
                return null;
            }
            $alias = $queryArray[count($queryArray) - 1];
        }

        if(!empty($alias)) return $alias;

        return null;
    }

    private function getCategoryPath($queryArray)
    {
        if(empty($queryArray)) return '/';
        return (implode('/', $queryArray));
    }

}