<?php 
Class inventory_Form_FrmItemSupplier extends Zend_Dojo_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmItem($data=null){
		$item_code = new Zend_Form_Element_Text('item_code');
		$item_code->setAttribs(array(
				'class'=>'form-control',
		));
		$on_order = new Zend_Form_Element_Text('on_order');
		$on_order->setAttribs(array(
				'class'=>'form-control',
		));
		$last_cost = new Zend_Form_Element_Text('last_cost');
		$last_cost->setAttribs(array(
				'class'=>'form-control',
		));
		$totale_re = new Zend_Form_Element_Text('totale_re');
		$totale_re->setAttribs(array(
				'class'=>'form-control',
		));
		$last_re = new Zend_Form_Element_Text('last_re');
		$last_re->setAttribs(array(
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
		$demo_time = new Zend_Form_Element_Text('demo_time');
		$demo_time->setAttribs(array(
				'class'=>'form-control','id'=>"demo3",'value'=>12,'placeholder'=>'0'
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
		$this->addElements(array($on_order,$last_cost,$totale_re,$last_re,$percending,$amount,$demo_time,$radio,$part_number,$supplier_id,$apply,$active,$combo,$item_code,$description,$lang_1,$lang_2,$lang_3,
				$show_description,$background,$font_color,$font_size,$format,$setting,$arrange,$resize,$note));
		return $this;
		
	}	
}