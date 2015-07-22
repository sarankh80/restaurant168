<?php 
Class user_Form_FrmChangepwd extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmChangepwd($data=null){
		$old_pwd = new Zend_Form_Element_Text('old_pwd ');
		$old_pwd ->setAttribs(array(
				'class'=>'form-control',
		));
		$pwd = new Zend_Form_Element_Text('pwd ');
		$pwd ->setAttribs(array(
				'class'=>'form-control',
		));
		$confirm = new Zend_Form_Element_Text('confirm_pwd');
		$confirm ->setAttribs(array(
				'class'=>'form-control',
		));
	
	    
		
		$this->addElements(array($old_pwd,$pwd,$confirm));
				
		return $this;
		
	}	
}