<?php

class OrdersController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $user = Zend_Auth::getInstance();
        $email = $user->getIdentity()->email;
        $ordersTBL = new Shop_Model_DbTable_Orders();
        $this->view->orders = $ordersTBL->getOrders("email", $email);

    }

    public function showAction()
    {

    }

    public function cancelAction()
    {
        
    }


}











