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


    public function makevisibleAction()
    {

        $reviewsTBL = new Admin_Model_DbTable_Reviews();
        $review_id = $this->_getParam("review", null);
        $moderal = $this->_getParam("moderal", null);
        $data["moderal"] = $moderal;
        $reviewsTBL->updateReview($data, $review_id);
    }

    public function deleteAction()
    {
        
        $reviewsTBL = new Admin_Model_DbTable_Reviews();
        $review_id = $this->_getParam("review", null);
        $reviewsTBL->deleteReview($review_id);
    }
    public function showAction(){
        $id = $this->_getParam("review", null);
        $reviewsTbl = new Shop_Model_DbTable_Reviews();
        $this->view->review = $reviewsTbl->showReviw($id);
    }


}







