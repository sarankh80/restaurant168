<?php

class customer_Model_DbTable_DbCurrency extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_currency';
    function addCurrency($data){
    	$arr = array(
    			'curr_code'=>$data['currency_code'],
    			'curr_title'=>$data['currency_text'],
    			'symbol'=>$data['currency_sy'],
    			'decimal_place'=>$data['decimal'],
    			'exchange_rate'=>$data['exchange'],
    			'docuroundingtype'=>$data['radio'],
    			);
         $this->insert($arr);
     
    }
    function getCurrencyById($id){
    	$db = $this->getAdapter();
    	$sql="SELECT id, curr_code,curr_title,symbol,decimal_place,exchange_rate,docuroundingtype FROM $this->_name WHERE id=$id";
    	return $db->fetchRow($sql);
    }
    function updateCurrency($data){
    	$arr = array(
    			'curr_code'=>$data['currency_code'],
    			'curr_title'=>$data['currency_text'],
    			'symbol'=>$data['currency_sy'],
    			'decimal_place'=>$data['decimal'],
    			'exchange_rate'=>$data['exchange'],
    			'docuroundingtype'=>$data['radio'],
    	);
    	$where='id='.$data['id'];
    	$this->update($arr, $where);
    }
    function getAllRowCurrency(){
    	$db = $this->getAdapter();
    	$sql="SELECT id, curr_code,curr_title,symbol,decimal_place,exchange_rate FROM $this->_name";
    	$oderby=" ORDER BY id DESC";
    	return $db->fetchAll($sql.$oderby);
    }
    
}

