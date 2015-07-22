<?php
class  customer_depositController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		//$this->_helper->layout()->disableLayout();
		$frm = new customer_Form_FrmDeposit();
		$this->view->form = $frm->FrmDeposit();
	}
	
	
}

