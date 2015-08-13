<?php 
Class table_Form_FrmTableGroup extends Zend_Dojo_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmTable($data=null){
		$menu_code = new Zend_Form_Element_Text('group_code');
		$menu_code->setAttribs(array(
				'class'=>'form-control',
				//'required'=>'true'
		));
		$description = new Zend_Form_Element_Text('description');
		$description->setAttribs(array(
				'class'=>'form-control',
		));
		$lang_1 = new Zend_Form_Element_Text('lang_1');
		$lang_1->setAttribs(array(
				'class'=>'form-control',
		));
		$font_color = new Zend_Form_Element_text('font_color');
		$font_color->setAttribs(array(
				'class'=>'colorpicker-default form-control'
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
		$db =new Application_Model_DbTable_DbGlobal();
		$show_description = new Zend_Form_Element_Select('show_description');
		$show_description->setAttribs(array(
				'class'=>'form-control',
				'required'=>'true',
		));
		$opt = $db->getVewOptoinTypeByType(1,1,null ,1);
		$show_description->setMultiOptions($opt);
		$apply_to = new Zend_Form_Element_Select('apply_to_company');
		$apply_to->setAttribs(array(
				'class'=>'form-control'
		));
		$otp=array('0'=>'apply to company','1'=>'A','2'=>'B','3'=>'C');
		$apply_to->setMultiOptions($otp);
		
		$photo = new Zend_Form_Element_File('photo');
		$backgroun_color = new Zend_Form_Element_Text('backgroun_color');
		$backgroun_color->setAttribs(array(
				'class'=>'colorpicker-rgba form-control',
		));
		$font_site = new Zend_Form_Element_text('font_size');
		$font_site->setAttribs(array(
				'class'=>' spinner-input form-control'
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
				'class'=>'checker',
			
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
		$location = new Zend_Form_Element_Textarea('location');
		$location->setAttribs(array(
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 100px;"
		));
		$photo = new Zend_Form_Element_File('photo');
	    $id=new Zend_Form_Element_Hidden('id');
		if($data != null){
		$dbs=	$id->setValue($data['id']);
			
			$menu_code->setValue($data['CODE']);
			$description->setValue($data['description']);
			$lang_1->setValue($data['lang1']);
			$lang_2->setValue($data['lang2']);
			$show_description->setValue($data['display_by']);
			$apply_to->setValue($data['compid']);
			$note->setValue($data['note']);
			$backgroun_color->setValue($data['background_color']);
			$font_color->setValue($data['font_color']);
			$font_site->setValue($data['font_size']);
			$active->setValue($data['status']);
			$id->setValue($data['id']);
		}
		$this->addElements(array($id,$photo,$location,$apply,$active,$combo,$menu_code,$description,$lang_1,$lang_2,$apply_to,
				$show_description,$backgroun_color,$font_color,$font_site,$format,$setting,$arrange,$resize,$note));
		return $this;
		
	}	
}