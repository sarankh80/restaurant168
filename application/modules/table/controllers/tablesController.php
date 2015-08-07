<?php
class Table_tablesController extends Zend_Controller_Action {
	const REDIRECT_URL_ADD = '/table/tables/add';
	const REDIRECT_URL_ADD_CLOSE = '/table/tables/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
	     $db_table=new Table_Model_DbTable_DbTables();
	     $data=$db_table->getAllRowTable();
	     $this->view->rs = $data;
		 $frm = new Table_Form_FrmTables();
		 $this->view->form = $frm->FrmTables();
	}
	public function addAction(){
		if($this->getRequest()->isPost()){
			$data =$this->getRequest()->getPost();
		    $db = new Table_Model_DbTable_DbTables();
		       try{
		       	if(isset($data['btnsave'])){
			        $data_table = $db->addTables($data);
			        Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD);
		       	}
		       	else if(isset($data['btnsave_close'])){
		            $data_table = $db->addTables($data);
		       		Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD_CLOSE);
		       	}
		        	             
		       } catch (Exception $e) {
		        	Application_Form_FrmMessage::message("INSERT_FAIL");
		        	Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
		       }
		}
		$frm = new Table_Form_FrmTables();
		$this->view->form = $frm->FrmTables();
	}
	public function editAction(){
		$frm = new Table_Form_FrmTables();
		$this->view->form = $frm->FrmTables();
	}
}

