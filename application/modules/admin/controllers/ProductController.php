<?php

class Admin_ProductController extends Zend_Controller_Action
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
                unset($data['image']);
                $productTbl->insert($data);
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
        $form = new Admin_Form_EditProduct();

        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
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
        $this->_redirect('shop/products/list');
    }


}







