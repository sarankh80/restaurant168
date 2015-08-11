<?php
class Table_tablegroupController extends Zend_Controller_Action {
	const REDIRECT_URL_ADD = '/table/tablegroup/add';
	const REDIRECT_URL_ADD_CLOSE = '/table/tablegroup/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$db_table_group=new Table_Model_DbTable_DbTablesGroup();
		$data=$db_table_group->getAllRowTablGroup();
		$this->view->rs = $data;
		$frm = new Table_Form_FrmTableGroup();
		$this->view->form = $frm->FrmTable();
	}
	public function addAction(){
		if($this->getRequest()->isPost()){
			$data =$this->getRequest()->getPost();
			//print_r($data);exit();
			$db = new Table_Model_DbTable_DbTablesGroup();
			try{
				if(isset($data['btnsave'])){
					$data_table = $db->addTableGroup($data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD);
				}
				else if(isset($data['btnsave_close'])){
					$data_table = $db->addTableGroup($data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD_CLOSE);
				}
		
			} catch (Exception $e) {
				Application_Form_FrmMessage::message("INSERT_FAIL");
				Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
			}
		}
		
		$frm = new Table_Form_FrmTableGroup();
		$this->view->form = $frm->FrmTable();
	}
	public function editAction(){
		
// 		if($this->getRequest()->isPost()){
// 			$accdata=$this->getRequest()->getPost();	
// 			$db_acc = new Accounting_Model_DbTable_DbAccountcate();				
// 			try {
// 				$db = $db_acc->updataccountcate($accdata);				
// 				Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL);		
// 			} catch (Exception $e) {
// 				$this->view->msg = 'ការ​បញ្ចូល​មិន​ជោគ​ជ័យ';
// 			}
		
// 		}
		$id = $this->getRequest()->getParam('id');
		$db = new Table_Model_DbTable_DbTablesGroup();
		$row  = $db->getTableGroupById($id);
// 		print_r($row);exit();
		$frm = new Table_Form_FrmTableGroup();
		$this->view->form = $frm->FrmTable($row);
// 		Application_Model_Decorator::removeAllDecorator($frm);
// 		$this->view->frm_fixedasset = $frm;
	
	}
	
}

