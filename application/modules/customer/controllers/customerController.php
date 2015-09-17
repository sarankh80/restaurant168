<?php
class customer_customerController extends Zend_Controller_Action {
	const REDIRECT_URL_ADD = '/customer/customer/add';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$frm = new customer_Form_FrmCustomer();
		$this->view->form = $frm->Frmcustomer();
	}
	function addAction(){
		if($this->getRequest()->isPost()){
			$data=$this->getRequest()->getPost();
			//print_r($data);exit();
            $db = new customer_Model_DbTable_DbCustomer();
            
            try{
                $db->addCustomer($data);
            	Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD);
            }catch (Exception $e){
            	Application_Form_FrmMessage::message("INSERT_FAIL");
            	Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
            }
		}
		$frm = new customer_Form_FrmCustomer();
		$this->view->form = $frm->Frmcustomer();
	}
    function editAction(){
		$frm = new customer_Form_FrmCustomer();
		$this->view->form = $frm->Frmcustomer();
	}
	
	
}

