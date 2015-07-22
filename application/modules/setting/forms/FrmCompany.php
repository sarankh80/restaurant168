<?php 
Class setting_Form_FrmCompany extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmCompany($data=null){
		$company_code = new Zend_Form_Element_Text('company_code');
		$company_code->setAttribs(array(
				'class'=>'form-control',
		));
		$code = new Zend_Form_Element_Text('code');
		$code->setAttribs(array(
				'class'=>'form-control',
		));
		$company_name = new Zend_Form_Element_Text('company_name');
		$company_name->setAttribs(array(
				'class'=>'form-control',
		));
		$company_type= new Zend_Form_Element_Text('company_type');
		$company_type->setAttribs(array(
				'class'=>'form-control',
		));
		$brand_name= new Zend_Form_Element_Text('brand_name');
		$brand_name->setAttribs(array(
				'class'=>'form-control',
		));
		$slogan= new Zend_Form_Element_Text('slogan');
		$slogan->setAttribs(array(
			     'class'=>'form-control',
		));
		$vat= new Zend_Form_Element_Text('vat');
		$vat->setAttribs(array(
				'class'=>'form-control',
		));
		$address = new Zend_Form_Element_Text('address');
		$address->setAttribs(array(
				'class'=>'form-control'
		));
		$phone= new Zend_Form_Element_Text('phone');
		$phone->setAttribs(array(
				'class'=>'form-control'
		));
		$phone_2= new Zend_Form_Element_Text('phone_2');
		$phone_2->setAttribs(array(
				'class'=>'form-control'
		));
		$fax= new Zend_Form_Element_Text('fax');
		$fax->setAttribs(array(
				'class'=>'form-control'
		));
		$fax_2= new Zend_Form_Element_Text('fax_2');
		$fax_2->setAttribs(array(
				'class'=>'form-control'
		));
		
	    $email = new Zend_Form_Element_Text('email');
	    $email->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $web = new Zend_Form_Element_Text('web');
	    $web->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    
		
		$this->addElements(array($company_code,$code,$company_name,$company_type,$brand_name
				,$slogan,$vat,$address,$phone,$phone_2,$fax,$fax_2,$email,$web));
				
		return $this;
		
	}	
}