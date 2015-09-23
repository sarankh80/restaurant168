<?php
class Menu_Model_DbTable_DbCombo extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_combomaster';
    public function getUserId(){
    	$session_user=new Zend_Session_Namespace('auth');
    	return $session_user->user_id;
    }
    function addCombo($_data){
    	$db = $this->getAdapter();
    	$photo_name=str_replace(" ", "_", $_data['combo_code']) . '.jpg';
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
    			'bar_code'=>$_data['combo_code'],
    			'desc'=>$_data['description'],
    			'lang1'=>$_data['lang_1'],
    			'lang2'=>$_data['lang_2'],
    			'price'=>$_data['price'],
    			'display_by'=>$_data['show_description'],
    			'category_id'=>$_data['menu_group'],
    			'img_name'=>$img,
    			'root_menuid'=>$_data['root_menu'],
    			'print_code'=>$_data['printer_code'],
    			'root_menu_name'=>$_data['combo'],
    			'printto_print'=>$_data['combo1'],
    			'background_color'=>$_data['backgroun_color'],
    			'font_color'=>$_data['font_color'],
    			'font_size'=>$_data['font_size'],
    			'showscreen'=>$_data['combo2'],
    			'is_discound'=>$_data['combo3'],
    			'time'=>$_data['combo4'],
    			'type'=>1,
    			'note'=>$_data['note'],
    			'status'=>1,
    			'add_userid'=>$this->getUserId(),
    	);
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
    function getAllRowCombo(){
    	$db = $this->getAdapter();
    	$sql="SELECT id,bar_code,`desc`,lang1,lang2,price,display_by,category_id,img_name,root_menuid,print_code
    	,root_menu_name,printto_print,background_color,font_color,font_size,showscreen,is_discound,time,type,status,note,add_userid  FROM rs_combomaster ";
    	return $db->fetchAll($sql);
    }
    function editAllRowCombo($id){
    	$db = $this->getAdapter();
    	$sql="SELECT id,bar_code,`desc`,lang1,lang2,price,display_by,category_id,img_name,root_menuid,print_code
    	,root_menu_name,printto_print,background_color,font_color,font_size,showscreen,is_discound,time,type,status,note,add_userid  FROM rs_combomaster 
    	where id=$id limit 1";
    	return $db->fetchRow($sql);
    }
	function updateMenuCombo($data){
	     $db=$this->getAdapter();
	     $photo_name=str_replace(" ","_",$data['combo_code']).'.jpg';
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
			       		'bar_code'=>$data['combo_code'],
		    			'desc'=>$data['description'],
		    			'lang1'=>$data['lang_1'],
		    			'lang2'=>$data['lang_2'],
		    			'price'=>$data['price'],
		    			'display_by'=>$data['show_description'],
		    			'category_id'=>$data['menu_group'],
			     		'img_name'=>$img,
		    			'root_menuid'=>$data['root_menu'],
		    			'print_code'=>$data['printer_code'],
		    			'root_menu_name'=>$data['combo'],
		    			'printto_print'=>$data['combo1'],
			     		'background_color'=>$data['backgroun_color'],
			     		'font_color'=>$data['font_color'],
			     		'font_size'=>$data['font_size'],
		    			'showscreen'=>$data['combo2'],
		    			'is_discound'=>$data['combo3'],
		    			'time'=>$data['combo4'],
			     		'note'=>$data['note'],
			       );
			     $where="id=".$data['id'];
			     $this->update($arr,$where);
			 }catch (Exception $e) {
			    echo $e->getMessage();exit();
			 }
	     
		
	    }
	    function addTableTypeNew($data){
	    	$arr = array(
	    			'bar_code'			=>	$data['new_type_code'],
	    			'desc'	=>	$data['description'],
	    	);
	    	$this->_name="rs_combomaster";
	    	return 	$this->insert($arr);
	    }
	}