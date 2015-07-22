<?php

class menu_Model_DbTable_DbMenuGroup extends Zend_Db_Table_Abstract
{
    protected $_name = 'tb_menu_group';
    function addMuneGroup($data){
    	$db = $this->getAdapter();
    	$arr = array(
    		'menu_group_code'=>$data['menu_code'],
    		'menu_group'=>$data['description'],
    		'menu_group2'=>$data['lang_1'],
    		'menu_group3'=>$data['lang_2'],
    		'note'=>$data['note'],
    		//'pic'=>$data['photo'],
    		'is_active'=>$data['active'],    		 
    	);
    	$id=$this->insert($arr);    	 
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
    function getMenuGrop(){
    	$db = $this->getAdapter();
    	$sql="SELECT * FROM $this->_name ORDER BY menu_group_id DESC";
    	return $db->fetchAll($sql);
    }
    function getMenuGropByid($id){
    	$db = $this->getAdapter();
    	$sql="SELECT * FROM $this->_name where menu_group_id=$id ";
    	return $db->fetchRow($sql);
    }
    function getMenuGropByDesc(){
    	$db = $this->getAdapter();
    	$sql="SELECT menu_group_id,menu_group FROM $this->_name WHERE is_active = 1";
    	return $db->fetchAll($sql);
    	
    }
}

