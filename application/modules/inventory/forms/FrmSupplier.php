<?php 
Class inventory_Form_FrmSupplier extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmSupplier($data=null){
		$supplier_id = new Zend_Form_Element_Text('supplier_id');
		$supplier_id->setAttribs(array(
				'class'=>'form-control',
		));
		$inactive = new Zend_Form_Element_Checkbox('inactive');
		$inactive->setAttribs(array(
				'class'=>'red',
		));
		$deactive = new Zend_Form_Element_Checkbox('deactive');
		$deactive->setAttribs(array(
				'class'=>'red',
		));
		$company = new Zend_Form_Element_Select('company');
		$company->setAttribs(array(
				'class'=>'form-control'
		));
		$company_opt = array( "1"=>$this->tr->translate("SELECT_COMPANY"),
				"2"=>$this->tr->translate("SELECT_COMPANY_NAME"));
		$company->setMultiOptions($company_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$corent_brand = new Zend_Form_Element_Text('corent_brand');
		$corent_brand->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$secont_language = new Zend_Form_Element_Text('secont_language');
		$secont_language->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
		}
		$open_po = new Zend_Form_Element_Select('open_po');
		$open_po->setAttribs(array(
				'class'=>'form-control'
		));
		$open_opt = array( "1"=>$this->tr->translate("..."));
		$open_po->setMultiOptions($open_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$contact_name = new Zend_Form_Element_Select('contact_name');
		$contact_name->setAttribs(array(
				'class'=>'form-control'
		));
		$contact_opt = array( "1"=>$this->tr->translate("..."));
		$contact_name->setMultiOptions($contact_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$ytd_purchase = new Zend_Form_Element_Text('ytd_purchase');
		$ytd_purchase->setAttribs(array(
				'class'=>'form-control','id'=>"selected-color1"
		));
		$edit = new Zend_Form_Element_Button('edit');
		$edit->setAttribs(array(
				'class'=>'red'
		));
		$website_phone = new Zend_Form_Element_Select('website_phone');
		$website_phone->setAttribs(array(
				'class'=>'form-control'
		));
		$website_opt = array( "1"=>$this->tr->translate("..."));
		$website_phone->setMultiOptions($website_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red'
		));
		$available_credite = new Zend_Form_Element_Text('available_credite');
		$available_credite->setAttribs(array(
				'class'=>'form-control red'
		));	
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control red'
		));
		$resize = new Zend_Form_Element_Text('resize');
		$resize->setAttribs(array(
				'class'=>'form-control','id'=>"resize",'value'=>12,'placeholder'=>'12'
		));
		$note = new Zend_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 100px;"
		));
		$phone2 = new Zend_Form_Element_Text('phone2');
		$phone2->setAttribs(array(
				'class'=>'form-control red'
		));
		$title = new Zend_Form_Element_Text('title');
		$title->setAttribs(array(
				'class'=>'form-control red'
		));
		$address1 = new Zend_Form_Element_Text('address1');
		$address1->setAttribs(array(
				'class'=>'form-control red'
		));
		$address2 = new Zend_Form_Element_Text('address2');
		$address2->setAttribs(array(
				'class'=>'form-control red'
		));
		$city = new Zend_Form_Element_Text('city');
		$city->setAttribs(array(
				'class'=>'form-control red'
		));
		$country = new Zend_Form_Element_Text('country');
		$country->setAttribs(array(
				'class'=>'form-control red'
		));
		$fax = new Zend_Form_Element_Text('fax');
		$fax->setAttribs(array(
				'class'=>'form-control red'
		));
		$fax2 = new Zend_Form_Element_Text('fax2');
		$fax2->setAttribs(array(
				'class'=>'form-control red'
		));
		$email= new Zend_Form_Element_Text('email');
		$email->setAttribs(array(
				'class'=>'form-control red'
		));
		$webpage = new Zend_Form_Element_Text('webpage');
		$webpage->setAttribs(array(
				'class'=>'form-control red'
		));
		$this->addElements(array($combo,$supplier_id,$inactive,$deactive,$company,$corent_brand,
				$secont_language,$open_po,$contact_name,$background,$ytd_purchase,$edit,$available_credite
				,$website_phone,$resize,$note,$phone2,$title,$address1,$address2,$city,$country,$fax,$fax2,
				$email,$webpage));
		return $this;
		
	}	
}