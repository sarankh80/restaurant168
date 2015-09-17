<?php

class Table_Model_DbTable_DbTimeCharge extends Zend_Db_Table_Abstract
{
    protected $_name ='rs_timecharge';
    function addTimeCharge($data){
    	$db = $this->getAdapter();
    	$arr = array(
    			'description'=>$data['description'],
    			'time_interval'=>$data['interval_time'],
    			'execute_amount'=>$data['execute_number'],
    			'fee_charge'=>$data['amount_to_charge'],
    			'free_amount'=>$data['free_amt'],
    			'chil_per'=>$data['child'],
    			'nul_mul'=>$data['active'],
    			);
         $this->insert($arr);
     
    }
    function updateTimeCharge($data){
    	$db = $this->getAdapter();
    	$arr = array(
    			'description'=>$data['description'],
    			'time_interval'=>$data['interval_time'],
    			'execute_amount'=>$data['execute_number'],
    			'fee_charge'=>$data['amount_to_charge'],
    			'free_amount'=>$data['free_amt'],
    			'chil_per'=>$data['child'],
    			'nul_mul'=>$data['active'],
    			);
    	$where=" id = ".$data['id'];
    	$this->update($arr, $where);
    }
    
    function getAllRowTimeCharge(){
    	$db = $this->getAdapter();
    	$sql="SELECT id,description,execute_amount,fee_charge,time_interval,free_amount,chil_per,nul_mul FROM $this->_name";
    	$oderby=" ORDER BY id DESC";
    	return $db->fetchAll($sql.$oderby);
    }
    function getTimeChargeById($id){
    	$db=$this->getAdapter();
    	$sql="SELECT id,description,execute_amount,fee_charge,time_interval,free_amount,chil_per,nul_mul FROM $this->_name WHERE id='$id'";
    	return $db->fetchRow($sql);
    }
}

