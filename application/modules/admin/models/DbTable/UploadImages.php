<?php
/**
* 
*/
class Admin_Model_DbTable_UploadImages extends Zend_Db_Table_Abstract
{
	protected $_name = "uploads_images";
	public function insertUploadImage($data){
        //INSERT INTO table_name(*) VALUES (*);
        $this->_db->insert('uploads_images', $data);
    }
    public function updateUploadImage($data, $id){
        //UPDATE table_name SET condition WHERE condition
        $this->_db->update('uploads_images', $data, 'id = '.$id);
    }
    public function deleteUploadImage($id){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('uploads_images', 'product_id = '.$id);
    }
}