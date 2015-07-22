<?php 
Class inventory_Form_FrmColor extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmColor($data=null){
		$item_code = new Zend_Form_Element_Select('item_code');
		$item_code->setAttribs(array(
				'class'=>'form-control'
		));
		$item_code_opt = array( "1"=>$this->tr->translate("..."),
				"2"=>$this->tr->translate("..."));
		$item_code->setMultiOptions($item_code_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$qty_handow = new Zend_Form_Element_Text('qty_handow');
		$qty_handow->setAttribs(array(
				'class'=>'form-control',
		));
		$wherehouse_id = new Zend_Form_Element_Select('wherehouse_id');
		$wherehouse_id->setAttribs(array(
				'class'=>'form-control'
		));
		$wherehouse_id_opt = array( "1"=>$this->tr->translate("..."),
				"2"=>$this->tr->translate("..."));
		$wherehouse_id->setMultiOptions($wherehouse_id_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$handow = new Zend_Form_Element_Text('handow');
		$handow->setAttribs(array(
				'class'=>'form-control',
		));
		
		
		


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
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control'
		));
		$stock_unit_id = new Zend_Form_Element_Select('stock_unit_id');
		$stock_unit_id->setAttribs(array(
				'class'=>'form-control'
		));
		$stock_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$stock_unit_id->setMultiOptions($stock_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$background1 = new Zend_Form_Element_Text('background1');
		$background1->setAttribs(array(
				'class'=>'form-control'
		));
		$puchase_id = new Zend_Form_Element_Select('puchase_id');
		$puchase_id->setAttribs(array(
				'class'=>'form-control'
		));
		$puchase_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$puchase_id->setMultiOptions($puchase_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$background2 = new Zend_Form_Element_Text('background2');
		$background2->setAttribs(array(
				'class'=>'form-control'
		));
		$part_number = new Zend_Form_Element_Text('part_number');
		$part_number->setAttribs(array(
				'class'=>'form-control'
		));
		$sale_id = new Zend_Form_Element_Select('sale_id');
		$sale_id->setAttribs(array(
				'class'=>'form-control'
		));
		$puchase_opt = array( "1"=>$this->tr->translate(""),
				"2"=>$this->tr->translate(""));
		$sale_id->setMultiOptions($puchase_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$background3 = new Zend_Form_Element_Text('background3');
		$background3->setAttribs(array(
				'class'=>'form-control'
		));
		$load_time = new Zend_Form_Element_Text('demo3');
		$load_time->setAttribs(array(
				'class'=>'form-control',
				'id'=>'demo3'
		));
		
		$order_poin = new Zend_Form_Element_Text('demo3');
		$order_poin->setAttribs(array(
				'class'=>'form-control',
				'id'=>'demo3'
		));
		
		$order_qty = new Zend_Form_Element_Text('demo3');
		$order_qty->setAttribs(array(
				'class'=>'form-control',
				'id'=>'demo3'
		));
		$order_qty2 = new Zend_Form_Element_Text('demo3');
		$order_qty2->setAttribs(array(
				'class'=>'form-control',
				'id'=>'demo3'
		));
		$this->addElements(array($combo,$item_code,$qty_handow,$wherehouse_id,$handow,$company,$corent_brand,
				$secont_language,$allowcate,$allow_so,$qty_available,$background,$product_id,$stock_unit_id
				,$background1,$puchase_id,$background2,$sale_id,$background3,$load_time,$order_poin,$order_qty,
				$order_qty2,$part_number));
		return $this;
		
	}	
}