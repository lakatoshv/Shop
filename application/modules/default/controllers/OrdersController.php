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
        $user = Zend_Auth::getInstance();
        $email = $user->getIdentity()->email;
        $ordersTbl = new Shop_Model_DbTable_Orders();
        $orders = $ordersTbl->getOrders("email", "{$email}");
        
        $this->view->carts = $carts;
        $this->view->orders = $orders;
        $this->view->sum = $sum;
        $this->view->count = $count;
        $this->view->products = $products;
        $this->view->images = $images;

    }

    public function cancelAction()
    {
        $order_id = $this->_getParam("order", null);
        $ordersTbl = new Shop_Model_DbTable_Orders();
        $ordersTbl->deleteOrder("id", $order_id);
    }


}











