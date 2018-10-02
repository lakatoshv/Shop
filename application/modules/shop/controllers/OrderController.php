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
        if(filter_input(INPUT_COOKIE, 'customer_data')){
            $data = unserialize(filter_input(INPUT_COOKIE, 'customer_data'));
            $this->view->customer_data = $data;
        }
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
        $elements = unserialize($_SESSION["orders_cart"]);
        $carts = array();
        for($i = 0; $i < count($elements); $i++){
            //$carts[] = $cartsTbl->getCart("cart_ip",$_SERVER['REMOTE_ADDR']);
            $carts[] = $cartsTbl->getCart("cart_id", $elements[$i]["id"]);
        }
        

        $count = 0;
        $sum = 0;
        $products = array();
        $images = array();

        $productsTbl = new Shop_Model_DbTable_Products();
        $imagesTbl = new Shop_Model_DbTable_UploadImages();

        if(count($carts) > 1){
          foreach ($carts as $cart) {
            $sum += $cart["cart_price"] * $cart[0]["cart_count"];
            $count += $cart[0]["cart_count"];
            $products[] = $productsTbl->showProduct($cart[0]["cart_id_products"]);
            $images[] = $imagesTbl->getImages($cart[0]["cart_id_products"]);
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
            for($i = 0; $i < count($elements); $i++){
                $myarr = $cartsTbl->getCart("cart_id", $elements[$i]["id"]);
                unset($myarr[0]["cart_id"]);
                $this->view->myarr = $myarr[0];
                //$ordersCartsTbl = new Shop_Model_DbTable_OrdersCart();
                //$ordersCartsTbl->insertCart($myarr[0]);
                //$cartsTbl->deleteCart("cart_id", $elements[$i]["id"]);
            }
            $orders = new Shop_Model_DbTable_Orders();
            $data["confirmed"] = 1;
            $this->view->myarr = $data;
            //$orders->insert($data);
        }

        
    }

    public function indexAction()
    {
    }
}