<?php

class Shop_OrderController extends Zend_Controller_Action
{
    public $data = [];
    public function init()
    {
        /* Initialize action controller here */
    }

    public function contactinfoAction()
    {
        


        $form = new Shop_Form_AddOrder();
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();

                $this->data = $data;
                setcookie("customer_data", serialize($data), time()+3600);
                $this->_redirect('shop/order/confirmation');
            }
        }
    }
    public function confirmationAction()
    {
        $cartsTbl = new Shop_Model_DbTable_Cart();
        $carts = $cartsTbl->getCart("cart_ip", "{$_SERVER['REMOTE_ADDR']}");
        $count = 0;
        $sum = 0;
        $products = array();
        $images = array();

        $productsTbl = new Shop_Model_DbTable_Products();
        $imagesTbl = new Shop_Model_DbTable_UploadImages();

        if(count($carts) > 1){
          foreach ($carts as $cart) {
            $sum += $cart["cart_price"] * $cart["cart_count"];
            $count += $cart["cart_count"];
            $products[] = $productsTbl->showProduct($cart["cart_id_products"]);
            $images[] = $imagesTbl->getImages($cart["cart_id_products"]);
          }
        }
        else{
          $sum += $carts[0]["cart_price"] * $carts[0]["cart_count"];
          $count += $carts[0]["cart_count"];
          $products[] = $productsTbl->showProduct($carts[0]["cart_id_products"]);
          $images[] = $imagesTbl->getImages($carts[0]["cart_id_products"]);
        }
        $this->view->carts = $carts;
        $this->view->sum = $sum;
        $this->view->count = $count;
        $this->view->products = $products;
        $this->view->images = $images;

        if(filter_input(INPUT_COOKIE, 'customer_data')){
            $data = unserialize(filter_input(INPUT_COOKIE, 'customer_data'));
            $this->view->customer_data = $data;
            $date = new Zend_Date();
            $data["datetime"] = "{$date->toString('YYYY-MM-dd HH:mm:ss')}";
        }

        if($this->getRequest()->isPost()){
            $orders = new Shop_Model_DbTable_Orders();
            $data["confirmed"] = 1;
            $orders->insert($data);
        }

        
    }

    public function indexAction()
    {
    }
}