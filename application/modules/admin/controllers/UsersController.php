<?php
class Admin_UsersController extends Zend_Controller_Action
{
	
	public function init(){}

	public function indexAction(){
		$usersTBl = new Model_DbTable_Users();
                /*
                $show = Zend_Controller_Request_Http::getCookie("show", 5);
                $paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbSelect($newsTbl->fetchAll()));
                $paginator->setItemCountPerPage($show)->setCurrentPageNumber($page);
                $this->view->news = $paginator;
                */
                $this->view->users = $usersTBl->selectAll();
                //$this->view->show = $show;
	}

	public function showAction(){
                $user_id = $this->_getParam("user", null);
                $usersTBl = new Model_DbTable_Users();
                /*
                $show = Zend_Controller_Request_Http::getCookie("show", 5);
                $paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbSelect($newsTbl->fetchAll()));
                $paginator->setItemCountPerPage($show)->setCurrentPageNumber($page);
                $this->view->news = $paginator;
                */
                $this->view->user = $usersTBl->getCustomer("id", $user_id);
                //$this->view->show = $show;
        }
        public function deleteAction(){
                $usersTBl = new Model_DbTable_Users();
                $user_id = $this->_getParam("user", null);
                $usersTBl->deleteUser("id", $user_id);
        }
}