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

    

}







