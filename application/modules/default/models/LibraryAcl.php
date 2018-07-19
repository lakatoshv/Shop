<?php
/**
* 
*/
class Model_LibraryAcl extends Zend_Acl
{
	
	function __construct()
	{
		/*
		$this->add(new Zend_Acl_Resource("index"));

		$this->add(new Zend_Acl_Resource("book"));
		$this->add(new Zend_Acl_Resource("edit"), "book");
		$this->add(new Zend_Acl_Resource("add"), "book");

		$this->add(new Zend_Acl_Resource("books"));
		$this->add(new Zend_Acl_Resource("list"), "books");

		$this->add(new Zend_Acl_Resource("authentification"));
		$this->add(new Zend_Acl_Resource("home"), "authentification");
		$this->add(new Zend_Acl_Resource("login"), "authentification");
		$this->add(new Zend_Acl_Resource("logout"), "authentification");
		$this->add(new Zend_Acl_Resource("signup"), "authentification");

		$this->addRole(new Zend_Acl_Role("guest"));
		$this->addRole(new Zend_Acl_Role("user"), "guest");
		$this->addRole(new Zend_Acl_Role("admin"), "user");

		//$this->allow("guest", "index", "index");
		//$this->allow("guest", "books", "list");
		//$this->allow("guest", "authentification", "signup");
		//$this->allow("guest", array("index", "books", "login", "signup"));
		$this->allow("guest", array("index", "books", "authentification"));
		$this->deny("guest", array("logout", "home"));

		//$this->allow("user", "index", "index");
		//$this->allow("user", "books", "list");
		//$this->allow("user", "authentification", "home");
		//$this->allow("user", "authentification", "index");
		//$this->allow("user", "authentification", "logout");
		$this->allow("user", array( "logout", "home"));
		$this->deny("user", array("login", "signup", ));

		$this->allow("admin", "book", "edit");
		$this->allow("admin", "book", "add");
		*/
		
		$this->addRole(new Zend_Acl_Role("guests"));
		$this->addRole(new Zend_Acl_Role("users"), "guests");
		$this->addRole(new Zend_Acl_Role("admins"), "users");

		$this->add(new Zend_Acl_Resource("shop"))->add(new Zend_Acl_Resource("shop:products"), "shop")->add(new Zend_Acl_Resource("shop:basket"), "shop")->add(new Zend_Acl_Resource("shop:order"), "shop");

		$this->add(new Zend_Acl_Resource("admin"))->add(new Zend_Acl_Resource("admin:product"), "admin")->add(new Zend_Acl_Resource("admin:news"), "admin")->add(new Zend_Acl_Resource("admin:reviews"), "admin");

		$this->add(new Zend_Acl_Resource("default"))->add(new Zend_Acl_Resource("default:customer"), "default")->add(new Zend_Acl_Resource("default:orders"), "default")->add(new Zend_Acl_Resource("default:index"), "default")->add(new Zend_Acl_Resource("default:error"), "default");

		$this->allow("guests", "default:customer", "login");
		$this->allow("guests", "default:customer", "signup");
		$this->allow("guests", "default:index", "index");
		$this->allow("guests", "shop:products", array("index", "list", "show"));
		$this->allow("guests", "shop:basket", array("add", "show", "delete", "change"));
		$this->allow("guests", "shop:order", array("index", "contactinfo", "confirmation"));

		
		$this->deny("users", "default:error", "login");
		$this->deny("users", "default:error", "signup");
		$this->allow("users", "default:customer", array("index", "home", "logout", "mydata", "update"));
		$this->allow("users", "default:orders", array("index", "show", "cancel"));

		$this->allow("admins", "admin:product", array("index", "add", "edit", "delete"));
		$this->allow("admins", "admin:news", array("index", "add", "edit", "delete", "show"));
		$this->allow("admins", "admin:reviews", array("index", "list", "delete", "show", "makevisible"));
	}
}