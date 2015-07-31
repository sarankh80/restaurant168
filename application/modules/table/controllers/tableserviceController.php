<?php
class Table_tableserviceController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$frm = new Table_Form_FrmTableservice();
		$this->view->form = $frm->frm_table_service();
	}
	public function addAction(){
		$frm = new Table_Form_FrmTableservice();
		$this->view->form = $frm->frm_table_service();
	}
	
	
}

