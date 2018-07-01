<?php

class Shop_OrderController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function contactinfoAction()
    {
        $orders = new Shop_Model_DbTable_Orders();


        $form = new Shop_Form_AddOrder();
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                $date = new Zend_Date();
                
                $data["datetime"] = "{$date->toString('YYYY-MM-dd HH:mm:ss')}";

                $orders->insert($data);
                //$reviews->_redirect('products/show/' + $product_id);
            }
        }
    }
    public function indexAction()
    {
    }
}