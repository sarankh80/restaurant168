<?php
class Menu_itemController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		//$this->_helper->layout()->disableLayout();
		$frm = new Menu_Form_FrmMenuItem();
		$this->view->form = $frm->FrmMenu();
	}
	public function addAction(){ 
		if($this->getRequest()->isPost()){
			$_data = $this->getRequest()->getPost();
			$db = new Menu_Model_DbTable_DbItem();
			try {
				$db->addItem($_data);
				if(!empty($_data['btnsave'])){
					Application_Form_FrmMessage::message('ការ​បញ្ចូល​​ជោគ​ជ័យ');
				}else{
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL . '/item/index');
				}
			}catch(Exception $e){
				Application_Form_FrmMessage::message("ការ​បញ្ចូល​មិន​ជោគ​ជ័យ");
				$err =$e->getMessage();
				Application_Model_DbTable_DbUserLog::writeMessageError($err);
			}
		}
		$frm = new Menu_Form_FrmMenuItem();
		$frm_menuitem=$frm->FrmMenu();
		Application_Model_Decorator::removeAllDecorator($frm_menuitem);
		$this->view->form = $frm_menuitem;
	}	
}

