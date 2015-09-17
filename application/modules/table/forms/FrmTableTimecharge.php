<?php 
Class table_Form_FrmTableTimecharge extends Zend_Dojo_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function frm_table_time_charge($data=null){
		$menu_code = new Zend_Form_Element_Text('menu_code');
		$menu_code->setAttribs(array(
				'class'=>'form-control',
		));
		$description = new Zend_Form_Element_Text('description');
		$description->setAttribs(array(
				'class'=>'form-control',
				'required'=>true,
		));
		$amount_to_charge = new Zend_Form_Element_Text('amount_to_charge');
		$amount_to_charge->setAttribs(array(
				'class'=>'form-control',
		));
		$free_amt = new Zend_Form_Element_Text('free_amt');
		$free_amt->setAttribs(array(
				'class'=>'form-control'
		));
		$child = new Zend_Form_Element_Text('child');
		$child->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$show_description = new Zend_Form_Element_Text('show_description');
		$show_description->setAttribs(array(
				'class'=>'form-control'
		));
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$font_color = new Zend_Form_Element_Text('font_color');
		$font_color->setAttribs(array(
				'class'=>'form-control','id'=>"selected-color1"
		));
		$interval_time= new Zend_Form_Element_Text('interval_time');
		$interval_time->setAttribs(array(
				'class'=>'form-control',
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
				'class'=>'form-control',
		));
		$execute_number = new Zend_Form_Element_Text('execute_number');
		$execute_number->setAttribs(array(
				'class'=>'form-control',
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
		$id=new Zend_Form_Element_Hidden('id');
	     if($data!=null){
// 			print_r($data);
	     	$id->setValue($data['id']);
			$description->setValue($data['description']);
			$interval_time->setValue($data['time_interval']);
			$execute_number->setValue($data['execute_amount']);
			$amount_to_charge->setValue($data['fee_charge']);
			$free_amt->setValue($data['free_amount']);
			$child->setValue($data['chil_per']);
			$active->setValue($data['nul_mul']);
		}
		$this->addElements(array($id,$apply,$active,$combo,$menu_code,$description,$amount_to_charge,$free_amt,$child,
				$show_description,$background,$font_color,$interval_time,$execute_number,$setting,$arrange,$resize,$note));
		return $this;
		
	}	
}