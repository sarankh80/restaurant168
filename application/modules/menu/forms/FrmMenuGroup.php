<?php 
Class Menu_Form_FrmMenuGroup extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmMenu($data=null){
		$combo_code = new Zend_Form_Element_Text('combo_code');
		$combo_code->setAttribs(array(
				'class'=>'form-control',
				'onkeyup'=>'displayPhoto()'
		));
		$description = new Zend_Form_Element_Text('description');
		$description->setAttribs(array(
				'class'=>'form-control',
				'onchange'=>'displayPhoto()'
		));
		$lang_1 = new Zend_Form_Element_Text('lang_1');
		$lang_1->setAttribs(array(
				'class'=>'form-control',
				'onchange'=>'displayPhoto()'
		));
		$lang_2 = new Zend_Form_Element_Text('lang_2');
		$lang_2->setAttribs(array(
				'checked'=>'checked',
				'class'=>'form-control',
				'onchange'=>'displayPhoto()'
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
				'class'=>'form-control',
				'required'=>'true',
				'onchange'=>'displayPhoto()'
		));
		$opt = $db->getVewOptoinTypeByType(1,1,null,1);
		$show_description->setMultiOptions($opt);
		//$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_select('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$otp=array('0'=>'apply to company','1'=>'A','2'=>'B','3'=>'C');
		$background->setMultiOptions($otp);
		$font_color = new Zend_Form_Element_Text('font_color');
		$font_color->setAttribs(array(
				'class'=>'form-control','id'=>"selected-color1"
		));
		$font_size = new Zend_Form_Element_Text('demo3');
		$font_size->setAttribs(array(
				'class'=>'form-control','id'=>"demo3",'value'=>12,'placeholder'=>'12'
		));
		$apply_to_company = new Zend_Form_Element_Select('apply_to_company');
		$apply_to_company->setAttribs(array(
				'class'=>'form-control'
		));
		$apply_opt = array( ""=>$this->tr->translate("SELECT_APPLY_TO_COMPANY"));
		$apply_to_company->setMultiOptions($apply_opt);
		
		$combo_item = new Zend_Form_Element_Checkbox('combo_item');
		$combo_item->setAttribs(array(
				'class'=>'red',
		));
		$active = new Zend_Form_Element_Checkbox('active');
		$active->setAttribs(array(
				'class'=>'red',
				'checked'=>'checked',
		));
		$user_activate = new Zend_Form_Element_Checkbox('user_activate');
		$user_activate->setAttribs(array(
				'class'=>'red',
				'onclick'=>'setDefaulTime()'
				
		));
		$note = new Zend_Form_Element_Textarea('note');
		$note->setAttribs(array(
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
		$backgroun_color = new Zend_Form_Element_Text('backgroun_color');
		$backgroun_color->setAttribs(array(
				'class'=>'colorpicker-rgba form-control',
				'onclick'=>'displayPhoto()',
		));
		$font_site = new Zend_Form_Element_text('font_size');
		$font_site->setAttribs(array(
				'class'=>' spinner-input form-control',
				'onkeyup'=>'displayPhoto()',
				'onclick'=>'displayPhoto()'
		));
		$font_site->setValue(18);
		$apply = new Zend_Form_Element_Select('apply');
		$apply->setAttribs(array(
				'class'=>'form-control'
		));
		$font_color = new Zend_Form_Element_text('font_color');
		$font_color->setAttribs(array(
				'class'=>'colorpicker-default form-control',
				'onclick'=>'displayPhoto()',
		));
		$note = new Zend_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 100px;"
		));
		$from_time = new Zend_Form_Element_Text('from_time');
		$from_time->setAttribs(array(
				'class'=>'form-control clockface-open','id'=>'clockface_2',
		));
		$to_time = new Zend_Form_Element_Text('to_time');
		$to_time->setAttribs(array(
				'class'=>'form-control clockface-open','id'=>'clockface_2',
		));
		
		$id = new Zend_Form_Element_Hidden('id');
		if(!empty($data)){
		    $id->setValue($data['id']);
			$combo_code->setValue($data['menu_code']);
			$description->setValue($data['desc']);
			$lang_1->setValue($data['lang1']);
			$lang_2->setValue($data['lang2']);
			$show_description->setValue($data['display_by']);
			$backgroun_color->setValue($data['background_color']);
			$font_color->setValue($data['font_color']);
			$font_site->setValue($data['font_size']);
			$from_time->setValue($data['date']);
			$note->setValue($data['note']);
			$active->setValue($data['status']);
			$combo_item->setValue($data['is_combo']);
			$apply_to_company->setValue($data['apply_company']);
		}
		$this->addElements(array($apply,$active,$description,$lang_1,$lang_2,$lang_3,
				$show_description,$background,$font_color,$font_size,$note,$combo_code,
				$combo_item,$id,$note,$backgroun_color,$font_site,$font_color,$apply_to_company,
				$user_activate,$from_time,$to_time));
		return $this;
		
	}	
}