<?php
/**
* 
*/
class Shop_Model_DbTable_Products extends Zend_Db_Table_Abstract
{
	protected $_name = "products";
	public function showProduct($id){
		$select = $this->_db->select()
                 ->from('products')
                 ->where('id=?',$id);
                 //->order('type');
                 //->having('count(*)= 1');
        $result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
	}
    public function getProduct($row, $value){
        $select = $this->_db->select()
                 ->from('products')
                 ->where("$row=?", $value);
                 //->order('type');
                 //->having('count(*)= 1');
        $result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
	public function sortProducts($type, $sortby, $type_sort){
        if($type == 1){
            $selectProducts = $this->_db->select()->from("products")->where('1')->order('title');
        }
        else{
            $selectProducts = $this->_db->select()->from("products")->where('type=?',$type)->order('title');
        }
        $result = $this->getAdapter()->fetchAll($selectProducts);
        if($result){
            return $selectProducts;
        }
        return $selectProducts;
    }
}