<?php
/**
* 
*/
class Plugin_AccessCheck extends Zend_Controller_Plugin_Abstract
{
	private $_acl = null;
	//private $_user = null;
	
	public function __construct(Zend_Acl $acl/*, Zend_Auth $user*/){
		$this->_acl = $acl;
		//$this->_user = $user;
	}
	public function preDispatch(Zend_Controller_Request_Abstract $request)
	{
		$module = $request->getModuleName();
		$resource = $request->getControllerName();
		$action = $request->getActionName();
		/*
		$role = "";
		if( $this->_user->hasIdentity() ){
			$identity = $this->_user->getStorage()->read();
			$role = $identity->role;
		}
		else{
			$role = "guest";
		}
		*/
		if(!$this->_acl->isAllowed(Zend_Registry::get("role"), $module.":".$resource, $action)){
			$request->setControllerName("index")->setActionName("index");
		}
	}
}