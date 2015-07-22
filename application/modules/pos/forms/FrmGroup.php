<?php 
Class customer_Form_FrmGroup extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmGroup($data=null){
		$customer_id = new Zend_Form_Element_Text('customer_id');
		$customer_id->setAttribs(array(
				'class'=>'form-control',
		));
		$general = new Zend_Form_Element_Text('general');
		$general->setAttribs(array(
				'class'=>'form-control',
		));
		
		
		$this->addElements(array($customer_id,$general));
				
		return $this;
		
	}	
}