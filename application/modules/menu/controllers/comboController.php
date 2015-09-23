<?php
class Menu_comboController extends Zend_Controller_Action {
	const REDIRECT_URL = '/menu/combo';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		 $db_combo_type=new Menu_Model_DbTable_DbCombo();
	     $this->view->rows=$db_combo_type->getAllRowCombo();
		 $frm = new Menu_Form_FrmMenuCombo();
		 $this->view->form = $frm->FrmMenu();
	}
	public function addAction(){
		if($this->getRequest()->isPost()){
			$_data = $this->getRequest()->getPost();
			$db = new Menu_Model_DbTable_DbCombo();
			try {
				if(isset($_data['btnsave'])){
					$db->addCombo($_data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL . '/add');
				}else if(isset($_data['btnsaveclose'])){
					$db->addCombo($_data);
					Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL . '/index');
				}
			}catch(Exception $e){
				Application_Form_FrmMessage::message("ការ​បញ្ចូល​មិន​ជោគ​ជ័យ");
				$err =$e->getMessage();
				Application_Model_DbTable_DbUserLog::writeMessageError($err);
			}
		}
		$frm = new Menu_Form_FrmMenuCombo();
		$FrmMenu=$frm->FrmMenu();
		Application_Model_Decorator::removeAllDecorator($FrmMenu);
		$this->view->form = $FrmMenu;
	}
	public function editAction(){
		if($this->getRequest()->isPost()){
			$_data = $this->getRequest()->getPost();
			$db = new Menu_Model_DbTable_DbCombo();
			try {
				if(isset($_data['btnsaveclose'])){
					$db->updateMenuCombo($_data);
					Application_Form_FrmMessage::Sucessfull('កាកែរប្រែបានជោគ​ជ័យ', self::REDIRECT_URL . '/index');
				}
			}catch(Exception $e){
				Application_Form_FrmMessage::message("កាកែរប្រែមិន​បាន​​ជោគ​ជ័យ");
				$err =$e->getMessage();
				Application_Model_DbTable_DbUserLog::writeMessageError($err);
			}
		}
		$id = $this->getRequest()->getParam("id");
		$db_combo_type=new Menu_Model_DbTable_DbCombo();
		$row=$db_combo_type->editAllRowCombo($id);
		$this->view->photo=$row['img_name'];
		$this->view->rows=$row;
		$frm = new Menu_Form_FrmMenuCombo();
		$this->view->form = $frm->FrmMenu($row);
	}
	function addNewTypeAction(){
		if($this->getRequest()->isPost()){
			$post=$this->getRequest()->getPost();
			$db = new Menu_Model_DbTable_DbCombo();
			$id=$db->addTableTypeNew($post);
			$result=array('id'=>$id);
			echo Zend_Json::encode($result);
			exit();
		}
	}
}

