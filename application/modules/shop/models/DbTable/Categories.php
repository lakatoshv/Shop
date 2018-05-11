<?php
/**
* 
*/
class Shop_Model_DbTable_Categories extends Zend_Db_Table_Abstract
{
	protected $_name = "category";
	function getBrand($type)
    {   
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
    function selectDistinct($type)
    {   
        //SELECT DISTINCT type FROM category
        $select = $this->_db->select($type)
                 ->from('category',  new Zend_Db_Expr("DISTINCT($type) as $type"));
                 //->order('type');
                 //->having('count(*)= 1');
        $result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
}