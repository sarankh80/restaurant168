<?php
class Table_unlockserviceController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$frm = new table_Form_FrmUnlockService();
		$this->view->form = $frm->Frm_unlock_service();
	}
	public function addAction(){
		$frm = new table_Form_FrmUnlockService();
		$this->view->form = $frm->Frm_unlock_service();
	}
	public function editAction(){
		$frm = new table_Form_FrmUnlockService();
		$this->view->form = $frm->Frm_unlock_service();
	}
}

