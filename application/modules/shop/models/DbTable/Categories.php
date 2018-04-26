<?php
/**
* 
*/
class Shop_Model_DbTable_Categories extends Zend_Db_Table_Abstract
{
	protected $_name = "category";
	function getBrand($type)
    {   
        /*
        $select = $this->_db->select()
                            ->from($this->_name)
                            ->order("type");
        
        $stmt = $this->_db->query($select);
        $result = $stmt->fetchAll();
        if($result){
            return true;
        }
        return false;
        */
        $select = $this->_db->select($type)
                 ->from('category')
                 ->where('type=?',$type);
                 //->order('type');
                 //->having('count(*)= 1');
$result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
}