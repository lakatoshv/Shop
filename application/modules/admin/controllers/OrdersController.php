<?php

class OrdersController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $ordersTBL = new Shop_Model_DbTable_Orders();
        $this->view->orders = $ordersTBL->selectAll();
    }

    public function showAction()
    {

    }

    public function cancelAction()
    {
    }


}











