<?php
class Table_timechargeController extends Zend_Controller_Action {
	const REDIRECT_URL_ADD = '/table/timecharge/add';
	const REDIRECT_URL_ADD_CLOSE = '/table/timecharge/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$db_table=new Table_Model_DbTable_DbTimeCharge();
	     $data=$db_table->getAllRowTimeCharge();
	     $this->view->rs = $data;
	}
    function addAction(){
    	if($this->getRequest()->isPost()){
    		$data=$this->getRequest()->getPost();
    		$db=new Table_Model_DbTable_DbTimeCharge();
    		try{
    			if(isset($data['btnsave'])){
    				$db->addTimeCharge($data);
    				Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD);
    			}
    			elseif(isset($data['btnsave_save'])){
    				$db->addTimeCharge($data);
    				Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD_CLOSE);
    			}
    		}catch (Exception $e){
    			Application_Form_FrmMessage::message("INSERT_FAIL");
    			Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
    		}
    	}
		$frm = new Table_Form_FrmTableTimecharge();
		$this->view->form = $frm->frm_table_time_charge();
	}
	public function editAction(){
		if($this->getRequest()->IsPost()){
			$data=$this->getRequest()->getPost();
			$db=new Table_Model_DbTable_DbTimeCharge();
			try {
				$db->updateTimeCharge($data);
				Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD_CLOSE);
			}catch(Exception $e){
				Application_Form_FrmMessage::message("INSERT_FAIL");
				Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
			}
		}
		$db=new Table_Model_DbTable_DbTimeCharge();
		$id=$this->getRequest()->getParam('id');
		$row=$db->getTimeChargeById($id);
		$frm = new Table_Form_FrmTableTimecharge();
		$this->view->form = $frm->frm_table_time_charge($row);
	}
	
	
}

