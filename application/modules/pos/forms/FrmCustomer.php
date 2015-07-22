<?php 
Class customer_Form_FrmCustomer extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmCustomer($data=null){
		$customer = new Zend_Form_Element_Text('customer_id');
		$customer->setAttribs(array(
				'class'=>'form-control',
		));
		$apply_to_company = new Zend_Form_Element_Text('apply');
		$apply_to_company->setAttribs(array(
				'class'=>'form-control',
		));
		$company = new Zend_Form_Element_Text('company');
		$company->setAttribs(array(
				'class'=>'form-control',
		));
		$current_balance = new Zend_Form_Element_Text('current');
		$current_balance->setAttribs(array(
			    'class'=>'form-control'
		));
		$second_language = new Zend_Form_Element_Text('second_language');
		$second_language->setAttribs(array(
				'class'=>'form-control'
		));
		$contact_name = new Zend_Form_Element_Text('contact');
		$contact_name->setAttribs(array(
				'class'=>'form-control'
		));
		$ytd_sale = new Zend_Form_Element_Text('sale');
		$ytd_sale->setAttribs(array(
				'class'=>'form-control'
		));
		$mobile = new Zend_Form_Element_Text('mobile');
		$mobile->setAttribs(array(
				'class'=>'form-control'
		));
		$credit = new Zend_Form_Element_Text('credit');
		$credit->setAttribs(array(
				'class'=>'form-control'
		));
		$customer_group = new Zend_Form_Element_Text('customer_group');
		$customer_group->setAttribs(array(
				'class'=>'form-control'
		));
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$active = new Zend_Form_Element_Checkbox('active');
		$active->setAttribs(array(
				'class'=>'yellow',
		));
	
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		
		$phone_2 = new Zend_Form_Element_Text('$phone_2');
		$phone_2 ->setAttribs(array(
				'class'=>'form-control'
		));
		$title = new Zend_Form_Element_Text('$title');
		$title ->setAttribs(array(
				'class'=>'form-control'
		));
		$address = new Zend_Form_Element_Text('$address');
		$address  ->setAttribs(array(
				'class'=>'form-control'
		));
		$address_2 = new Zend_Form_Element_Text('$address_2');
		$address_2  ->setAttribs(array(
				'class'=>'form-control'
		));
		$city = new Zend_Form_Element_Text('$city');
		$city->setAttribs(array(
				'class'=>'form-control'
		));
		$country = new Zend_Form_Element_Text('$country');
		$country->setAttribs(array(
				'class'=>'form-control'
		));
		$fax = new Zend_Form_Element_Text('$fax');
		$fax->setAttribs(array(
				'class'=>'form-control'
		));
		$fax_2 = new Zend_Form_Element_Text('$fax_2$');
		$fax_2->setAttribs(array(
				'class'=>'form-control'
		));
		$email = new Zend_Form_Element_Text('$email');
		$email->setAttribs(array(
				'class'=>'form-control'
		));
		$web = new Zend_Form_Element_Text('$web');
		$web ->setAttribs(array(
				'class'=>'form-control'
		));
		
		$apply = new Zend_Form_Element_Select('apply');
		$apply->setAttribs(array(
				'class'=>'form-control'
		));
		$apply_opt = array( ""=>$this->tr->translate("SELECT_APPLY_TO_COMPANY"));
		$apply->setMultiOptions($apply_opt);
		$active = new Zend_Form_Element_Checkbox('active');
		$active->setAttribs(array(
				'class'=>'red',
		));
		$hold = new Zend_Form_Element_Checkbox('hold');
		$hold ->setAttribs(array(
				'class'=>'red',
		));
		$format = new Zend_Form_Element_Text('demo4');
		$format->setAttribs(array(
				'class'=>'form-control','id'=>"demo4",'value'=>12,'placeholder'=>'12'
		));
		$setting = new Zend_Form_Element_Select('setting');
		$setting->setAttribs(array(
				'class'=>'form-control'
		));
		$setting_opt = array( ""=>$this->tr->translate("SELECT_SETTING"));		
		$setting->setMultiOptions($setting_opt);
		
		$arrange = new Zend_Form_Element_Text('arrange');
		$arrange->setAttribs(array(
				'class'=>'form-control'
		));		
		$resize = new Zend_Form_Element_Text('resize');
		$resize->setAttribs(array(
				'class'=>'form-control','id'=>"resize",'value'=>12,'placeholder'=>'12'
		));
		$note = new Zend_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 100px;"
		));
		$this->addElements(array($customer,$apply_to_company,$company,$current_balance,$second_language,$contact_name,$ytd_sale,
				          $mobile,$credit,$customer_group,$active,$hold,$phone_2,$title,$address,$address_2,$city,$country,$fax,$fax_2,$email,$web,$format,$setting,$arrange,$resize,$note));
		return $this;
		
	}	
}