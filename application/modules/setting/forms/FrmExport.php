<?php 
Class setting_Form_FrmExport extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmExport($data=null){
		$export = new Zend_Form_Element_Text('export');
		$export->setAttribs(array(
				'class'=>'form-control',
		));
		
		
		$path = new Zend_Form_Element_Text('path');
		$path->setAttribs(array(
				'class'=>'form-control',
		));
		$company = new Zend_Form_Element_Text('company');
		$company->setAttribs(array(
				'class'=>'form-control',
		));
		$export_sale = new Zend_Form_Element_Checkbox('export_sale ');
		$export_sale ->setAttribs(array(
				'class'=>'red',
		));
		$export_inventory = new Zend_Form_Element_Checkbox('export_inventory ');
		$export_inventory ->setAttribs(array(
				'class'=>'red',
		));
		$treat = new Zend_Form_Element_Checkbox('treat ');
		$treat ->setAttribs(array(
				'class'=>'red',
		));
	
		$this->addElements(array($export,$path,$company,$export_sale,$export_inventory,$treat));
				
		return $this;
		
	}	
}