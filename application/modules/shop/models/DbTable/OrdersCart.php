<?php
/**
* 
*/
class Shop_Model_DbTable_OrdersCart extends Zend_Db_Table_Abstract
{
	protected $_name = "orders_cart";
	function getCart($type, $value, $type2 = null, $value2 = null)
    {   
        if($type2 !== null && $value2 !== null){
            $select = $this->_db->select()
                 ->from('orders_cart')
                 ->where("$type=?",$value)->where("$type2=?",$value2);
        }
        else{
            $select = $this->_db->select()
                 ->from('cart')
                 ->where("$type=?",$value);
        }
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
                 ->from('orders_cart');
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
        $this->_db->insert('orders_cart', $data);
    }
    public function updateCart($data, $id){
        //UPDATE table_name SET condition WHERE condition
        $this->_db->update('orders_cart', $data, 'cart_id = '.$id);
    }
    public function deleteCart($type, $value){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('orders_cart', "`$type` = '".$value."'");
    }
}