<?php 
Class customer_Form_FrmInvoice extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmInvoice($data=null){
		$customer_id = new Zend_Form_Element_Select('customer_id');
		$customer_id->setAttribs(array(
				'class'=>'form-control',
		));
		$general_opt = array( ""=>$this->tr->translate("GENERAL_CUSTOMER"));
		$customer_id->setMultiOptions($general_opt);
		
		$general = new Zend_Form_Element_Text('general');
		$general->setAttribs(array(
				'class'=>'form-control',
		));
		
		$session = new Zend_Form_Element_Text('session');
		$session->setAttribs(array(
				'class'=>'form-control',
		));
		$contact_name= new Zend_Form_Element_Text('contact_name');
		$contact_name->setAttribs(array(
				'class'=>'form-control',
		));
		
		$check = new Zend_Form_Element_Text('check');
		$check->setAttribs(array(
				'class'=>'form-control'
		));
		$phone = new Zend_Form_Element_Text('phone');
		$phone->setAttribs(array(
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
	    $account_num = new Zend_Form_Element_Text('account');
	    $account_num->setAttribs(array(
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
	   $remaining = new Zend_Form_Element_Text('remaining');
	   $remaining->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	   
	    
		
		$this->addElements(array($customer_id,$general,$contact_name,$session,$check,$phone,$pay_date,
				$fax,$account_num,$undeposit,$address,$pay_amount,$remaining));
				
		return $this;
		
	}
}