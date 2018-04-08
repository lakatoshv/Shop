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
        $productsTBl = new Shop_Model_DbTable_Products();
        $this->view->products = $productsTBl->fetchAll();
    }
    public function productAction()
    {
    }


}



