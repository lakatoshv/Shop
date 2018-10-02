<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	private $_acl = null;
	private $_auth = null;
	protected function _initAutoload(){
		$modelLoader = new Zend_Application_Module_Autoloader(
			array(
				"namespace" => "",
				"basePath" => APPLICATION_PATH."/modules/default"
			)
		);
		if(Zend_Auth::getInstance()->hasIdentity()){
			Zend_Registry::set("role", Zend_Auth::getInstance()->getStorage()->read()->role);
		}
		else{
			Zend_Registry::set("role", "guests");
		}

		$this->_acl = new Model_LibraryAcl;
		$this->_auth = Zend_Auth::getInstance();
		$zf = Zend_Controller_Front::getInstance();
		$zf->registerPlugin(new Plugin_AccessCheck($this->_acl/*, $this->_auth */));
		return $modelLoader;
	}
	function _initViewHelpers(){

		$this->bootstrap("layout");
		$layout = $this->getResource("layout");
		$view = $layout->getView();

		$view->setHelperPath(APPLICATION_PATH."/helperts", "");

		$view->doctype("HTML5");
		$view->headMeta()->appendHttpEquiv("Content-type", "text/html;charset=utf-8");
		$view->headTitle("Онлайн магазин");

		$navContainerConfig = new Zend_Config_Xml(APPLICATION_PATH."/configs/navigation.xml", "nav");
		$navContainer = new Zend_Navigation($navContainerConfig);
		/*
		$user = Zend_Auth::getInstance();
		if( $user->hasIdentity() ){
			$identity = $user->getStorage()->read();
			$role = $identity->role;
		}
		else{
			$role = "guest";
		}
		*/
		$view->navigation($navContainer)->setAcl($this->_acl)->setRole(/*$this->_auth->getStorage()->read()->role */Zend_Registry::get("role"));
	}
}

