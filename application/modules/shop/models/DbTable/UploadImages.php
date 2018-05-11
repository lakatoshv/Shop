<?php
/**
* 
*/
class Shop_Model_DbTable_UploadImages extends Zend_Db_Table_Abstract
{
	protected $_name = "uploads_images";
	public function getImages(){
		$select = $this->_db->select()
                 ->from('uploads_images')
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