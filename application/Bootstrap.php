<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initAutoload(){
		$modelLoader = new Zend_Application_Module_Autoloader(
			array(
				"namespace" => "",
				"basePath" => APPLICATION_PATH
			)
		);
		$acl = new Model_LibraryAcl;
		$user = Zend_Auth::getInstance();
		$zf = Zend_Controller_Front::getInstance();
		$zf->registerPlugin(new Plugin_AccessCheck($acl, $user));
		return $modelLoader;
	}
	function _initViewHelpers(){
		$this->bootstrap("layout");
		$layout = $this->getResource("layout");
		$view = $layout->getView();

		$view->doctype("HTML5");
		$view->headMeta()->appendHttpEquiv("Content-type", "text/html;charset=utf-8");
		$view->headTitle("Онлайн магазин");
	}
}
