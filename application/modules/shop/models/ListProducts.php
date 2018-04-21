<?php

class Shop_Model_ListProducts {
	public function listProducts(){
		$db = Zend_Db_Table::getDefaultAdapter();
		$selectProducts = new Zend_Db_Select($db);
		$selectProducts->from("products");

		return $selectProducts;
	}
}