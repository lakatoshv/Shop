<?php

class Admin_NewsController extends Zend_Controller_Action
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
        $newsTbl = new Admin_Model_DbTable_News();
        $form = new Admin_Form_AddNews();
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                $date = new Zend_Date();
                $data["date"] = "{$date->toString('YYYY-MM-dd HH:mm:ss')}";
                $newsTbl->insert($data);
                
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







