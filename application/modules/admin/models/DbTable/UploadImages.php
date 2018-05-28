<?php
/**
* 
*/
class Admin_Model_DbTable_UploadImages extends Zend_Db_Table_Abstract
{
	protected $_name = "uploads_images";
	public function insertProduct($data){
        //INSERT INTO table_name(*) VALUES (*);
        $this->_db->insert('uploads_images', $data);
    }
}