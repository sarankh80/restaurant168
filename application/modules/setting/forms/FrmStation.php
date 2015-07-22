<?php 
Class setting_Form_FrmStation extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmStation($data=null){
		$station_name = new Zend_Form_Element_Text('station_name');
		$station_name->setAttribs(array(
				'class'=>'form-control',
		));
		$copy_form = new Zend_Form_Element_Text('copy_form ');
		$copy_form ->setAttribs(array(
				'class'=>'form-control',
		));
		$receiving = new Zend_Form_Element_Text('receiving');
		$receiving ->setAttribs(array(
				'class'=>'form-control',
		));
		$report= new Zend_Form_Element_Text('report');
		$report->setAttribs(array(
				'class'=>'form-control',
		));
		$language = new Zend_Form_Element_Text('language');
		$language ->setAttribs(array(
			    'class'=>'form-control'
		));
		$auto = new Zend_Form_Element_Text('auto');
		$auto->setAttribs(array(
				'class'=>'form-control'
		));
		$invoice = new Zend_Form_Element_Text('$invoice');
		$invoice->setAttribs(array(
				'class'=>'form-control'
		));
		$pos = new Zend_Form_Element_Text('pos');
		$pos->setAttribs(array(
				'class'=>'form-control'
		));
		$gender = new Zend_Form_Element_Text('gender');
		$gender->setAttribs(array(
				'class'=>'form-control'
		));
		$password = new Zend_Form_Element_Text('password');
	    $password->setAttribs(array(
				'class'=>'form-control'
		));
	    $confirm_password = new Zend_Form_Element_Text('confirm_password');
	    $confirm_password->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $note = new Zend_Form_Element_Text('note');
	    $note->setAttribs(array(
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
	    
		
		$this->addElements(array($station_name,$copy_form ,$receiving,$report,$language,$auto,$invoice,$pos,
				$gender,$password,$confirm_password,$note));
				
		return $this;
		
	}	
}