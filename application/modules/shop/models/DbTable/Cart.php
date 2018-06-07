<?php
/**
* 
*/
class Shop_Model_DbTable_Cart extends Zend_Db_Table_Abstract
{
	protected $_name = "cart";
	function getCart($type, $value)
    {   
        $select = $this->_db->select()
                 ->from('cart')
                 ->where("$type=?",$value);
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
    public function updateCart($data, $id){
        //UPDATE table_name SET condition WHERE condition
        $this->_db->update('cart', $data, 'cart_id = '.$id);
    }
    public function deleteCart($id){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('cart', 'cart_id = '.$id);
    }
}