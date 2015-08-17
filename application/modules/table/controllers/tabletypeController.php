<?php
class Table_tabletypeController extends Zend_Controller_Action {
	const REDIRECT_URL_ADD = '/table/tabletype/add';
	const REDIRECT_URL_ADD_CLOSE= '/table/tabletype/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$db_table_type=new Table_Model_DbTable_DbTablesType();
	    $db=$db_table_type->getAllRowTablType();
	    $this->view->rows=$db;
		$frm = new Table_Form_FrmTableType();
		$this->view->form = $frm->Frm_table_type();
	}
	public function addAction(){
		if($this->getRequest()->isPost()){
			$data =$this->getRequest()->getPost();
			$db = new Table_Model_DbTable_DbTablesType();
			try{
				if(isset($data['btnsave'])){
					$data_table = $db->addTableType($data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD);
				}
				else if(isset($data['btnsave_close'])){
					$data_table = $db->addTableType($data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD_CLOSE);
				}
			} catch (Exception $e) {
				Application_Form_FrmMessage::message("INSERT_FAIL");
				Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
			}
		}
		$frm = new Table_Form_FrmTableType();
		$this->view->form = $frm->Frm_table_type();
	}
	public function editAction(){
				if($this->getRequest()->isPost()){
						$data =$this->getRequest()->getPost();
						$db = new Table_Model_DbTable_DbTablesType();
						try{
							 if(isset($data['btnsave_close'])){
								$data_table = $db->updateTableType($data);
								Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD_CLOSE);
							}
						} catch (Exception $e) {
							Application_Form_FrmMessage::message("INSERT_FAIL");
							Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
					}
		}
		
		$id=$this->getRequest()->getParam('id');
		$db=new Table_Model_DbTable_DbTablesType();
		$row=$db->getTableTypeById($id);
		//print_r($row);exit();
		$frm = new Table_Form_FrmTableType();
		$this->view->form = $frm->Frm_table_type($row);
	}
	
}

