<?php 
Class setting_Form_FrmSelect extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmSelect($data=null){
		$company = new Zend_Form_Element_Select('company ');
	    $company  ->setAttribs(array(
				'class'=>'form-control',
		));
	    $company_opt = array( ""=>$this->tr->translate("VSS Our set"));
	    $company->setMultiOptions($company_opt);
	    
	    
		
		$this->addElements(array( $company));
				
		return $this;
		
	}	
}