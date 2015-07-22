<?php 
Class inventory_Form_FrmUnitOfMeasure extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmUnitOfMeasure($data=null){
		$unit_ID = new Zend_Dojo_Form_Element_TextBox('unit_ID');
		$unit_ID->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$description = new Zend_Dojo_Form_Element_TextBox('description');
		$description->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$second_language = new Zend_Dojo_Form_Element_TextBox('second_language');
		$second_language->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$apply_company = new Zend_Dojo_Form_Element_TextBox('apply_company');
		$apply_company->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$note = new Zend_Dojo_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
// 			print_r($data);
		}
		$color = new Zend_Dojo_Form_Element_FilteringSelect('color');
		$color->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$color_opt = array(
				0=>$this->tr->translate("RED"),
				1=>$this->tr->translate("WHITE"),
				2=>$this->tr->translate("BLACK"),
				3=>$this->tr->translate("BLUE"),
				4=>$this->tr->translate("YELLOW"),
				5=>$this->tr->translate("GREEN"),
				6=>$this->tr->translate("ACTIVE"));
		$color->setMultiOptions($color_opt);
		$this->addElements(array($unit_ID,$description,$second_language,$apply_company,$note,$color));
		return $this;
		
	}	
}