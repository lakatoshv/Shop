<?php
/**
* 
*/
class Shop_Model_DbTable_Reviews extends Zend_Db_Table_Abstract
{
	protected $_name = "reviews";
	function getReviews($type, $value)
    {   
        $select = $this->_db->select()
                 ->from('reviews')
                 ->where("`$type`=?",$value)
                 ->where("`moderal`=1");
                 //->order('type');
                 //->having('count(*)= 1');
$result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
    function selectAll()
    {   
        $select = $this->_db->select()
                 ->from('reviews');
                 //->order('type');
                 //->having('count(*)= 1');
        $result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
    public function insertReview($data){
        //INSERT INTO table_name(*) VALUES (*);
        $this->_db->insert('reviews', $data);
    }
    public function updateReview($data, $id){
        //UPDATE table_name SET condition WHERE condition
        $this->_db->update('reviews', $data, 'id = '.$id);
    }
    public function deleteReview($type, $value){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('reviews', "`$type` = '".$value."'");
    }
}