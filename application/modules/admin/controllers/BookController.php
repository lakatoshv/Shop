<?php

class Admin_BookController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function addAction()
    {
        // action body
    }

    public function editAction()
    {
        // action body
    }

    public function deleteAction()
    {
        $productTbl = new Admin_Model_DbTable_Products();
        $product_id = $this->_getParam("product", null);
        $productTbl->deleteProduct($product_id);
        $this->_redirect('shop/products/list');
    }


}







