<?php

class Menu_Model_DbTable_DbItem extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_combomaster';
    public function getUserId(){
    	$session_user=new Zend_Session_Namespace('auth');
    	return $session_user->user_id;
    }
    function addItem($_data){
    	$db = $this->getAdapter();
		$photo_name=str_replace(" ", "_", $_data['item_code']) . '.jpg';
    	$upload=new Zend_File_Transfer();
    	$db->beginTransaction();
    	$a=$upload->addFilter('Rename',
    			array('target'=>PUBLIC_PATH .'/image/'.$photo_name,'overwrite'=>true));
    	$recieve=$upload->receive();
    	if($recieve){
    		$img=$photo_name;
    	}
    	else{
    		$img="";
    	}
    	try {
    	
    	$arr = array(
    			'bar_code'=>$_data['item_code'],
    			'desc'=>$_data['description'],
    			'lang1'=>$_data['lang_1'],
    			'lang2'=>$_data['lang_2'],
    			'price'=>$_data['demo3'],
    			'add_charge'=>$_data['demo4'],
    			'display_by'=>$_data['show_description'],
    			'category_id'=>$_data['menu_group'],
				'img_name'=>$img,
    			'root_menuid'=>$_data['root_menu'],
    			'print_code'=>$_data['print_to'],
    			'printto_print'=>$_data['print_to'],
    			'is_service'=>$_data['is_service'],
    			'background_color'=>$_data['backgroun_color'],
    			'font_color'=>$_data['font_color'],
    			'font_size'=>$_data['font_size'],
    			'status'=>$_data['active'],
    			'note'=>$_data['note'],
    			'showscreen'=>$_data['show_screen'],
    			'is_root'=>$_data['is_root'],
    			'time'=>$_data['time'],
    			'is_discound'=>$_data['discount'],
    			'is_reqty'=>$_data['require_qty'],
    			'type'=>2,
    			'add_userid'=>$this->getUserId(),
    	);
    //print_r($arr);exit();
    	
    	$id = $this->insert($arr);
    	
    	$item =array(
    			'combo_id'=>$id,
    			'qty'=>1,
    			'add_user'=>$this->getUserId(),
    			'add_date'=>date("d-m-Y"),
    			'status'=>1
    	);
    	 
    	$this->_name='rs_comboitem';
    	$this->insert($item);
    	$db->commit();
    	}catch(Exception $e){
    	$db->rollBack();
    		
    	}
    }
    function getAllRowItem(){
    	$db = $this->getAdapter();
    	$sql="SELECT id,bar_code,`desc`,lang1,lang2,price,display_by,category_id,img_name,root_menuid,print_code
    	,printto_print,is_service,background_color,font_color,font_size,status,note,showscreen,is_root,time,is_discound,is_reqty  FROM rs_combomaster ";
    	
    	return $db->fetchAll($sql);
    }
    function editAllRowItem($id){
    	$db = $this->getAdapter();
    	$sql="SELECT id,bar_code,`desc`,lang1,lang2,price,display_by,category_id,img_name,root_menuid,print_code
    	,printto_print,is_service,background_color,font_color,font_size,status,note,showscreen,is_root,time,is_discound,is_reqty  FROM rs_combomaster
    	where id=$id limit 1";
    	return $db->fetchRow($sql);
    }
    function updateMenuItem($data){
    	$db=$this->getAdapter();
		$photo_name=str_replace(" ","_",$data['item_code']).'.jpg';
	     $upload=new Zend_File_Transfer();
	     try {
	
			     $a=$upload->addFilter('Rename',
		array('target'=>PUBLIC_PATH .'/image/'.$photo_name,'overwrite'=>true));
			     $recieve=$upload->receive();
			     if($recieve){
			     	$img=$photo_name;
			     }
			     else{
			     	$img="";
			     }
    	$arr = array(
    			'bar_code'=>$data['item_code'],
    			'desc'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
    			'price'=>$data['demo3'],
    			'add_charge'=>$data['demo4'],
    			'display_by'=>$data['show_description'],
    			'category_id'=>$data['menu_group'],
				'img_name'=>$img,
    			'root_menuid'=>$data['root_menu'],
    			'print_code'=>$data['print_code'],
    			'printto_print'=>$data['print_to'],
    			'is_service'=>$data['is_service'],
    			'background_color'=>$data['backgroun_color'],
    			'font_color'=>$data['font_color'],
    			'font_size'=>$data['font_size'],
    			'status'=>$data['active'],
    			'note'=>$data['note'],
    			'showscreen'=>$data['show_screen'],
    			'is_root'=>$data['is_root'],
    			'time'=>$data['time'],
    			'is_discound'=>$data['discount'],
    			'is_reqty'=>$data['require_qty'],
    	);
    	//print_r($arr);exit();
    	$where=" id = ".$data['id'];
    	$this->update($arr, $where);
    	}catch (Exception $e) {
    		echo $e->getMessage();exit();
    	}
    }
    
}