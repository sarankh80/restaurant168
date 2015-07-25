<?php 
Class inventory_Form_FrmProductlind extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmProductlind($data=null){
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
		$note = new Zend_Dojo_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'dojoType'=>'dijit.form.Textarea',
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
		}
		$apply_company = new Zend_Dojo_Form_Element_FilteringSelect('apply_company');
		$apply_company->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$product_opt = array(
				0=>$this->tr->translate("SHOW"),
				1=>$this->tr->translate("BLOCK"));
		$apply_company->setMultiOptions($product_opt);
		$this->addElements(array($unit_ID,$description,$second_language,$apply_company,$note));
		return $this;
		
	}	
}