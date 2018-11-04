<?php

class Model_DbTable_Users extends Zend_Db_Table_Abstract
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
    function getCustomer($type, $value)
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
    public function deleteUser($type, $value){
        //DELETE FROM table_name WHERE condition;
        $this->_db->delete('customers', "`$type` = '".$value."'");
    }

}

