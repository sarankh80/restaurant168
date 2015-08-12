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
    	$db->beginTransaction();
    	try {
    	$arr = array(
    			'bar_code'=>$_data['item_code'],
    			'desc'=>$_data['description'],
    			'lang1'=>$_data['lang_1'],
    			'lang2'=>date('lang_2'),
    			'price'=>$_data['demo3'],
    			'add_charge'=>$_data['demo4'],
    			'display_by'=>$_data['show_description'],
    			'category_id'=>$_data['group_code'],
    			'root_menuid'=>$_data['root_menu'],
    			'print_code'=>$_data['printer_code'],
    			'printto_print'=>$_data['print_to'],
    			'status'=>$_data['active'],
    			'showscreen'=>$_data['show_screen'],
    			'is_root'=>$_data['is_root'],
    			'time'=>$_data['time'],
    			'is_discound'=>$_data['discount'],
    			'is_reqty'=>date('require_qty'),
    			'type'=>2,
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
}