<?php 
Class setting_Form_FrmVoid extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmVoid($data=null){
		$date = new Zend_Form_Element_Text('date');
		$date->setAttribs(array(
				'class'=>'form-control',
		));
		$company = new Zend_Form_Element_Select('company ');
	    $company  ->setAttribs(array(
				'class'=>'form-control',
        ));
	    $company_opt = array( ""=>$this->tr->translate("VSS"));
	    $company->setMultiOptions($company_opt);
		
		$this->addElements(array($date,$company));
				
		return $this;
		
	}	
}