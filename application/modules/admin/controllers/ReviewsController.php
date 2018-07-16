<?php

class Admin_ReviewsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $reviewsTbl = new Shop_Model_DbTable_Reviews();
        /*
        $show = Zend_Controller_Request_Http::getCookie("show", 5);
        $paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbSelect($newsTbl->fetchAll()));
        $paginator->setItemCountPerPage($show)->setCurrentPageNumber($page);
        $this->view->news = $paginator;
        */
        $this->view->reviews = $reviewsTbl->SelectGroupedReviews();
        //$this->view->show = $show;
    }

    public function listAction()
    {
        $reviewsTbl = new Shop_Model_DbTable_Reviews();
        $product_id = $this->_getParam("product", null);
        $this->view->reviews = $reviewsTbl->getReviews("product_id", $product_id, "all");
        $this->view->id = $product_id;
        /*
        $show = Zend_Controller_Request_Http::getCookie("show", 5);
        $paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbSelect($newsTbl->fetchAll()));
        $paginator->setItemCountPerPage($show)->setCurrentPageNumber($page);
        $this->view->news = $paginator;
        */
        //$this->view->show = $show;
    }

    public function addAction()
    {
        $newsTbl = new Admin_Model_DbTable_News();
        $form = new Admin_Form_AddNews();
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                $date = new Zend_Date();
                $data["date"] = "{$date->toString('YYYY-MM-dd HH:mm:ss')}";
                $newsTbl->insert($data);
                
            }
        }
    }

    public function editAction()
    {

        $newsTbl = new Admin_Model_DbTable_News();
        $news_id = $this->_getParam("news", null);
        $newsTable = new Shop_Model_DbTable_News();
        $this->view->news = $newsTable->showNews($news_id);

        $form = new Admin_Form_EditNews();

        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                $date = new Zend_Date();
                $data["date"] = "{$date->toString('YYYY-MM-dd HH:mm:ss')}";
                $newsTbl->updateNews($data, $news_id);
            }
        }
    }

    public function deleteAction()
    {
        
        $newsTbl = new Admin_Model_DbTable_News();
        $news_id = $this->_getParam("news", null);
        $newsTbl->deleteNews($news_id);
        $this->_redirect('shop/products/list');
    }
    public function showAction(){
        $newsTbl = new Admin_Model_DbTable_News();
        $news_id = $this->_getParam("news", null);
        $newsTable = new Shop_Model_DbTable_News();
        $this->view->news = $newsTable->showNews($news_id);
    }


}







