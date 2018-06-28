<?php

class Shop_BasketController extends Zend_Controller_Action
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
    	$product_id = $this->_getParam("product", null);
    	$this->view->product = $product_id;
        $productsTbl = new Shop_Model_DbTable_Products();
        $product = $productsTbl->showProduct($product_id);

        $cartsTbl = new Shop_Model_DbTable_Cart();
        $cart = $cartsTbl->getCart("cart_id_products", $product_id);

        $tr;
        if($cart != false){
            $ip = $_SERVER['REMOTE_ADDR'];
            if($ip == $cart[0]["cart_ip"]){
                $date = new Zend_Date();
                $newcart = array("cart_id_products" => $product_id, "cart_price" => $product[0]["price"], "cart_count" => ($cart[0]["cart_count"] + 1), "cart_datetime" => $date->toString('YYYY-MM-dd HH:mm:ss'), "cart_ip" => "$ip");
                    $cartsTbl->updateCart($newcart, $cart[0]["cart_id"]);
                    $this->_redirect('shop/products/list');
            }
        }
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
            $date = new Zend_Date();
            $newcart = array("cart_id_products" => $product_id, "cart_price" => $product[0]["price"], "cart_count" => "1", "cart_datetime" => $date->toString('YYYY-MM-dd HH:mm:ss'), "cart_ip" => "$ip");
                    $cartsTbl->insertCart($newcart);
                    $this->_redirect('shop/products/list');
        }

    }
    public function changeAction(){
        $product_id = $this->_getParam("product", null);
        $products_count = $this->_getParam("value", null);
        $this->view->product = $product_id;
        $this->view->count = $products_count;
        $productsTbl = new Shop_Model_DbTable_Products();
        $product = $productsTbl->showProduct($product_id);

        $cartsTbl = new Shop_Model_DbTable_Cart();
        $cart = $cartsTbl->getCart("cart_id_products", $product_id);

        $tr;
        if($cart != false){
            $ip = $_SERVER['REMOTE_ADDR'];
            if($ip == $cart[0]["cart_ip"]){
                $date = new Zend_Date();
                $newcart = array("cart_id_products" => $product_id, "cart_price" => $product[0]["price"], "cart_count" => $products_count, "cart_datetime" => $date->toString('YYYY-MM-dd HH:mm:ss'), "cart_ip" => "$ip");
                    $cartsTbl->updateCart($newcart, $cart[0]["cart_id"]);
                    $this->_redirect('shop/products/list');
            }
        }
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
            $date = new Zend_Date();
            $newcart = array("cart_id_products" => $product_id, "cart_price" => $product[0]["price"], "cart_count" => "$products_count", "cart_datetime" => $date->toString('YYYY-MM-dd HH:mm:ss'), "cart_ip" => "$ip");
                    $cartsTbl->insertCart($newcart);
                    $this->_redirect('shop/products/list');
        }
    }
    public function showAction(){
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
        $cart_id = $this->_getParam("cart", null);
        $delete = $this->_getParam("delete", null);

        switch ($delete) {
            case "1":
                # code...
                if($cart_id >= 0){
                    $cartsTbl->deleteCart("cart_id", "$cart_id");
                    //$this->_redirect('shop/basket/show');
                }
                break;
            case 'all':
                $cartsTbl->deleteCart("cart_ip", "{$_SERVER['REMOTE_ADDR']}");
                $this->_redirect('shop/basket/show');
                break;
        }
    }

    public function deleteAction(){
        $cartsTbl = new Shop_Model_DbTable_Cart();
        $cart_id = $this->_getParam("cart", null);
        $this->view->id =$cart_id;
        /*
        $cartsTbl->deleteCart($cart_id);
        $this->_redirect('shop/basket/show');
        */
    }

}



