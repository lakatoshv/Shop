<?php
/**
* 
*/
class Shop_Model_DbTable_News extends Zend_Db_Table_Abstract
{
	protected $_name = "news";
	public function showNews($id){
		$select = $this->_db->select()
                 ->from('news')
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