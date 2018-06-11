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
        $type = $this->_getParam("type", 1);
        $productsTbl = new Shop_Model_ListProducts();
        $show = Zend_Controller_Request_Http::getCookie("show", 5);
        $page = $this->_getParam("page", 1);
        $productsList = $productsTbl->listProducts($type);

        $paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbSelect($productsList));
        $paginator->setItemCountPerPage($show)->setCurrentPageNumber($page);
        $this->view->products = $paginator;
        $this->view->page = $page;
        $this->view->show = $show;

        $categoriesTable = new Shop_Model_DbTable_Categories();
        //$this->view->categories = 
        //$categoriesTbl->fetchAll();
        $this->view->categoriesList = $categoriesTable->selectAll();

        $newsTbl = new Shop_Model_DbTable_News();
        $this->view->news = $newsTbl->fetchAll();

        $images = new Shop_Model_DbTable_UploadImages();
        $this->view->images = $images->fetchAll();

        if($this->getRequest()->isPost()){
            $search = $this->getRequest ()->getParam ( 'search', null );
            var_dump($search);
        }

        $categoriesTbl = new Shop_Model_DbTable_Type();
        //SELECT DISTINCT type FROM category
        $this->view->categoriesDistinct = $categoriesTbl->fetchAll();
    }
    public function productAction()
    {
    }
    public function showAction(){
        /*$product_id = $this->_getParam("product", null);
        $productsTbl = new Shop_Model_DbTable_Categories();
        $this->view->product = $productsTbl->selectDistinct("type");*/
        $product_id = $this->_getParam("product", null);
        $productsTbl = new Shop_Model_DbTable_Products();
        $this->view->product = $productsTbl->showProduct($product_id);

        $images = new Shop_Model_DbTable_UploadImages();
        $this->view->images = $images->getImages($product_id);

        $reviews = new Shop_Model_DbTable_Reviews();
        $this->view->reviews = $reviews->getReviews("product_id", $product_id);


        $form = new Shop_Form_AddReview();
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                $date = new Zend_Date();
                
                $data["date"] = "{$date->toString('YYYY-MM-dd HH:mm:ss')}";
                $reviews->insert($data);
                $reviews->_redirect('products/show/' + $product_id);
            }
        }

    }


}



