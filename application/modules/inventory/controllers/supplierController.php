<?php
class inventory_supplierController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		//$this->_helper->layout()->disableLayout();
		$frm = new inventory_Form_FrmSupplier();
		$this->view->form = $frm->FrmSupplier();
	}
	public function addAction(){
		//$this->_helper->layout()->disableLayout();
		$frm = new inventory_Form_FrmSupplier();
		$this->view->form = $frm->FrmSupplier();
	}
	
	
}

