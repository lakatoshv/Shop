<?php

class ProductsController extends Zend_Controller_Action
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
        $productsTBl = new Model_DbTable_Products();
        $this->view->products = $productsTBl->fetchAll();
    }


}



