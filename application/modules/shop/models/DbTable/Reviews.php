<?php
/**
* 
*/
class Shop_Model_DbTable_Reviews extends Zend_Db_Table_Abstract
{
	protected $_name = "reviews";
    public function SelectGroupedReviews(){
        $select = $this->_db->select()
                 ->from(array('reviews', 'products'),
                    array('reviews.product_id', 'reviews.COUNT(product_id) as `count`'))->group('reviews.product_id');
                 //->from(array('p' => 'products'),
                    //array('p.product_id', 'p.product_name'));
                 //SELECT reviews.`product_id`, COUNT(reviews.`product_id`), products.`id`, products.`name` FROM `reviews` as reviews, `products` as products where products.`id` = reviews.`product_id` GROUP BY `product_id`
                 //->order('type');
                 //->having('count(*)= 1');
        $result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
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