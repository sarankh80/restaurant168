<?php 
Class inventory_Form_FrmWhereHouse extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmWhereHouse($data=null){
		$menu_code = new Zend_Form_Element_Text('where_house_id');
		$menu_code->setAttribs(array(
				'class'=>'form-control',
		));
		$description = new Zend_Form_Element_Text('description');
		$description->setAttribs(array(
				'class'=>'form-control',
		));
		$second_language = new Zend_Form_Element_Text('second_language');
		$second_language->setAttribs(array(
				'class'=>'form-control',
		));
		$address1 = new Zend_Dojo_Form_Element_TextBox('address1');
		$address1->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$address2 = new Zend_Dojo_Form_Element_TextBox('address2');
		$address2->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$phone = new Zend_Dojo_Form_Element_TextBox('phone');
		$phone->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$fax = new Zend_Dojo_Form_Element_TextBox('fax');
		$fax->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
// 			print_r($data);
		}
		$show_description = new Zend_Dojo_Form_Element_FilteringSelect('location_type');
		$show_description->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'class'=>'form-control'
		));
		$description_opt = array( ""=>$this->tr->translate("LOCATION_TYPE"));
		$show_description->setMultiOptions($description_opt);
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$note = new Zend_Dojo_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		
		$this->addElements(array($menu_code,$description,$second_language,$address1,$address2,$phone,$fax,$show_description,$background,$note));
		return $this;
	}
}