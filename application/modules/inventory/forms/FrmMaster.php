<?php 
Class inventory_Form_FrmMaster extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmMater($data=null){
		$item_code = new Zend_Form_Element_Text('item_code');
		$item_code->setAttribs(array(
				'class'=>'form-control',
		));
		$qty_onhand = new Zend_Form_Element_Text('qty_onhand');
		$qty_onhand->setAttribs(array(
				'class'=>'form-control',
		));
		$qty_handow = new Zend_Form_Element_Text('qty_handow');
		$qty_handow->setAttribs(array(
				'class'=>'form-control',
		));
		$discription = new Zend_Form_Element_Text('discription');
		$discription->setAttribs(array(
				'class'=>'form-control',
		));
		$last_cost = new Zend_Form_Element_Text('last_cost');
		$last_cost->setAttribs(array(
				'class'=>'form-control',
		));
// 		$company = new Zend_Form_Element_Text('company');
// 		$company->setAttribs(array(
// 				'checked'=>'checked','class'=>'form-control'
// 		));
		$company = new Zend_Form_Element_Select('company');
		$company->setAttribs(array(
				'class'=>'form-control'
		));
		$company_opt = array( "1"=>$this->tr->translate("SELECT_COMPANY"),
				"2"=>$this->tr->translate("SELECT_COMPANY_NAME"));
		$company->setMultiOptions($company_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$corent_brand = new Zend_Form_Element_Text('corent_brand');
		$corent_brand->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$secont_language = new Zend_Form_Element_Text('secont_language');
		$secont_language->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
		}
		$selling_prict = new Zend_Form_Element_Text('selling_prict');
		$selling_prict->setAttribs(array(
				'class'=>'form-control'
		));
		$allowcate = new Zend_Form_Element_Text('allowcate');
		$allowcate->setAttribs(array(
				'class'=>'form-control'
		));
		$allow_so = new Zend_Form_Element_Text('allow_so');
		$allow_so->setAttribs(array(
				'class'=>'form-control'
		));
		$qty_available= new Zend_Form_Element_Text('qty_available');
		$qty_available->setAttribs(array(
				'class'=>'form-control'
		));
		$on_order = new Zend_Form_Element_Text('on_order');
		$on_order->setAttribs(array(
				'class'=>'form-control'
		));
		$null = new Zend_Form_Element_Text('null');
		$null->setAttribs(array(
				'class'=>'form-control'
		));
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control'
		));
		$background1 = new Zend_Form_Element_Text('background1');
		$background1->setAttribs(array(
				'class'=>'form-control'
		));
		$product_id = new Zend_Form_Element_Select('product_id');
		$product_id->setAttribs(array(
				'class'=>'form-control'
		));
		$product_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$product_id->setMultiOptions($product_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$suppleir = new Zend_Form_Element_Select('suppleir');
		$suppleir->setAttribs(array(
				'class'=>'form-control'
		));
		$suppleir_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$suppleir->setMultiOptions($suppleir_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$background2 = new Zend_Form_Element_Text('background2');
		$background2->setAttribs(array(
				'class'=>'form-control'
		));
		$background3 = new Zend_Form_Element_Text('background3');
		$background3->setAttribs(array(
				'class'=>'form-control'
		));
		$category_id = new Zend_Form_Element_Select('category_id');
		$category_id->setAttribs(array(
				'class'=>'form-control'
		));
		$category_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$category_id->setMultiOptions($category_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$menufuctor_id = new Zend_Form_Element_Select('menufuctor_id');
		$menufuctor_id->setAttribs(array(
				'class'=>'form-control'
		));
		$menufuctor_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$menufuctor_id->setMultiOptions($menufuctor_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$background4 = new Zend_Form_Element_Text('background4');
		$background4->setAttribs(array(
				'class'=>'form-control'
		));
		$background5 = new Zend_Form_Element_Text('background5');
		$background5->setAttribs(array(
				'class'=>'form-control'
		));
		$unit_id= new Zend_Form_Element_Select('unit_id');
		$unit_id->setAttribs(array(
				'class'=>'form-control'
		));
		$unit_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$unit_id->setMultiOptions($unit_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$stoke_id = new Zend_Form_Element_Select('stoke_id');
		$stoke_id->setAttribs(array(
				'class'=>'form-control'
		));
		$stoke_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$stoke_id->setMultiOptions($stoke_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$small_factor = new Zend_Form_Element_Text('small_factor');
		$small_factor->setAttribs(array(
				'class'=>'form-control'
		));
		$background6 = new Zend_Form_Element_Text('background6');
		$background6->setAttribs(array(
				'class'=>'form-control'
		));
		$sall_id = new Zend_Form_Element_Select('sall_id');
		$sall_id->setAttribs(array(
				'class'=>'form-control'
		));
		$sall_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$sall_id->setMultiOptions($sall_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$background7 = new Zend_Form_Element_Text('background7');
		$background7->setAttribs(array(
				'class'=>'form-control'
		));
		$barcode = new Zend_Form_Element_Text('barcode');
		$barcode->setAttribs(array(
				'class'=>'form-control'
		));
		$usp_code = new Zend_Form_Element_Text('usp_code');
		$usp_code->setAttribs(array(
				'class'=>'form-control'
		));
		$selling_prict = new Zend_Form_Element_Text('selling_prict');
		$selling_prict->setAttribs(array(
				'class'=>'form-control'
		));
		$dealer_prict = new Zend_Form_Element_Text('dealer_prict');
		$dealer_prict->setAttribs(array(
				'class'=>'form-control'
		));
		$item_class = new Zend_Form_Element_Text('item_class');
		$item_class->setAttribs(array(
				'class'=>'form-control'
		));
		$miss_code = new Zend_Form_Element_Text('miss_code');
		$miss_code->setAttribs(array(
				'class'=>'form-control'
		));
		$comm_code = new Zend_Form_Element_Text('comm_code');
		$comm_code->setAttribs(array(
				'class'=>'form-control'
		));
		$groupe_count = new Zend_Form_Element_Text('groupe_count');
		$groupe_count->setAttribs(array(
				'class'=>'form-control'
		));
		$item_type = new Zend_Form_Element_Text('item_type');
		$item_type->setAttribs(array(
				'class'=>'form-control'
		));
		$this->addElements(array($combo,$item_code,$qty_onhand,$discription,$last_cost,$qty_handow,$company,$corent_brand,
				$secont_language,$selling_prict,$allowcate,$allow_so,$qty_available,$on_order,$null,$background,$product_id
				,$suppleir,$background1,$background2,$background3,$category_id,$menufuctor_id,$background4,$background5,$unit_id,
				$stoke_id,$small_factor,$background6,$sall_id,$background7,$barcode,$usp_code,$selling_prict,$miss_code,
				$dealer_prict,$item_class,$comm_code,$groupe_count,$item_type));
		return $this;
		
	}
	public function PicturColor($data=null){
		$color_description = new Zend_Form_Element_Text('color_description');
		$color_description->setAttribs(array(
				'class'=>'form-control'
		));
		$itme_size = new Zend_Form_Element_Text('item_size');
		$itme_size->setAttribs(array(
				'class'=>'form-control'
		));
		$item_weight = new Zend_Form_Element_Text('item_weight');
		$item_weight->setAttribs(array(
				'class'=>'form-control'
		));
		$item_valume = new Zend_Form_Element_Text('item_valume');
		$item_valume->setAttribs(array(
				'class'=>'form-control'
		));
		$item_width = new Zend_Form_Element_Text('item_width');
		$item_width->setAttribs(array(
				'class'=>'form-control'
		));
		$item_height = new Zend_Form_Element_Text('item_height');
		$item_height->setAttribs(array(
				'class'=>'form-control'
		));
		$item_length = new Zend_Form_Element_Text('item_length');
		$item_length->setAttribs(array(
				'class'=>'form-control'
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
		$this->addElements(array($color_description,$itme_size,$item_weight,$item_valume,$item_width,
				$item_height,$item_length,$item_color,$font_color,$dual_image));
		return $this;
	}

}