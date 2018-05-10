<?php
/**
* 
*/
class Admin_Model_DbTable_Products extends Zend_Db_Table_Abstract
{
    protected $_name = "products";
    
    public function deleteProduct($id){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('products', 'id = '.$id);
    }
    
}