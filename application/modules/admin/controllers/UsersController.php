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
                $user = $usersTBl->getCustomer("id", $user_id);
                $this->view->user = $user;
                //$this->view->show = $show;

                $ordersTBL = new Shop_Model_DbTable_Orders();
                $this->view->allOrders = $ordersTBL->getOrdersForUser($user[0]["email"]);
                $this->view->confirmedOrders = $ordersTBL->getOrdersForUser($user[0]["email"], ["confirmed", "1"]);
                $this->view->unconfirmedOrders = $ordersTBL->getOrdersForUser($user[0]["email"], ["confirmed", "0"]);
                $this->view->payedOrders = $ordersTBL->getOrdersForUser($user[0]["email"], ["payed", "1"]);
                $this->view->unpayedOrders = $ordersTBL->getOrdersForUser($user[0]["email"], ["payed", "0"]);
                $this->view->user_id = $user_id;
        }
        public function deleteAction(){
                $usersTBl = new Model_DbTable_Users();
                $user_id = $this->_getParam("user", null);
                $usersTBl->deleteUser("id", $user_id);
        }
}