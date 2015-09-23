<?php

class Menu_Model_DbTable_DbMenu extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_menugroup';
   	function getAllGroupMenu($first_option=null){
	   	$db = $this->getAdapter();
	   	$sql = "SELECT id,menu_code,`desc`  FROM `rs_menugroup` WHERE status =1 ";
	   	$rows = $db->fetchAll($sql);
	   	$opt = array();
	   	if($first_option==null){//if don't want to get first select
	   		$opt=array(''=>"-----Select Group Menu-----",'-1'=>"Add New",);
	   	}
	   	if(!empty($rows)){
	   		foreach ($rows as $row)
	   		$opt[$row['id']]=$row['menu_code'].$row['desc'];
	   	}
	   	return $opt;
   }
   function getAllRootMenu($first_option=null){
   	$db = $this->getAdapter();
   	$sql = "SELECT id,bar_code,`desc`  FROM `rs_combomaster` WHERE is_root =1 ";
   	$rows = $db->fetchAll($sql);
   	$opt = array();
   	if($first_option==null){//if don't want to get first select
   		$opt=array(''=>"-----Select Root Menu-----",-1=>"Add New",);
   	}
   	if(!empty($rows)){
   		foreach ($rows as $row)
   			$opt[$row['id']]=$row['bar_code'].$row['desc'];
   	}
   	return $opt;
   }
  
}

