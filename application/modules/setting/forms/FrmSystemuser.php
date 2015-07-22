<?php 
Class setting_Form_FrmSystemuser extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmSystemuser($data=null){
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
	    $sale = new Zend_Form_Element_Text('sale');
	    $sale->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $usergroup = new Zend_Form_Element_Text('usergroup');
	    $usergroup->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $login= new Zend_Form_Element_Text('login');
	    $login->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    $price= new Zend_Form_Element_Text('price');
	    $price->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	     
	    $autolock= new Zend_Form_Element_Text('autolock');
	    $autolock->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    
	   
	    $active = new Zend_Form_Element_Checkbox('active');
	    $active->setAttribs(array(
	    		'class'=>'yellow',
	    ));
	    
	    $usermust = new Zend_Form_Element_Checkbox('usermust');
	    $usermust->setAttribs(array(
	    		'class'=>'red',
	    ));
	    
	    $userpwd = new Zend_Form_Element_Checkbox('$userpwd');
	    $userpwd->setAttribs(array(
	    		'class'=>'red',
	    ));
	    
	    $userschedule = new Zend_Form_Element_Checkbox('userschedule');
	    $userschedule->setAttribs(array(
	    		'class'=>'red',
	    ));
	    
	    $note= new Zend_Form_Element_Text('note');
	    $note->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	    
	    $des= new Zend_Form_Element_Text('des');
	    $des->setAttribs(array(
	    		'class'=>'form-control'
	    ));
	     
		
		$this->addElements(array($user_id,$user_name,$user_name2,$gender,$language,$user_level,$report_language,$access_to_company,
				$default_company,$password,$confirm_password,$sale,$usergroup,$login,$price,$autolock,$active,$usermust,
				$userpwd,$userschedule,$note,$des));
				
		return $this;
		
	}	
}