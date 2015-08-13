<?php 
Class Table_Form_FrmTables extends Zend_Dojo_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmTables($data=null){
		$table_code = new Zend_Form_Element_Text('table_code');
		$table_code->setAttribs(array(
				'class'=>'form-control',
				'required'=>true
		));
		$db=new Application_Model_DbTable_DbGlobal();
		$g_code = new Zend_Form_Element_Select('group_code');
		$g_code->setAttribs(array(
				'class'=>'form-control select2me',
				
		));
		$option=$db->getGroupCode();
		$g_code->setMultiOptions($option);
		$g_code1 = new Zend_Form_Element_Text('g_code1');
		$g_code1->setAttribs(array(
				'class'=>'form-control',
		));
		$est_time = new Zend_Form_Element_Text('est_time');
		$est_time->setAttribs(array(
				'class'=>'form-control clockface-open','id'=>'clockface_2',
		));
		$price = new Zend_Form_Element_Text('price');
		$price->setAttribs(array(
				'class'=>'spinner-input form-control',
		));
		$max_seat = new Zend_Form_Element_Text('max_seat');
		$max_seat->setAttribs(array(
				'class'=>'spinner-input form-control col-md-12',
				'id'=>'spinner3',
		));
		$time = new Zend_Form_Element_Text('time');
		$time->setAttribs(array(
				'class'=>'form-control',
		));
		$time->setValue('00:00');
		$description = new Zend_Form_Element_Text('description');
		$description->setAttribs(array(
				'class'=>'form-control',
				'required'=>true
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
		$db =new Application_Model_DbTable_DbGlobal();
		$description_opt = array( ""=>$this->tr->translate("SELECT_DESCRIPTION"));
		$show_description1 = new Zend_Form_Element_Select('show_description');
		$show_description1->setAttribs(array(
				'class'=>'form-control'
		));
		$opt = $db->getVewOptoinTypeByType(1,1,null ,1);
		$show_description1->setMultiOptions($opt);
		
		$type_of_table = new Zend_Form_Element_Select('type_of_table');
		$type_of_table->setAttribs(array(
				'class'=>'form-control select2me'
		));
		$opt_type_table=$db->getTypeOfTable();
		$type_of_table->setMultiOptions($opt_type_table);
		$apply_to_company = new Zend_Form_Element_Select('apply_to_company');
		$apply_to_company->setAttribs(array(
				'class'=>'form-control'
		));
		$opt=array('0'=>'select company', '1'=>'A','2'=>'B','3'=>'C');
		$apply_to_company->setMultiOptions($opt);
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$backgroun_color = new Zend_Form_Element_Text('backgroun_color');
		$backgroun_color->setAttribs(array(
				'class'=>'colorpicker-rgba form-control',
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
		$time_ck = new Zend_Form_Element_Checkbox('time_ck');
		$time_ck->setAttribs(array(
				'class'=>'red',
		));
		$dicount_ck = new Zend_Form_Element_Checkbox('dicount_ck');
		$dicount_ck->setAttribs(array(
				'class'=>'red',
		));
		$format = new Zend_Form_Element_Text('demo4');
		$format->setAttribs(array(
				'class'=>'form-control','id'=>"demo4",'value'=>12,'placeholder'=>'12'
		));
	    $font_color = new Zend_Form_Element_text('font_color');
		$font_color->setAttribs(array(
				'class'=>'colorpicker-default form-control'
		));
		$font_site = new Zend_Form_Element_text('font_size');
		$font_site->setAttribs(array(
				'class'=>' spinner-input form-control'
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
		$id=new Zend_Form_Element_Hidden('id');
		if ($data!=null){
			$id->setValue($data['id']);
			$table_code->setValue($data['code']);
			$description->setValue($data['description']);
			$lang_1->setValue($data['lang1']);
			$lang_2->setValue($data['lang2']);
			$g_code->setValue($data['tbl_groupid']);
			$type_of_table->setValue($data['BuildInPicID']);
			$show_description1->setValue($data['display_by']);
			$max_seat->setValue($data['max_sit']);
			$apply_to_company->setValue($data['compid']);
			$active->setValue($data['active']);
			$time_ck->setValue($data['time_charge_id']);
			$dicount_ck->setValue($data['is_discound']);
			$price->setValue($data['price']);
			$est_time->setValue($data['est_time']);
			$backgroun_color->setValue($data['backgroud_color']);
			$font_color->setValue($data['font_color']);
			$font_site->setValue($data['font_size']);
			$note->setValue($data['note']);
		}
		$this->addElements(array($id,$dicount_ck,$time_ck,$type_of_table,$est_time,$price,$max_seat,$time,$g_code,$apply,$active,$combo,$table_code,$description,$lang_1,$lang_2,$lang_3,
				$note1,$backgroun_color,$g_code1,$show_description1,$apply_to_company,$background,$font_color,$format,$font_color,$font_site,$resize,$note));
		return $this;
		
	}	
}