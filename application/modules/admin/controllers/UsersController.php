<?php
/**
* 
*/
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

	public function showAction(){}
}