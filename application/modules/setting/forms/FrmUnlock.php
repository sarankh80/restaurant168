<?php 
Class setting_Form_FrmUnlock extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmUnlock($data=null){
		
	}	
}