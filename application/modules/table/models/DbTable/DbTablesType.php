<?php

class Table_Model_DbTable_DbTablesType extends Zend_Db_Table_Abstract
{
    protected $_name ='rs_table_type';
    function addTableType($data){
    	$db = $this->getAdapter();
    	$arr = array(
    			'code'=>$data['type_code'],
    			'description'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
    			'note'=>$data['note'],
    			);
         $this->insert($arr);
     
    }
    function updateTableType($data){
    	$arr = array(
    			'code'=>$data['type_code'],
    			'description'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
    			'note'=>$data['note'],
    			);
    	$where=" id = ".$data['id'];
    	$this->update($arr, $where);
    }
    
    function getAllRowTablType(){
    	$db = $this->getAdapter();
    	$sql="SELECT id,code,description,lang1,lang2,note FROM $this->_name";
    	$oderby=" ORDER BY id DESC";
    	return $db->fetchAll($sql.$oderby);
    }
    function getTableTypeById($id){
    	$db=$this->getAdapter();
    	$sql="SELECT id,code,description,lang1,lang2,note FROM $this->_name WHERE id=".$id;
    	return $db->fetchRow($sql);
    }
}

