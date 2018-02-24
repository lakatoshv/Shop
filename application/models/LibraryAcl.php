<?php
/**
* 
*/
class Model_LibraryAcl extends Zend_Acl
{
	
	function __construct()
	{
		$this->add(new Zend_Acl_Resource("index"));

		$this->add(new Zend_Acl_Resource("products"));
		$this->add(new Zend_Acl_Resource("list"), "products");

		$this->add(new Zend_Acl_Resource("customer"));
		$this->add(new Zend_Acl_Resource("mydata"), "customer");
		$this->add(new Zend_Acl_Resource("login"), "customer");
		$this->add(new Zend_Acl_Resource("logout"), "customer");
		$this->add(new Zend_Acl_Resource("signup"), "customer");
		$this->add(new Zend_Acl_Resource("update"), "customer");

		$this->addRole(new Zend_Acl_Role("guest"));
		$this->addRole(new Zend_Acl_Role("user"));
		$this->addRole(new Zend_Acl_Role("admin"), "user");

		$this->allow("guest", "index", "index");
		$this->allow("guest", "products", "list");
		$this->allow("guest", "customer", "login");
		$this->allow("guest", "customer", "signup");

		$this->allow("user", "index", "index");
		$this->allow("user", "products", "list");
		$this->allow("user", "customer", "mydata");
		$this->allow("user", "customer", "update");
		$this->allow("user", "customer", "index");
		$this->allow("user", "customer", "logout");

	}
}