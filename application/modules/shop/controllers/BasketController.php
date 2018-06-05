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
        $cart = $cartsTbl->getCart($product_id);

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

        //Shop_Model_DbTable_Cart
        /*
        $productTbl = new Admin_Model_DbTable_Products();
        $form = new Admin_Form_AddProduct();
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
/*
                $image = $form->image->getFileName();

                $upload = new Zend_File_Transfer_Adapter_Http();
                $upload->setDestination("../../../../../public/");
                //Zend_Debug::dump($upload, "$upload");
                try {
                    // upload received file(s)
                    $upload->receive();
                } 
                catch (Zend_File_Transfer_Exception $e) {
                    $e->getMessage();
                }

                //$upload->setOption(array('useByteString' => false));
                $size =  $form->image->getFileSize();

                # Returns the mimetype for the 'doc_path' form element
                $mimeType =  $form->image->getMimeType();
                // following lines are just for being sure that we got data
                print "Name of uploaded file: $image ";
                print "File Size: $size ";
                print "File's Mime Type: $mimeType";

                $img_name = $data['img_name'];
                $img_url = $data['img_url'];
                unset($data['gallery_img']);
                unset($data['img_name']);
                unset($data['img_url']);
                $productTbl->insert($data);

                if(isset($img_url)){
                    /*
                    $productsTable = new Shop_Model_DbTable_Products();
                    $this->view->products = $productsTable->fetchAll();
                    $this->view->product = count($productsTable +1);

                    $productsTable = new Shop_Model_DbTable_Products();
                    $product = $productsTable->getProduct("name", $data["name"]);
                    $productID = $product["0"]["id"];
                    $img = array("product_id" => $productID, "image" => "$img_url", "image_name" => "$img_name", "upload" => "");
                    $upload_img = new Admin_Model_DbTable_UploadImages();
                    $upload_img->insert($img);
                }
                else{

                }
                */
    }
    public function showAction(){

    }


}



