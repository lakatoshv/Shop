<?php
/**
* 
*/
class Shop_Model_DbTable_Cart extends Zend_Db_Table_Abstract
{
	protected $_name = "cart";
	function getCart($cart_id_products)
    {   
        $select = $this->_db->select()
                 ->from('cart')
                 ->where('cart_id_products=?',$cart_id_products);
                 //->order('type');
                 //->having('count(*)= 1');
$result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
    function selectAll()
    {   
        $select = $this->_db->select()
                 ->from('cart');
                 //->order('type');
                 //->having('count(*)= 1');
        $result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
    public function insertCart($data){
        //INSERT INTO table_name(*) VALUES (*);
        $this->_db->insert('cart', $data);
    }
}