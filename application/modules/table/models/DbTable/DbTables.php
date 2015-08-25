<?php

class Table_Model_DbTable_DbTables extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_table';
    function addTables($data){
    	//print_r($data);exit();
    	$db = $this->getAdapter();
    	$photo_name=str_replace(" ", "_", $data['table_code']) . '.jpg';
    	$upload=new Zend_File_Transfer();
    	$a=$upload->addFilter('Rename',
    			           array('target'=>PUBLIC_PATH .'/image/'.$photo_name,'overwrite'=>true));
    	$recieve=$upload->receive();
//     	print_r($recieve);exit();
    	if($recieve){
    		$img=$photo_name;
    	}
    	else{
    		$img="";
    	}
    	$arr = array(
    			'code'=>$data['table_code'],
    			'description'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
    			'img_name'=>$img,
    			'tbl_groupid'=>$data['group_code'],
    			'display_by'=>$data['show_description'],
    			'max_sit'=>$data['max_seat'],
    			'price'=>$data['price'],
    			'compid'=>$data['apply_to_company'],
    			'active'=>$data['active'],
    			'time_charge_id'=>$data['time_ck'],
    			'is_discound'=>$data['dicount_ck'],
    			'tbl_type'=>$data['type_of_table'],
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
    	$sql="SELECT id,img_name,code ,description,lang1,lang2,tbl_groupid,display_by,max_sit,price,
    	      compid,active,time_charge_id,is_discound,tbl_type,add_date,est_time,backgroud_color, 
    	      font_color,font_size,note FROM $this->_name WHERE id=".$id;
    	return $db->fetchRow($sql);
    }
    function updateTable($data){
    	$photo_name=str_replace(" ", "_",$data['table_code']).'.jpg';
    	$upload=new Zend_File_Transfer();
    	$upload->addFilter('Rename',
    			           array('target'=>PUBLIC_PATH .'/image/'.$photo_name,
    			           	      'overwrite'=>true));
    	$receive=$upload->receive();
    	if($receive){
    		$data['photo']=$photo_name;
    	}else{
    		$db=$this->getAdapter();
    		$sql="SELECT img_name FROM $this->_name WHERE id=".$data['id'];
    		$row=$db->fetchRow($sql);
    		foreach ($row as $rs){
    			$data['photo']=$rs;
    		}
    	}
    	
    	$arr = array(
    			'code'=>$data['table_code'],
    			'description'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
     			'img_name'=>$data['photo'],
    			'tbl_groupid'=>$data['group_code'],
    			'display_by'=>$data['show_description'],
    			'max_sit'=>$data['max_seat'],
    			'price'=>$data['price'],
    			'compid'=>$data['apply_to_company'],
    			'active'=>$data['active'],
    			'time_charge_id'=>$data['time_ck'],
    			'is_discound'=>$data['dicount_ck'],
    			'tbl_type'=>$data['type_of_table'],
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
    	$sql="SELECT id,code ,(SELECT  CODE FROM rs_table_group WHERE id=tbl_groupid)AS tbl_groupid,
    	      (SELECT CODE FROM rs_table_type WHERE id=tbl_type )AS tbl_type,description,lang1,lang2 ,img_name FROM $this->_name";
    	$oderby=" ORDER BY id DESC";
    	return $db->fetchAll($sql.$oderby);
    }
    function geteAllid($search=null){
    	$db = $this->getAdapter();
    	$sql=" SELECT id,title_en,title_kh,date,status FROM $this->_name where id ORDER BY id DESC";
    	return $db->fetchAll($sql);
    	
    }
}

