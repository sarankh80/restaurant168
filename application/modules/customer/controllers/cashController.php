<?php
class customer_cashController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$frm = new  customer_Form_FrmCash();
		$this->view->form = $frm->FrmCash();
	}
	public function addAction(){
		$frm = new  customer_Form_FrmCash();
		$this->view->form = $frm->FrmCash();
	}
	function editAction(){
		$frm = new  customer_Form_FrmCash();
		$this->view->form = $frm->FrmCash();
	}
	
	
}

