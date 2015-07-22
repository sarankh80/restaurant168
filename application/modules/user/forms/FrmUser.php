<?php 
Class user_Form_FrmUser extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmUser($data=null){
		$user_id = new Zend_Form_Element_Select('user_id');
		$user_id->setAttribs(array(
				'class'=>'form-control',
		));
		$user_opt = array( ""=>$this->tr->translate("ADMIN"));
		$user_id->setMultiOptions($user_opt);
		
		$user_name = new Zend_Form_Element_Text('user_name');
		$user_name->setAttribs(array(
				'class'=>'form-control',
		));
		$user_name2 = new Zend_Form_Element_Text('user_name2');
		$user_name2->setAttribs(array(
				'class'=>'form-control',
		));
		$gender= new Zend_Form_Element_Text('gender');
		$gender->setAttribs(array(
				'class'=>'form-control',
		));
		$language = new Zend_Form_Element_Text('language');
		$language ->setAttribs(array(
			    'class'=>'form-control'
		));
		$user_level = new Zend_Form_Element_Text('user_level');
		$user_level->setAttribs(array(
				'class'=>'form-control'
		));
		$report_language = new Zend_Form_Element_Text('report_language');
		$report_language->setAttribs(array(
				'class'=>'form-control'
		));
		$access_to_company = new Zend_Form_Element_Text('access_to_company');
		$access_to_company->setAttribs(array(
				'class'=>'form-control'
		));
		$default_company = new Zend_Form_Element_Text('default_company');
		$default_company->setAttribs(array(
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
	    
		
		$this->addElements(array($user_id,$user_name,$user_name2,$gender,$language,$user_level,$report_language,$access_to_company,
				$default_company,$password,$confirm_password,$note));
				
		return $this;
		
	}	
}