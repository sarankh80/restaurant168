<?php
class Menu_GroupController extends Zend_Controller_Action {
	const REDIRECT_URL = '/menu/group';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$db_combo_type = new Menu_Model_DbTable_DbMenuGroup();		
		$row = $db_combo_type->getAllRowGroup();
		$this->view->rows = $row;
	}
	public function addAction(){
		if($this->getRequest()->isPost()){
			$data = $this->getRequest()->getPost();
			$db = new Menu_Model_DbTable_DbMenuGroup();
			try {
				if(isset($data['btnsave'])){
					$db->addMuneGroup($data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL . '/add');
				}else if(isset($data['btnsaveclose'])){
					$db->addMuneGroup($data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL . '/index');
				}
			}catch(Exception $e){
				Application_Form_FrmMessage::message("ការ​បញ្ចូល​មិន​ជោគ​ជ័យ");
				$err =$e->getMessage();
				Application_Model_DbTable_DbUserLog::writeMessageError($err);
			}
		}
		$frm = new Menu_Form_FrmMenuGroup();
		$FrmMenu=$frm->FrmMenu();
		Application_Model_Decorator::removeAllDecorator($FrmMenu);
		$this->view->form = $FrmMenu;
	}
	public function editAction(){
			if($this->getRequest()->isPost()){
				$data = $this->getRequest()->getPost();
				$db = new Menu_Model_DbTable_DbMenuGroup();
				try {
					if(isset($data['tbnupdate'])){
						$db->updateMenuGroup($data);
						Application_Form_FrmMessage::Sucessfull('កាកែរប្រែបានជោគ​ជ័យ', self::REDIRECT_URL . '/index');
					}
				}catch(Exception $e){
					Application_Form_FrmMessage::message("កាកែរប្រែមិន​បាន​​ជោគ​ជ័យ");
					$err =$e->getMessage();
					Application_Model_DbTable_DbUserLog::writeMessageError($err);
				}
			}
			$id = $this->getRequest()->getParam("id");
			$db_combo_type=new Menu_Model_DbTable_DbMenuGroup();
			$row=$db_combo_type->editAllRowGroup($id);
			$this->view->rows=$row;
			$frm = new Menu_Form_FrmMenuGroup();
			$this->view->form = $frm->FrmMenu($row);
		}
	
	
}

