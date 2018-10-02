<?php
/**
* 
*/
class Admin_Model_DbTable_Reviews extends Zend_Db_Table_Abstract
{
    protected $_name = "reviews";
    public function insertReview($data){
        //INSERT INTO table_name(*) VALUES (*);
        $this->_db->insert('reviews', $data);
    }
    public function updateReview($data, $id){
        //UPDATE table_name SET condition WHERE condition
        $this->_db->update('reviews', $data, 'id = '.$id);
    }
    public function deleteReview($id){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('reviews', 'id = '.$id);
    }
    
}