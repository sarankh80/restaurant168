<?php 
Class customer_Form_FrmDeposit extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmDeposit($data=null){
		$customer_id = new Zend_Form_Element_Text('customer_id');
		$customer_id->setAttribs(array(
				'class'=>'form-control',
		));
		$apply = new Zend_Form_Element_Text('apply');
		$apply->setAttribs(array(
				'class'=>'form-control',
		));
		$company= new Zend_Form_Element_Text('company');
		$company->setAttribs(array(
				'class'=>'form-control',
		));
		$current = new Zend_Form_Element_Text('current');
		$current ->setAttribs(array(
			    'class'=>'form-control'
		));
		$contact = new Zend_Form_Element_Text('contact');
		$contact ->setAttribs(array(
				'class'=>'form-control'
		));
		$sale = new Zend_Form_Element_Text('sale');
		$sale->setAttribs(array(
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
		$cus_id = new Zend_Form_Element_Text('cus_id');
		$cus_id->setAttribs(array(
				
				'class'=>'form-control'
		));
		
		$active= new Zend_Form_Element_Checkbox('active');
		$active->setAttribs(array(
				'class'=>'red',
		));
		$hold = new Zend_Form_Element_Checkbox('$hold');
		$hold->setAttribs(array(
				'class'=>'yellow',
		));
	
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		
		$phone_2 = new Zend_Form_Element_Text('phone_2');
		$phone_2 ->setAttribs(array(
				'class'=>'form-control'
		));

		$title = new Zend_Form_Element_Text('title');
		$title ->setAttribs(array(
				'class'=>'form-control'
		));
		$address = new Zend_Form_Element_Text('address');
		$address ->setAttribs(array(
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
		$fax = new Zend_Form_Element_Text('fax');
		$fax->setAttribs(array(
				'class'=>'form-control'
		));
		$fax_2 = new Zend_Form_Element_Text('fax_2');
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
		$currency = new Zend_Form_Element_Checkbox('currency');
		$currency->setAttribs(array(
				'class'=>'red',
		));
		$base = new Zend_Form_Element_Checkbox('base');
		$base ->setAttribs(array(
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
		$this->addElements(array($customer_id,$apply,$company,$current,$contact,$sale,$mobile,$credit,$cus_id,
				$active,$hold,$phone_2,$title,$address,$address_2,$city,$country,$fax,$fax_2,$email,$web
				,$currency,$base,$format,$setting,$arrange,$resize,$note));
		return $this;
		
	}	
}