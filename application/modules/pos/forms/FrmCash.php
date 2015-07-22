<?php 
Class customer_Form_FrmCash extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmCash($data=null){
		$customer_id = new Zend_Form_Element_Text('customer_id');
		$customer_id->setAttribs(array(
				'class'=>'form-control',
		));
		$general = new Zend_Form_Element_Text('general');
		$general->setAttribs(array(
				'class'=>'form-control',
		));
		$session= new Zend_Form_Element_Text('session');
		$session->setAttribs(array(
				'class'=>'form-control',
		));
		$phone = new Zend_Form_Element_Text('phone ');
		$phone ->setAttribs(array(
			    'class'=>'form-control'
		));
		$check = new Zend_Form_Element_Text('check');
		$check->setAttribs(array(
				'class'=>'form-control'
		));
		$contact_name = new Zend_Form_Element_Text('contact_name');
		$contact_name->setAttribs(array(
				'class'=>'form-control'
		));
		$pay_date = new Zend_Form_Element_Text('pay_date');
		$pay_date->setAttribs(array(
				'class'=>'form-control'
		));
		$fax = new Zend_Form_Element_Text('fax');
	    $fax->setAttribs(array(
				'class'=>'form-control'
		));
	    $deposit = new Zend_Form_Element_Text('deposit');
	    $deposit->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $company = new Zend_Form_Element_Text('company');
	    $company->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $undeposit = new Zend_Form_Element_Text('undeposit');
	    $undeposit->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $address = new Zend_Form_Element_Text('address');
	    $address->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $pay_amount = new Zend_Form_Element_Text('pay_amount');
	    $pay_amount->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $address_2 = new Zend_Form_Element_Text('address_2');
	    $address_2->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $city = new Zend_Form_Element_Text('city');
	    $city->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $country = new Zend_Form_Element_Text('country');
	    $country->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    
		
		$this->addElements(array($customer_id,$general,$session,$phone,$check,$contact_name,$pay_date,
				$fax,$deposit,$company,$undeposit,$address,$pay_amount,$address_2,$city,$country));
				
		return $this;
		
	}	
}