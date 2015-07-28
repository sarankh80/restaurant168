<?php 
Class inventory_Form_FrmTransferItems extends Zend_Dojo_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function frm_transfer_items($data=null){
		$item_code = new Zend_Form_Element_Text('item_code');
		$item_code->setAttribs(array(
				'class'=>'form-control',
		));
		$unit_cost = new Zend_Form_Element_Text('unit_cost');
		$unit_cost->setAttribs(array(
				'class'=>'form-control',
		));
		$qty = new Zend_Form_Element_Text('demo3');
		$qty->setAttribs(array(
				'class'=>'form-control',
		));
		$unit_id = new Zend_Form_Element_Text('unit_id');
		$unit_id->setAttribs(array(
				'class'=>'form-control',
		));
		$serial = new Zend_Form_Element_Text('serial');
		$serial->setAttribs(array(
				'class'=>'form-control',
		));
		$percending = new Zend_Form_Element_Text('percending');
		$percending->setAttribs(array(
				'class'=>'form-control',
		));
		$amount = new Zend_Form_Element_Text('amount');
		$amount->setAttribs(array(
				'class'=>'form-control',
		));
		$supplier_id = new Zend_Form_Element_Text('supplier_id ');
		$supplier_id->setAttribs(array(
				'class'=>'form-control',
		));
		$part_number = new Zend_Form_Element_Text('part_number ');
		$part_number->setAttribs(array(
				'class'=>'form-control',
		));
		$radio = new Zend_Form_Element_Radio('radio');
		$radio->setAttribs(array(
				'class'=>'form-control',
				'style'=>"position: absolute; top: -10%; left: -10%; display: block; width: 120%; 
				height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"
		));
		$from_location = new Zend_Form_Element_Text('from_location');
		$from_location->setAttribs(array(
				'class'=>'form-control',
				'readOnly'=>true,
		));
		$from_locationl = new Zend_Form_Element_Text('from_locationl');
		$from_locationl->setAttribs(array(
				'class'=>'form-control',
		));
		$lbl_project = new Zend_Form_Element_Text('lbl_project');
		$lbl_project->setAttribs(array(
				'class'=>'form-control',
		));
		$to_location = new Zend_Form_Element_Text('to_location');
		$to_location->setAttribs(array(
				'class'=>'form-control',
		));
		$to_locations = new Zend_Form_Element_Text('to_locations');
		$to_locations->setAttribs(array(
				'class'=>'form-control',
		));
		$lbl_sessiont = new Zend_Form_Element_Text('lbl_sessiont');
		$lbl_sessiont->setAttribs(array(
				'class'=>'form-control',
		));
		$lang_1 = new Zend_Form_Element_Text('lang_1');
		$lang_1->setAttribs(array(
				'class'=>'form-control',
		));
		$avaiable = new Zend_Form_Element_Text('avaiable');
		$avaiable->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$avaiables = new Zend_Form_Element_Text('avaiables');
		$avaiables->setAttribs(array(
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
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$font_color = new Zend_Form_Element_Text('font_color');
		$font_color->setAttribs(array(
				'class'=>'form-control','id'=>"selected-color1"
		));
		$item_code = new Zend_Form_Element_Text('item_code');
		$item_code->setAttribs(array(
				'class'=>'form-control','value'=>12,'placeholder'=>'0'
		));
		$teme_codes = new Zend_Form_Element_Text('teme_codes');
		$teme_codes->setAttribs(array(
				'class'=>'form-control','value'=>12,'placeholder'=>'12'
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
		$allocation = new Zend_Form_Element_Text('allocation');
		$allocation->setAttribs(array(

				'class'=>'form-control'
		));
		$bar_code = new Zend_Form_Element_Text('bar_code');
		$bar_code->setAttribs(array(
				'class'=>'form-control'
		));
		$on_han = new Zend_Form_Element_Text('on_hand');
		$on_han->setAttribs(array(
				'class'=>'form-control'
		));
		$tot_not = new Zend_Form_Element_Text('lot_no');
		$tot_not->setAttribs(array(
				'class'=>'form-control'
		));		
		$wo = new Zend_Form_Element_Text('wo');
		$wo->setAttribs(array(
				'class'=>'form-control','id'=>"resize",'value'=>12,'placeholder'=>'12'
		));
		$note = new Zend_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 100px;"
		));
		$this->addElements(array($avaiables,$from_location,$unit_cost,$serial,$unit_id,$tot_not,$percending,$amount,$item_code,$radio,$part_number,$supplier_id,$apply,$allocation,$combo,$item_code,$lang_1,$avaiable,$lang_3,
			$teme_codes,$lbl_sessiont,$to_locations,$to_location,$lbl_project,$from_locationl,$show_description,$background,$font_color,$bar_code,$qty,$on_han,$wo,$note));
		return $this;
		
	}	
}