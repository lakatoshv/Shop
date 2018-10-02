<?php

class Shop_Model_ListProducts {
	public function listProducts($type, $search){
		$db = Zend_Db_Table::getDefaultAdapter();
		$selectProducts = new Zend_Db_Select($db);
		if($type == 1){
			if($search == null){
				$selectProducts->from("products");
			}
			else{
				$selectProducts->from("products")->where("name LIKE '%$search%'")->order("$sortby $type_sort");
				//WHERE CustomerName LIKE '%or%'
			}
		}
		else{
			if($search == null){
				$selectProducts->from("products")->where('type=?',$type);
			}
			else{
				$selectProducts->from("products")->where('type=?',$type)->where("name LIKE '%$search%'");
				//WHERE CustomerName LIKE '%or%'
			}
			
		}
		
		return $selectProducts;
	}
	public function sortProducts($type, $sortby, $type_sort, $search){
		$db = Zend_Db_Table::getDefaultAdapter();
		$selectProducts = new Zend_Db_Select($db);
		if($type == 1){
			if($search == null){
				$selectProducts->from("products")->order("$sortby $type_sort");
			}
			else{
				$selectProducts->from("products")->where("name LIKE '%$search%'")->order("$sortby $type_sort");
				//WHERE CustomerName LIKE '%or%'
			}
		}
		else{
			if($search == null){
				$selectProducts->from("products")->where('type=?',$type)->order("$sortby $type_sort");
			}
			else{
				$selectProducts->from("products")->where('type=?',$type)->where("name LIKE '%$search%'")->order("$sortby $type_sort");
			}
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