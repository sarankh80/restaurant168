<?php
class  Customer_currencyTypeController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
    function indexAction(){
		
	}
	function addAction(){
		$frm = new Table_Form_FrmTable();
		$this->view->form = $frm->FrmTable();
	}
}

