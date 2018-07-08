<?php
/**
* 
*/
class Admin_Model_DbTable_News extends Zend_Db_Table_Abstract
{
    protected $_name = "news";
    public function insertProduct($data){
        //INSERT INTO table_name(*) VALUES (*);
        $this->_db->insert('news', $data);
    }
    public function updateProduct($data, $id){
        //UPDATE table_name SET condition WHERE condition
        $this->_db->update('news', $data, 'id = '.$id);
    }
    public function deleteProduct($id){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('news', 'id = '.$id);
    }
    
}