<?php

class Table_Model_DbTable_DbTables extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_table';
    function addTables($data){
    	print_r($data);exit();
    	$db = $this->getAdapter();
    	$arr = array(
    			'code'=>$data['menu_code'],
    			'desc'=>$data['description'],
    			'lang1'=>$data['lang_1'],
//     			'status'=>$data['status'],
    			'lang2'=>$data['lang_2'],
    			'img_name'=>$data['lang_2'],
    			'tbl_groupid'=>$data['g_code'],
//     			'display_by'=>$data['show_description1'],
    			'max_sit'=>$data['max_seat'],
    			'price'=>$data['price'],
    			'est_time'=>$data['est_time'],
    			'display_by'=>$data['show_description2'],
    			'add_date'=>date("Y-m-d"),
    			'status'=>$data['type_of_table'],
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
    function getcallecterallbyid($id){
    	$db = $this->getAdapter();
    	$sql="SELECT id,title_en,title_kh,display_by,date,status FROM $this->_name where id=$id ";
    	return $db->fetchRow($sql);
    }
    function geteAllid($search=null){
    	$db = $this->getAdapter();
    	$sql=" SELECT id,title_en,title_kh,date,status FROM $this->_name where id ORDER BY id DESC";
    	return $db->fetchAll($sql);
    	
    }
}

