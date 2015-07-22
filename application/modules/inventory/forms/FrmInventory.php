<?php 
Class inventory_Form_FrmImventory extends Zend_Dojo_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmMenu($data=null){
		$menu_code = new Zend_Dojo_Form_Element_TextBox('menu_code');
		$menu_code->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$description = new Zend_Dojo_Form_Element_TextBox('description');
		$description->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$lang_1 = new Zend_Dojo_Form_Element_TextBox('lang_1');
		$lang_1->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$lang_2 = new Zend_Dojo_Form_Element_TextBox('lang_2');
		$lang_2->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$lang_3 = new Zend_Dojo_Form_Element_TextBox('lang_3');
		$lang_3->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
// 			print_r($data);
		}
		$show_description = new Zend_Dojo_Form_Element_FilteringSelect('show_description');
		$show_description->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$description_opt = array(
				1=>$this->tr->translate("ACTIVE"),
				0=>$this->tr->translate("DACTIVE"));
		$show_description->setMultiOptions($description_opt);
		$this->addElements(array($menu_code,$description,$lang_1,$lang_2,$lang_3,$show_description));
		return $this;
		
	}	
}