<?php
class Table_tablesController extends Zend_Controller_Action {
	const REDIRECT_URL_ADD = '/table/tables/add';
	const REDIRECT_URL_ADD_CLOSE = '/table/tables/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
	     $db_table=new Table_Model_DbTable_DbTables();
	     $data=$db_table->getAllRowTable();
	     $this->view->rs = $data;
	}
	public function addAction(){
		if($this->getRequest()->isPost()){
			$data =$this->getRequest()->getPost();
			//print_r($data);exit();
		    $db = new Table_Model_DbTable_DbTables();
		       try{
		       	if(isset($data['btnsave'])){
			        $data_table = $db->addTables($data);
			        Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD);
		       	}
		       	else if(isset($data['btnsave_close'])){
		            $data_table = $db->addTables($data);
		       		Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD_CLOSE);
		       	}
		        	             
		       } catch (Exception $e) {
		        	Application_Form_FrmMessage::message("INSERT_FAIL");
		        	Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
		       }
		}
		$frm = new Table_Form_FrmTables();
		$this->view->form = $frm->FrmTables();
	}
	public function editAction(){
		if($this->getRequest()->isPost()){
            $data=$this->getRequest()->getPost();
            $db=new Table_Model_DbTable_DbTables();
            try {
            	if(isset($data['btnsave_close'])){
            		$data_table = $db->updateTable($data);
            		Application_Form_FrmMessage::Sucessfull('ការ​បញ្ចូល​​ជោគ​ជ័យ', self::REDIRECT_URL_ADD_CLOSE);
            	}
            }catch (Exception $e){
            	Application_Form_FrmMessage::message("INSERT_FAIL");
            	Application_Model_DbTable_DbUserLog::writeMessageError($e->getMessage());
            }
		}
		$id=$this->getRequest()->getParam('id');
		$db=new Table_Model_DbTable_DbTables();
		$row=$db->getTableById($id);
		$this->view->photo=$row['img_name'];
		$frm = new Table_Form_FrmTables();
		$this->view->form = $frm->FrmTables($row);
	}
	function poupAction(){
		
	}
	function addNewAction(){
		if($this->getRequest()->isPost()){
			$post=$this->getRequest()->getPost();
			$db = new Table_Model_DbTable_DbTables();
			$id=$db->addGroupCodenew($post);
			$result = array("id"=>$id);
			echo Zend_Json::encode($result);
			exit();
		}
	}
	function addtypeAction(){
		if($this->getRequest()->isPost()){
			$post=$this->getRequest()->getPost();
			$db = new Table_Model_DbTable_DbTables();
			$id=$db->addNewType($post);
			$result=array("id"=>$id);
			echo Zend_Json::encode($result);
			exit();
		}
	}
}

