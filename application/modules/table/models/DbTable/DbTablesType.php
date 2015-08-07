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
    function updatcallecterall($data){
    	$arr = array(
    			'title_en'=>$data['title_en'],
    			'title_kh'=>$data['title_kh'],
    			'date'=>$data['date'],
    			'status'=>$data['status'],
    			'displayby'=>$data['display_by'],
    			);
    	$where=" id = ".$data['id'];
    	$this->update($arr, $where);
    }
    function getAllRowTablType(){
    	$db = $this->getAdapter();
    	$sql="SELECT code,description,lang1,lang2,note FROM $this->_name";
    	$oderby=" ORDER BY id DESC";
    	return $db->fetchAll($sql.$oderby);
    }
    function geteAllid($search=null){
    	$db = $this->getAdapter();
    	$sql=" SELECT id,title_en,title_kh,date,status FROM $this->_name where id ORDER BY id DESC";
    	return $db->fetchAll($sql);
    	
    }
}

