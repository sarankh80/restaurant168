<?php

class Menu_Model_DbTable_DbMenuGroup extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_menugroup';
    function addMuneGroup($data){
    	$db = $this->getAdapter();
    	$arr = array(
    		'menu_code'=>$data['combo_code'],
    		'desc'=>$data['description'],
    		'lang1'=>$data['lang_1'],
    		'lang2'=>$data['lang_2'],
    		'display_by'=>$data['show_description'],
    		'background_color'=>$data['backgroun_color'],
    		'font_color'=>$data['font_color'],
    		'font_size'=>$data['font_size'],
    		'date'=>$data['est_time'],
  			'apply_company'=>$data['apply_to_company'],
    		'status'=>$data['active'], 
    		'is_combo'=>$data['combo_item'],
    		'note'=>$data['note'],
    	);
    $this->insert($arr);    	 
    }
    function getAllRowGroup(){
    	$db = $this->getAdapter();
    	$sql="SELECT id,menu_code,`desc`,lang1,lang2,display_by,background_color,font_color,font_size,apply_company,status
    	,is_combo,date,note  FROM rs_menugroup ";
    	return $db->fetchAll($sql);
    }
 	function editAllRowGroup($id){
    	$db = $this->getAdapter();
    	$sql="SELECT id,menu_code,`desc`,lang1,lang2,display_by,background_color,font_color,font_size,apply_company,status
    	,is_combo,note,date  FROM rs_menugroup where id=$id limit 1";
    	return $db->fetchRow($sql);
    }
    function updateMenuGroup($data){
    	$db=$this->getAdapter();
    	try {
    		$arr = array(
    				'menu_code'=>$data['combo_code'],
		    		'desc'=>$data['description'],
		    		'lang1'=>$data['lang_1'],
		    		'lang2'=>$data['lang_2'],
		    		'display_by'=>$data['show_description'],
		    		'background_color'=>$data['backgroun_color'],
		    		'font_color'=>$data['font_color'],
		    		'font_size'=>$data['font_size'],
    				'date'=>$data['est_time'],
		  			'apply_company'=>$data['apply_to_company'],
		    		'status'=>$data['active'], 
		    		'is_combo'=>$data['combo_item'],
		    		'note'=>$data['note'],
    		);
    		$where="id=".$data['id'];
    		$this->update($arr,$where);
    	}catch (Exception $e) {
    	}
    
    
    }
      
}

