<?php
class Menu_itemController extends Zend_Controller_Action {
	const REDIRECT_URL = '/menu';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$db_combo_type=new Menu_Model_DbTable_DbItem();
		$this->view->rows=$db_combo_type->getAllRowItem();
		$frm = new Menu_Form_FrmMenuItem();
		$this->view->form = $frm->FrmMenu();
	}
	public function addAction(){ 
		if($this->getRequest()->isPost()){
			$_data = $this->getRequest()->getPost();
			$db = new Menu_Model_DbTable_DbItem();
			try {
				if(isset($_data['btnsave'])){
					$db->addItem($_data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL . '/item/add');
				}elseif(isset($_data['btnsaveclose'])){
					$db->addItem($_data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL . '/item/index');
				}
// 				$db->addItem($_data);
// 				if(!empty($_data['btnsave'])){
// 					Application_Form_FrmMessage::message('ការ​បញ្ចូល​​ជោគ​ជ័យ');
// 				}else{
// 					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL . '/item/add');
// 				}
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
	public function editAction(){
		if($this->getRequest()->isPost()){
			$_data = $this->getRequest()->getPost();
			$db = new Menu_Model_DbTable_DbItem();
			try {
				if(isset($_data['btnsave'])){
					$db->updateMenuItem($_data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL . '/item/index');
				}
			}catch(Exception $e){
				Application_Form_FrmMessage::message("កាកែរប្រែមិន​បាន​​ជោគ​ជ័យ");
				$err =$e->getMessage();
				Application_Model_DbTable_DbUserLog::writeMessageError($err);
			}
		}
		$id = $this->getRequest()->getParam("id");
		$db_combo_type=new Menu_Model_DbTable_DbItem();
		$row=$db_combo_type->editAllRowItem($id);
		$this->view->photo=$row['img_name'];
		$this->view->rows=$row;
		$frm = new Menu_Form_FrmMenuItem();
		$this->view->form = $frm->FrmMenu($row);
	}
}

