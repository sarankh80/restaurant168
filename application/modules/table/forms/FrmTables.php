<?php 
Class table_Form_FrmTables extends Zend_Dojo_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmTables($data=null){
		$menu_code = new Zend_Form_Element_Text('menu_code');
		$menu_code->setAttribs(array(
				'class'=>'form-control',
				'required'=>true
		));
		$g_code = new Zend_Form_Element_Text('g_code');
		$g_code->setAttribs(array(
				'class'=>'form-control',
				'required'=>true
		));
		$g_code1 = new Zend_Form_Element_Text('g_code1');
		$g_code1->setAttribs(array(
				'class'=>'form-control',
		));
		$time = new Zend_Form_Element_Text('time');
		$time->setAttribs(array(
				'class'=>'form-control',
		));
		$time->setValue('00:00');
		$description = new Zend_Form_Element_Text('description');
		$description->setAttribs(array(
				'class'=>'form-control',
				'required'=>true ,
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
		$description_opt = array( ""=>$this->tr->translate("SELECT_DESCRIPTION"));
		$show_description->setMultiOptions($description_opt);
		$show_description1 = new Zend_Form_Element_Select('show_description1');
		$show_description1->setAttribs(array(
				'class'=>'form-control'
		));
		$show_description1->setMultiOptions($description_opt);
		$show_description2 = new Zend_Form_Element_Select('show_description2');
		$show_description2->setAttribs(array(
				'class'=>'form-control'
		));
		$show_description2->setMultiOptions($description_opt);
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
		$font_size1 = new Zend_Form_Element_Text('demo4');
		$font_size1->setAttribs(array(
				'class'=>'form-control','id'=>"demo4",'value'=>12,'placeholder'=>'0'
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
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 150px;"
		));
		$note1 = new Zend_Form_Element_Textarea('note1');
		$note1->setAttribs(array(
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 150px;"
		));
		$this->addElements(array($time,$g_code,$apply,$active,$combo,$menu_code,$description,$lang_1,$lang_2,$lang_3,
				$note1,$font_size1,$g_code1,$show_description1,$show_description2,$show_description,$background,$font_color,$font_size,$format,$setting,$arrange,$resize,$note));
		return $this;
		
	}	
}