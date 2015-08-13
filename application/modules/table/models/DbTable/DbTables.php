<?php

class Table_Model_DbTable_DbTables extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_table';
    function addTables($data){
    	//print_r($data);exit();
    	$db = $this->getAdapter();
    	$arr = array(
    			'code'=>$data['table_code'],
    			'description'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
//     			'img_name'=>$data['image'],
    			'tbl_groupid'=>$data['group_code'],
    			'display_by'=>$data['show_description'],
    			'max_sit'=>$data['max_seat'],
    			'price'=>$data['price'],
    			'compid'=>$data['apply_to_company'],
    			'active'=>$data['active'],
    			'time_charge_id'=>$data['time_ck'],
    			'is_discound'=>$data['dicount_ck'],
    			'BuildInPicID'=>$data['type_of_table'],
    			'add_date'=>date("Y-m-d"),
    			'est_time'=>$data['est_time'],
    			'backgroud_color'=>$data['backgroun_color'],
    			'font_color'=>$data['font_color'],
    			'font_size'=>$data['font_size'],
    			'note'=>$data['note'],
    			);
         $this->insert($arr);
     
    }
    function getTableById($id){
    	$db = $this->getAdapter();
    	$sql="SELECT id,code ,description,lang1,lang2,tbl_groupid,display_by,max_sit,price,
    	      compid,active,time_charge_id,is_discound,BuildInPicID,add_date,est_time,backgroud_color, 
    	      font_color,font_size,note FROM $this->_name WHERE id=$id";
    	return $db->fetchRow($sql);
    }
    function updateTable($data){
    	$arr = array(
    			'code'=>$data['table_code'],
    			'description'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
    			//     			'img_name'=>$data['image'],
    			'tbl_groupid'=>$data['group_code'],
    			'display_by'=>$data['show_description'],
    			'max_sit'=>$data['max_seat'],
    			'price'=>$data['price'],
    			'compid'=>$data['apply_to_company'],
    			'active'=>$data['active'],
    			'time_charge_id'=>$data['time_ck'],
    			'is_discound'=>$data['dicount_ck'],
    			'BuildInPicID'=>$data['type_of_table'],
    			'add_date'=>date("Y-m-d"),
    			'est_time'=>$data['est_time'],
    			'backgroud_color'=>$data['backgroun_color'],
    			'font_color'=>$data['font_color'],
    			'font_size'=>$data['font_size'],
    			'note'=>$data['note'],
    	);
    	$where=" id = ".$data['id'];
    	$this->update($arr, $where);
    }
    function getAllRowTable(){
    	$db = $this->getAdapter();
    	$sql="SELECT id,code ,tbl_groupid,description,lang1,lang2 FROM $this->_name";
    	$oderby=" ORDER BY id DESC";
    	return $db->fetchAll($sql.$oderby);
    }
    function geteAllid($search=null){
    	$db = $this->getAdapter();
    	$sql=" SELECT id,title_en,title_kh,date,status FROM $this->_name where id ORDER BY id DESC";
    	return $db->fetchAll($sql);
    	
    }
}

