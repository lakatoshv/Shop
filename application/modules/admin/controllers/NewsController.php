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

        $newsTbl = new Admin_Model_DbTable_News();
        $news_id = $this->_getParam("news", null);
        $newsTable = new Shop_Model_DbTable_News();
        $this->view->news = $newsTable->showNews($news_id);

        $form = new Admin_Form_EditNews();

        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                $date = new Zend_Date();
                $data["date"] = "{$date->toString('YYYY-MM-dd HH:mm:ss')}";
                $newsTbl->updateNews($data, $news_id);
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







