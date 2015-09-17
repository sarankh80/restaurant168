<?php 
Class customer_Form_FrmCustomer extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmCustomer($data=null){
		$customer = new Zend_Form_Element_Select('customer_id');
		$customer->setAttribs(array(
				'class'=>'form-control',
		));
		$current=new Zend_Form_Element_Text('current');
		$current->setAttribs(array(
				'class'=>'form-control',
		));
		$company = new Zend_Form_Element_Select('company');
		$company->setAttribs(array(
				'class'=>'form-control',
		));
		$current_balance = new Zend_Form_Element_Select('current');
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
		$ytd_sale = new Zend_Form_Element_Select('sale');
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
		$credit_limit = new Zend_Form_Element_Text('credit_limit');
		$credit_limit->setAttribs(array(
				'class'=>'form-control'
		));
		$sale_discount = new Zend_Form_Element_Text('sale_discount');
		$sale_discount->setAttribs(array(
				'class'=>'form-control'
		));
		$sale_tax = new Zend_Form_Element_Text('sale_tax');
		$sale_tax->setAttribs(array(
				'class'=>'form-control'
		));
		$payment_disc = new Zend_Form_Element_Text('payment_disc');
		$payment_disc->setAttribs(array(
				'class'=>'form-control'
		));
		$net_due = new Zend_Form_Element_Text('net_due');
		$net_due->setAttribs(array(
				'class'=>'form-control'
		));
		$term_id = new Zend_Form_Element_Text('term_id');
		$term_id ->setAttribs(array(
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
		$price_code = new Zend_Form_Element_Select('price_code:');
		$price_code->setAttribs(array(
				'class'=>'form-control',
		));
		$setting = new Zend_Form_Element_Select('setting');
		$setting->setAttribs(array(
				'class'=>'form-control'
		));
		$setting_opt = array( ""=>$this->tr->translate("SELECT_SETTING"));		
		$setting->setMultiOptions($setting_opt);
		
		$payment_day = new Zend_Form_Element_Text('payment_day');
		$payment_day->setAttribs(array(
				'class'=>'form-control'
		));		
		$city=new Zend_Form_Element_Text('city');
		$city->setAttribs(array(
				'class'=>'form-control',
		));
		$city=new Zend_Form_Element_Text('city');
		$city->setAttribs(array(
				'class'=>'form-control',
		));
		$country=new Zend_Form_Element_Text('country');
		$country->setAttribs(array(
				'class'=>'form-control',
		));
		$fax=new Zend_Form_Element_Text('fax');
		$fax->setAttribs(array(
				'class'=>'form-control',
		));
		$fax2=new Zend_Form_Element_Text('fax2');
		$fax2->setAttribs(array(
				'class'=>'form-control',
		));
		$email=new Zend_Form_Element_Text('email');
		$email->setAttribs(array(
				'class'=>'form-control',
		));
		$web_page=new Zend_Form_Element_Text('web_page');
		$web_page->setAttribs(array(
				'class'=>'form-control',
		));
		
		//customer_detail
		$entry_date=new Zend_Form_Element_Text('entry_date');
		$entry_date->setAttribs(array(
				'class'=>'form-control',
		));
		$last_sale_date=new Zend_Form_Element_Text('last_sale_date');
		$last_sale_date->setAttribs(array(
				'class'=>'form-control',
		));
		$last_pay_date=new Zend_Form_Element_Text('last_pay_date');
		$last_pay_date->setAttribs(array(
				'class'=>'form-control form-control-inline  date-picker',
		));
		$ptd_sales=new Zend_Form_Element_Text('ptd_sales');
		$ptd_sales->setAttribs(array(
				'class'=>'form-control',
		));
		$deposit=new Zend_Form_Element_Text('deposit');
		$deposit->setAttribs(array(
				'class'=>'form-control','id'=>'mask_number',
		));
		$sale_person = new Zend_Form_Element_Text('sale_person');
		$sale_person->setAttribs(array(
				'class'=>'form-control',
		));
		$credit = new Zend_Form_Element_Text('credit');
		$credit->setAttribs(array(
				'class'=>'form-control',
		));
		$last_sale_amount = new Zend_Form_Element_Text('last_sale_amount');
		$last_sale_amount->setAttribs(array(
				'class'=>'form-control',
		));
		$last_pay_amount = new Zend_Form_Element_Text('last_pay_amount');
		$last_pay_amount->setAttribs(array(
				'class'=>'form-control',
		));
		$current_balance = new Zend_Form_Element_Text('current_balance');
		$current_balance->setAttribs(array(
				'class'=>'form-control',
		));
		$ytd_sales = new Zend_Form_Element_Text('ytd_sales');
		$ytd_sales->setAttribs(array(
				'class'=>'form-control',
		));
		//membership 
		$membership_type = new Zend_Form_Element_Text('membership_type');
		$membership_type->setAttribs(array(
				'class'=>'form-control',
		));
		$membership_id = new Zend_Form_Element_Text('membership_id');
		$membership_id->setAttribs(array(
				'class'=>'form-control',
		));
		$member_days = new Zend_Form_Element_Text('member_days');
		$member_days->setAttribs(array(
				'class'=>'form-control',
		));
		$enroll_date = new Zend_Form_Element_Text('enroll_date');
		$enroll_date->setAttribs(array(
				'class'=>'form-control form-control-inline date-picker',
		));
		$sex = new Zend_Form_Element_Select('sex');
		$sex->setAttribs(array(
				'class'=>'form-control',
		));
		$opt=array('1'=>'Male','2'=>'Female');
		$sex->setMultiOptions($opt);
		$date_of_birth = new Zend_Form_Element_Text('date_of_birth');
		$date_of_birth->setAttribs(array(
				'class'=>'form-control',
		));
		$last_bill_date = new Zend_Form_Element_Text('last_bill_date');
		$last_bill_date->setAttribs(array(
				'class'=>'form-control',
		));
		$next_bill_date = new Zend_Form_Element_Text('next_bill_date');
		$next_bill_date->setAttribs(array(
				'class'=>'form-control form-control-inline date-picker',
		));
		$valid_to = new Zend_Form_Element_Text('valid_to');
		$valid_to->setAttribs(array(
				'class'=>'form-control',
		));
		$total_used_time= new Zend_Form_Element_Text('total_used_time');
		$total_used_time->setAttribs(array(
				'class'=>'form-control',
		));
		$last_used_date= new Zend_Form_Element_Text('last_used_date');
		$last_used_date->setAttribs(array(
				'class'=>'form-control',
		));
		$total_amount= new Zend_Form_Element_Text('total_amount');
		$total_amount->setAttribs(array(
				'class'=>'form-control',
		));
		$last_amount= new Zend_Form_Element_Text('last_amount');
		$last_amount->setAttribs(array(
				'class'=>'form-control',
		));
		$current_point= new Zend_Form_Element_Text('current_point');
		$current_point->setAttribs(array(
				'class'=>'form-control',
		));
		$total_point= new Zend_Form_Element_Text('total_point');
		$total_point->setAttribs(array(
				'class'=>'form-control',
		));
		
		$note = new Zend_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 100px;"
		));
		$this->addElements(array($current,$total_point,$current_point,$last_amount,$total_amount,$last_used_date,$total_used_time,$valid_to,$next_bill_date,$last_bill_date,$enroll_date,$date_of_birth,$sex,$member_days,$membership_type,$membership_id,$ytd_sales,$current_balance,$last_pay_amount,$last_sale_amount,$credit,$ptd_sales,$last_pay_date,$last_sale_date,$deposit,$entry_date,$web_page,$email,$fax2,$fax,$country,$city,$credit_limit,$customer,$apply,$company,$current_balance,$second_language,$contact_name,$ytd_sale,
				          $mobile,$credit,$customer_group,$active,$hold,$phone_2,$title,$address,$address_2,$sale_discount,$sale_tax,$payment_disc,$net_due,$term_id,$price_code,$setting,$payment_day,$sale_person,$note));
		return $this;
		
	}	
}