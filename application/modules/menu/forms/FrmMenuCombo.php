<?php 
Class menu_Form_FrmMenuCombo extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmMenu($data=null){
		$menu_group = new Zend_Form_Element_Select('menu_group');
		$menu_group->setAttribs(array(
				'class'=>'form-control input-xlarge select2me','onClick'=>'FuncMenuGroup()'
		));
		$db = new Menu_Model_DbTable_DbMenu();
		$opt = $db->getAllGroupMenu();
		$menu_group->setMultiOptions($opt);
		$root_code = new Zend_Form_Element_Select('root_code');
		$root_code->setAttribs(array(
				'class'=>'form-control','onClick'=>'FuncRootMenuCode()'
		));
		$select_root_code_opt = array( ""=>$this->tr->translate("SELECT_GROUP_CODE"),-1=>$this->tr->translate("ADD_NEW"));
		$root_code->setMultiOptions($select_root_code_opt);
		
		$root_menu = new Zend_Form_Element_Select('root_menu');
		$root_menu->setAttribs(array(
				'class'=>'form-control input-xlarge select2me','onClick'=>'FuncRootMenuCode()'
		));
		$db = new Menu_Model_DbTable_DbMenu();
		$opt = $db->getAllRootMenu();
		$root_menu->setMultiOptions($opt);
		$root_menus = new Zend_Form_Element_Select('root_menus');
		$root_menus->setAttribs(array(
				'class'=>'form-control','onClick'=>'FuncRootMenuCode()'
		));
		$root_menu_opt = array( ""=>$this->tr->translate("SELECT_ROOT_MENU"),-1=>$this->tr->translate("ADD_NEW"));
		$root_menus->setMultiOptions($root_menu_opt);
		
		$apply_to_company = new Zend_Form_Element_Select('apply_to_company');
		$apply_to_company->setAttribs(array(
				'class'=>'form-control'
		));
		$apply_opt = array( ""=>$this->tr->translate("SELECT_APPLY_TO_COMPANY"));
		$apply_to_company->setMultiOptions($apply_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$printer_code = new Zend_Form_Element_Select('printer_code');
		$printer_code->setAttribs(array(
				'class'=>'form-control input-xlarge select2me'
		));
		$apply_opt = array( ""=>$this->tr->translate("SELECT_APPLY_TO_COMPANY"));
		$printer_code->setMultiOptions($apply_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$combo_code = new Zend_Form_Element_Text('combo_code');
		$combo_code->setAttribs(array(
				'class'=>'form-control',
		));
		$description = new Zend_Form_Element_Text('description');
		$description->setAttribs(array(
				'class'=>'form-control',
		));
		$lang_1 = new Zend_Form_Element_Text('lang_1');
		$lang_1->setAttribs(array(
				'class'=>'form-control',
		));
		$lang_2 = new Zend_Form_Element_Text('lang_2');
		$lang_2->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$price = new Zend_Form_Element_Text('price');
		$price->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$lang_3 = new Zend_Form_Element_Text('lang_3');
		$lang_3->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
		}
		$db = new Application_Model_DbTable_DbGlobal();
		$show_description = new Zend_Form_Element_Select('show_description');
		$show_description->setAttribs(array(
				'class'=>'form-control'
		));
		$opt = $db->getVewOptoinTypeByType(1,1,null,1);
		$show_description->setMultiOptions($opt);
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$font_color = new Zend_Form_Element_Text('font_color');
		$font_color->setAttribs(array(
				'class'=>'form-control','id'=>"selected-color1"
		));
		$font_size = new Zend_Form_Element_Text('demo3');
		$font_size->setAttribs(array(
				'class'=>'form-control','id'=>"demo3",'value'=>12,'placeholder'=>'12'
		));
		$apply = new Zend_Form_Element_Select('apply');
		$apply->setAttribs(array(
				'class'=>'form-control'
		));
		$apply_opt = array( ""=>$this->tr->translate("SELECT_APPLY_TO_COMPANY"));
		$apply->setMultiOptions($apply_opt);
		
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$combo1 = new Zend_Form_Element_Checkbox('combo1');
		$combo1->setAttribs(array(
				'class'=>'red',
		));
		$combo2 = new Zend_Form_Element_Checkbox('combo2');
		$combo2->setAttribs(array(
				'class'=>'red',
		));
		$combo3 = new Zend_Form_Element_Checkbox('combo3');
		$combo3->setAttribs(array(
				'class'=>'red',
		));
		$combo4 = new Zend_Form_Element_Checkbox('combo4');
		$combo4->setAttribs(array(
				'class'=>'red',
		));
		$active = new Zend_Form_Element_Checkbox('active');
		$active->setAttribs(array(
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
		$this->addElements(array($apply,$active,$menu_group,$description,$lang_1,$lang_2,$lang_3,$combo_code,
				$show_description,$background,$font_color,$font_size,$format,$setting,$arrange,$resize,$note,$price,
				$root_menu,$printer_code,$apply_to_company,$root_code,$root_menus,$combo,
				$combo1,$combo2,$combo3,$combo4));
		return $this;
		
	}	
}