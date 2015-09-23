<?php
Class customer_currencyController extends Zend_Controller_Action {
	const REDIRECT_URL_ADD = '/customer/currency/add';
	const REDIRECT_URL_ADD_CLOSE = '/customer/currency/';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$db_table=new customer_Model_DbTable_DbCurrency();
		$data=$db_table->getAllRowCurrency();
		$this->view->rs = $data;
	}
	public function addAction(){
		if($this->getRequest()->isPost()){
			$data=$this->getRequest()->getPost();
			//print_r($data);exit();
	        $db=new customer_Model_DbTable_DbCurrency();
	        try{ 
	        	   if(isset($_POST['btnsave'])){
	        	    $db->addCurrency($data);
	        	    Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD);
	        	   }
	        	   else if(isset($_POST['btnsave_close'])){
	        	   	$db->addCurrency($data);
	        	   	Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD);
	        	   }
	        }catch(Exception $e){
	        	Application_Form_FrmMessage::message("INSERT_FAIL");
	        	Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
	        }
		}
		$frm = new customer_Form_FrmCurrency();
		$this->view->form = $frm->Frmcurrency();
	}
	public function editAction(){
		if($this->getRequest()->isPost()){
			$data=$this->getRequest()->getPost();
		$db=new customer_Model_DbTable_DbCurrency();
	        try{ 
	        	   if(isset($_POST['btnsave_close'])){
	        	    $db->updateCurrency($data);
	        	    Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD_CLOSE);
	        	   }
	        }catch(Exception $e){
	        	Application_Form_FrmMessage::message("INSERT_FAIL");
	        	Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
	        }
		}
		$db=new customer_Model_DbTable_DbCurrency();
		$id=$this->getRequest()->getParam('id');
		$row=$db->getCurrencyById($id);
		$this->view->radio=$row;
		$frm = new customer_Form_FrmCurrency();
		$this->view->form = $frm->Frmcurrency($row);
	}
	
	
}

