<?php
class Table_tablegroupController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$frm = new table_Form_FrmTableGroup();
		$this->view->form = $frm->FrmTable();
	}
	
	
}

