<?php
class inventory_IssueController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$frm = new inventory_Form_FrmIssue();
		$this->view->form = $frm->FrmIssue();
	}
	public function addAction(){
		$frm = new inventory_Form_FrmIssue();
		$this->view->form = $frm->FrmIssue();
	}
	
	
}

