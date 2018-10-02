<?php
/**
* 
*/
class Shop_Model_DbTable_Orders extends Zend_Db_Table_Abstract
{
	protected $_name = "orders";
	function getOrders($type, $value)
    {   
        $select = $this->_db->select()
                 ->from('orders')
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
                 ->from('orders');
                 //->order('type');
                 //->having('count(*)= 1');
        $result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
    public function insertOrder($data){
        //INSERT INTO table_name(*) VALUES (*);
        $this->_db->insert('orders', $data);
    }
    public function updateOrder($data, $id){
        //UPDATE table_name SET condition WHERE condition
        $this->_db->update('orders', $data, 'id = '.$id);
    }
    public function deleteOrder($type, $value){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('orders', "`$type` = '".$value."'");
    }
}