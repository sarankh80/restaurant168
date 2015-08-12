<?php

class Menu_Model_DbTable_DbCombo extends Zend_Db_Table_Abstract
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
    			'bar_code'=>$_data['combo_code'],
    			'desc'=>$_data['description'],
    			'lang1'=>$_data['lang_1'],
    			'lang2'=>date('lang_2'),
    			'price'=>$_data['price'],
    			'display_by'=>$_data['show_description'],
    			'category_id'=>$_data['menu_group'],
    			'root_menuid'=>$_data['root_menu'],
    			'print_code'=>$_data['printer_code'],
    			'root_menu_name'=>$_data['combo'],
    			'printto_print'=>$_data['combo1'],
    			'showscreen'=>$_data['combo2'],
    			'is_discound'=>date('combo3'),
    			'time'=>$_data['combo4'],
    			'type'=>1,
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
}