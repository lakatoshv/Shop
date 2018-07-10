<?php

class Admin_ProductController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $type = $this->_getParam("type", 1);
        $productsTbl = new Shop_Model_ListProducts();
        $show = Zend_Controller_Request_Http::getCookie("show", 5);
        $page = $this->_getParam("page", 1);
        
        $productsList = $productsTbl->listProducts($type, null);
        $this->view->products = $productsList;
        $this->view->page = $page;
        $this->view->show = $show;

        $categoriesTable = new Shop_Model_DbTable_Categories();
        //$this->view->categories = 
        //$categoriesTbl->fetchAll();
        $this->view->categoriesList = $categoriesTable->selectAll();

        $newsTbl = new Shop_Model_DbTable_News();
        $this->view->news = $newsTbl->fetchAll();

        $images = new Shop_Model_DbTable_UploadImages();
        $this->view->images = $images->fetchAll();

        $categoriesTbl = new Shop_Model_DbTable_Type();
        //SELECT DISTINCT type FROM category
        $this->view->categoriesDistinct = $categoriesTbl->fetchAll();
    }

    public function addAction()
    {
        /*
        if (!$request->isPost()) {
            $this->view->form = $form;
            return;
        }

        if (!$form->isValid($request->getPost())) {
            $this->view->form = $form;
            return;
        }

        try {
            $form->file->receive();
            //upload complete!
            //...what now?
            $location = $form->file->getFileName();
            var_dump($form->file->getFileInfo());
        } catch (Exception $exception) {
            //error uploading file
            $this->view->form = $form;
        }
        */
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
*/
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
                    */
                    $productsTable = new Shop_Model_DbTable_Products();
                    $product = $productsTable->getProduct("name", $data["name"]);
                    $productID = $product["0"]["id"];
                    $img = array("product_id" => $productID, "image" => "$img_url", "image_name" => "$img_name", "upload" => "");
                    $upload_img = new Admin_Model_DbTable_UploadImages();
                    $upload_img->insert($img);
                }
                else{

                }
                

                $this->_redirect('shop/products/list');
            }
        }
    }

    public function editAction()
    {

        $productTbl = new Admin_Model_DbTable_Products();
        $product_id = $this->_getParam("product", null);
        $productsTable = new Shop_Model_DbTable_Products();
        $this->view->product = $productsTable->showProduct($product_id);

        $images = new Shop_Model_DbTable_UploadImages();
        $this->view->images = $images->getImages($product_id);

        $form = new Admin_Form_EditProduct();

        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();

                $img_name = $data['img_name'];
                $img_url = $data['img_url'];
                unset($data['gallery_img']);
                unset($data['img_name']);
                unset($data['img_url']);

                $productTbl->updateProduct($data, $product_id);
                $this->_redirect('shop/products/list');
            }
        }
    }

    public function deleteAction()
    {
        
        $productTbl = new Admin_Model_DbTable_Products();
        $product_id = $this->_getParam("product", null);
        $productTbl->deleteProduct($product_id);
        $imageTbl = new Admin_Model_DbTable_UploadImages();
        $imageTbl->deleteUploadImage($product_id);
        $this->_redirect('shop/products/list');
    }


}







