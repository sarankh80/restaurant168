<?php
class Customer_creditController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	function indexAction(){
		$frm = new customer_Form_FrmMenuArrangement();
		$this->view->form = $frm->FrmMenu();
	}
	function addAction(){
		$frm = new customer_Form_FrmMenuArrangement();
		$this->view->form = $frm->FrmMenu();
	}
	
	
}

