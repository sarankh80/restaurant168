<?php

class Table_Model_DbTable_DbTablesGroup extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_table_group';
    function addTableGroup($data){
    	//print_r($data);exit();
    	$db = $this->getAdapter();
    	$arr = array(
    			'code'=>$data['group_code'],
    			'description'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
//     			'img_name'=>$data['image'],
    			'display_by'=>$data['show_description'],
    			'compid'=>$data['apply_to_company'],
    			'note'=>$data['note'],
    			'background_color'=>$data['backgroun_color'],
    			'font_color'=>$data['font_color'],
    			'font_size'=>$data['font_size'],
    			'status'=>$data['active'],
    			);
         $this->insert($arr);
     
    }
    function getTableGroupById($id){
    	$db = $this->getAdapter();
    	$sql=" SELECT id,CODE,description,lang1,lang2,display_by,compid,note,background_color,
    	       font_color,font_size,status  FROM $this->_name where id=$id ";
    	return $db->fetchRow($sql);
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
    function getAllRowTablGroup(){
    	$db = $this->getAdapter();
    	$sql="SELECT id,code,description,lang1,lang2 FROM $this->_name";
    	$oderby=" ORDER BY id DESC";
    	return $db->fetchAll($sql.$oderby);
    }
    function geteAllid($search=null){
    	$db = $this->getAdapter();
    	$sql=" SELECT id,title_en,title_kh,date,status FROM $this->_name where id ORDER BY id DESC";
    	return $db->fetchAll($sql);
    	
    }
}

