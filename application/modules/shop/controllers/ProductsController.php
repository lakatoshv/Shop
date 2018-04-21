<?php

class Shop_ProductsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function listAction()
    {
        /*
        $productsTbl = new Shop_Model_DbTable_Products();
        $this->view->products = $productsTbl->fetchAll();
        */
        $productsTbl = new Shop_Model_ListProducts();
        $productsList = $productsTbl->listProducts();

        $show = Zend_Controller_Request_Http::getCookie("show", 5);
        $page = $this->_getParam("page", 1);

        $paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbSelect($productsList));
        $paginator->setItemCountPerPage($show)->setCurrentPageNumber($page);
        $this->view->products = $paginator;
        $this->view->page = $page;
        $this->view->show = $show;

        $categoriesTbl = new Shop_Model_DbTable_Categories();
        //$this->view->categories = 
        //$categoriesTbl->fetchAll();
        $this->view->mobile = $categoriesTbl->getBrand("mobile");
        $this->view->notebook = $categoriesTbl->getBrand("notebook");
        $this->view->notepad = $categoriesTbl->getBrand("notepad");

        $newsTbl = new Shop_Model_DbTable_News();
        $this->view->news = $newsTbl->fetchAll();

        if($this->getRequest()->isPost()){
            $search = $this->getRequest ()->getParam ( 'search', null );
            var_dump($search);
        }
    }
    public function productAction()
    {
    }


}



