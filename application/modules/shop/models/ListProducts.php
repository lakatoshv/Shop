<?php

class Shop_Model_ListProducts {
	public function listProducts($type){
		$db = Zend_Db_Table::getDefaultAdapter();
		$selectProducts = new Zend_Db_Select($db);
		if($type == 1){
			$selectProducts->from("products")->where('1');
		}
		else{
			$selectProducts->from("products")->where('type=?',$type);
		}
		
		return $selectProducts;
	}
	public function sortProducts($type, $sortby, $type_sort){
		$db = Zend_Db_Table::getDefaultAdapter();
		$selectProducts = new Zend_Db_Select($db);
		if($type == 1){
			$selectProducts->from("products")->where('1')->order("$sortby $type_sort");
		}
		else{
			$selectProducts->from("products")->where('type=?',$type)->order("$sortby $type_sort");
		}
		return $selectProducts;
	}//
	public function showProduct($id){
		$db = Zend_Db_Table::getDefaultAdapter();
		$select = new Zend_Db_Select($db);
		$select->from('products')
                 ->where('id=?',$id);
                 //->order('type');
                 //->having('count(*)= 1');
        $result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
	}
}