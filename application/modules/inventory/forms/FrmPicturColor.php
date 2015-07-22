<?php 
Class inventory_Form_FrmPicturColor extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmPicturColor($data=null){
		$color_discription = new Zend_Form_Element_Text('color_discription');
		$color_discription->setAttribs(array(
				'class'=>'form-control',
		));
		$item_size = new Zend_Form_Element_Text('item_size');
		$item_size->setAttribs(array(
				'class'=>'form-control',
		));
		$item_weight = new Zend_Form_Element_Text('item_weight');
		$item_weight->setAttribs(array(
				'class'=>'form-control',
		));
		$item_volume = new Zend_Form_Element_Text('item_volume');
		$item_volume->setAttribs(array(
				'class'=>'form-control',
		));
		$itme_width = new Zend_Form_Element_Text('itme_width');
		$itme_width->setAttribs(array(
				'class'=>'form-control',
		));
		
		$itme_height = new Zend_Form_Element_Text('itme_height');
		$itme_height->setAttribs(array(
				'class'=>'form-control',
		));
		$itme_length = new Zend_Form_Element_Text('itme_length');
		$itme_length->setAttribs(array(
				'class'=>'form-control',
		));
		$item_color = new Zend_Form_Element_Text('item_color');
		$item_color->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$font_color = new Zend_Form_Element_Text('font_color');
		$font_color->setAttribs(array(
				'class'=>'form-control','id'=>"selected-color1"
		));
		$dual_image = new Zend_Form_Element_Textarea('dual_image');
		$dual_image->setAttribs(array(
				'class'=>'form-control',
		));
		$this->addElements(array($color_discription,$item_size,$item_weight,$item_volume,$itme_width,$itme_height,
				$itme_length,$item_color,$dual_image));
		return $this;
		
	}	
}