<?php

class Model_DbTable_customers extends Zend_Db_Table_Abstract
{

    protected $_name = 'customers';
    function checkUnique($username)
    {
        $select = $this->_db->select()
                            ->from($this->_name,array('email'))
                            ->where('email=?',$username);
        $result = $this->getAdapter()->fetchOne($select);
        if($result){
            return true;
        }
        return false;
    }
    function getcustomers($type, $value)
    {   
        $select = $this->_db->select()
                 ->from('customers')
                 ->where("$type=?",$value);
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
                 ->from('customers');
                 //->order('type');
                 //->having('count(*)= 1');
        $result = $this->getAdapter()->fetchAll($select);
        if($result){
            return $result;
        }
        return false;
    }
    public function insertOrder($data){
        //INSERT INTO table_name(*) VALUES (*);
        $this->_db->insert('customers', $data);
    }
    public function updateOrder($data, $id){
        //UPDATE table_name SET condition WHERE condition
        $this->_db->update('customers', $data, 'id = '.$id);
    }
    public function deleteOrder($type, $value){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('customers', "`$type` = '".$value."'");
    }

}

