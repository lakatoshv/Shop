<?php
/**
* 
*/
class Admin_Model_DbTable_Products extends Zend_Db_Table_Abstract
{
    protected $_name = "products";
    public function insertProduct($data){
        //INSERT INTO table_name(*) VALUES (*);
        $this->_db->insert('products', $data);
    }
    public function updateProduct($id){
        //UPDATE table_name SET condition WHERE condition
        /*
        $data = array('password' => $password,
              'firstName' => $firstName,
              'lastName' => $vlastname,
              'accountUpdate' => new Zend_Db_Expr('accountUpdate+1'));
        $db->update('user', $data, 'id = '.$id);
        */
    }
    public function deleteProduct($id){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('products', 'id = '.$id);
    }
    
}