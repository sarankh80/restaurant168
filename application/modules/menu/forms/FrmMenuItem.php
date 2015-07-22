<?php 
Class menu_Form_FrmMenuItem extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmMenu($data=null){
		$item_code = new Zend_Form_Element_Text('item_code');
		$item_code->setAttribs(array(
				'class'=>'form-control',
		));
		$menu_code = new Zend_Form_Element_Text('menu_code');
		$menu_code->setAttribs(array(
				'class'=>'form-control',
		));
		$select_menu = new Zend_Form_Element_Select('select_menu_group');
		$select_menu->setAttribs(array(
				'class'=>'form-control','onClick'=>'FuncMenuGroup()'
		));
		$select_menu_opt = array( ""=>$this->tr->translate("SELECT_MENU_GROUP"),-1=>$this->tr->translate("ADD_NEW"));
		$select_menu->setMultiOptions($select_menu_opt);
		
		$root_code = new Zend_Form_Element_Text('root_code');
		$root_code->setAttribs(array(
				'class'=>'form-control',
		));
		$select_root_code = new Zend_Form_Element_Select('select_root_code');
		$select_root_code->setAttribs(array(
				'class'=>'form-control','onClick'=>'FuncRootMenuCode()'
		));
		$select_root_code_opt = array( ""=>$this->tr->translate("SELECT_ROOT_MENU"),-1=>$this->tr->translate("ADD_NEW"));
		$select_root_code->setMultiOptions($select_root_code_opt);
		
		$print_code = new Zend_Form_Element_Text('print_code');
		$print_code->setAttribs(array(
				'class'=>'form-control',
		));
		$select_print_code = new Zend_Form_Element_Select('select_print_code');
		$select_print_code->setAttribs(array(
				'class'=>'form-control','onClick'=>'FuncRootMenuCode()'
		));
		$select_print_code_opt = array( ""=>$this->tr->translate("SELECT_PRINT_CODE"),-1=>$this->tr->translate("ADD_NEW"));
		$select_print_code->setMultiOptions($select_print_code_opt);
		
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
		$lang_3 = new Zend_Form_Element_Text('lang_3');
		$lang_3->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
// 			print_r($data);
		}
		$show_description = new Zend_Form_Element_Select('show_description');
		$show_description->setAttribs(array(
				'class'=>'form-control'
		));
		$description_opt = array( ""=>$this->tr->translate("SELECT_DESCRIPTION"),-1=>$this->tr->translate("ADD_NEW"));
		$show_description->setMultiOptions($description_opt);
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
				'class'=>'form-control','id'=>"demo3",'value'=>12,'placeholder'=>'0'
		));
		$apply = new Zend_Form_Element_Select('apply');
		$apply->setAttribs(array(
				'class'=>'form-control'
		));
		$apply_opt = array( ""=>$this->tr->translate("SELECT_APPLY_TO_COMPANY"),-1=>$this->tr->translate("ADD_NEW"));
		$apply->setMultiOptions($apply_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$print_to = new Zend_Form_Element_Checkbox('print_to');
		$print_to->setAttribs(array(
				'class'=>'red',
		));
		$show_screen = new Zend_Form_Element_Checkbox('show_screen');
		$show_screen->setAttribs(array(
				'class'=>'red',
		));
		$discount = new Zend_Form_Element_Checkbox('discount');
		$discount->setAttribs(array(
				'class'=>'red',
		));
		$time = new Zend_Form_Element_Checkbox('time');
		$time->setAttribs(array(
				'class'=>'red',
		));
		$require_qty = new Zend_Form_Element_Checkbox('require_qty');
		$require_qty->setAttribs(array(
				'class'=>'red',
		));
		$active = new Zend_Form_Element_Checkbox('active');
		$active->setAttribs(array(
				'class'=>'red',
		));
		$format = new Zend_Form_Element_Text('demo4');
		$format->setAttribs(array(
				'class'=>'form-control','id'=>"demo4",'value'=>12,'placeholder'=>'0'
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
		$select_apply = new Zend_Form_Element_Select('select_apply');
		$select_apply->setAttribs(array(
				'class'=>'form-control','onClick'=>'FuncApplyCompany()'
		));
		$select_apply_opt = array( ""=>$this->tr->translate("SELECT_APPLY_TO_COMPANY"),-1=>$this->tr->translate("ADD_NEW"));
		$select_apply->setMultiOptions($select_apply_opt);
		
		$this->addElements(array($select_apply,$require_qty,$root_code,$select_root_code,$select_menu,$item_code,$apply,$active,$combo,$menu_code,
				$description,$lang_1,$lang_2,$lang_3,$print_code,$select_print_code,$print_to,$show_screen,$time,$discount,
				$show_description,$background,$font_color,$font_size,$format,$setting,$arrange,$resize,$note));
		return $this;
		
	}	
}