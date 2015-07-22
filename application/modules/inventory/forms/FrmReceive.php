<?php 
Class inventory_Form_FrmReceive extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmReceive($data=null){
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
		$document = new Zend_Form_Element_Button('3');
		$document->setAttribs(array(
				'class'=>'form-control',
		));
		$session = new Zend_Form_Element_Button('7');
		$session->setAttribs(array(
				'class'=>'form-control',
		));
		$item_code = new Zend_Form_Element_Select('item_code');
		$item_code->setAttribs(array(
				'class'=>'form-control'
		));
		$company_opt = array( "1"=>$this->tr->translate("SELECT_COMPANY"),
				"2"=>$this->tr->translate("SELECT_COMPANY_NAME"));
		$item_code->setMultiOptions($company_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		

				$ptd_usage_value = new Zend_Form_Element_Text('ptd_usage_value');
		$ptd_usage_value->setAttribs(array(
				'class'=>'form-control'
		));
		$qty_onhand = new Zend_Form_Element_Text('demo3');
		$qty_onhand->setAttribs(array(
				'class'=>'form-control',
				'id'=>'demo3'
		));
		$branch = new Zend_Form_Element_Select('branch');
		$branch->setAttribs(array(
				'class'=>'form-control'
		));
		$wherehouse_id_opt = array( "1"=>$this->tr->translate("..."),
				"2"=>$this->tr->translate("..."));
		$branch->setMultiOptions($wherehouse_id_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$blank_smaler = new Zend_Form_Element_Select('blank_smaler');
		$blank_smaler->setAttribs(array(
				'class'=>'form-control'
		));
		$company_opt = array( "1"=>$this->tr->translate("SELECT_COMPANY"),
				"2"=>$this->tr->translate("SELECT_COMPANY_NAME"));
		$blank_smaler->setMultiOptions($company_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$average_cost = new Zend_Form_Element_Text('average_cost');
		$average_cost->setAttribs(array(
				'class'=>'form-control'
		));
		$ptd_sale_value = new Zend_Form_Element_Text('ptd_sale_value');
		$ptd_sale_value->setAttribs(array(
				'class'=>'form-control'
		));
		$unit_cost = new Zend_Form_Element_Radio('unit_cost');
		$unit_cost->setAttribs(array(
				'class'=>'red'
		));
		$total_cost = new Zend_Form_Element_Radio('total_cost');
		$total_cost->setAttribs(array(
				'class'=>'red'
		));
		$serial = new Zend_Form_Element_Text('serial');
		$serial->setAttribs(array(
				'class'=>'form-control'
		));
		$lot = new Zend_Form_Element_Text('lot');
		$lot->setAttribs(array(
				'class'=>'form-control'
		));
		$add_lind = new Zend_Form_Element_Button('add_lind');
		$add_lind->setAttribs(array(
				'class'=>'form-control'
		));
		$edit_lind = new Zend_Form_Element_Button('edit_lind');
		$edit_lind->setAttribs(array(
				'class'=>'form-control'
		));
		$delete_lind = new Zend_Form_Element_Button('delete_lind');
		$delete_lind->setAttribs(array(
				'class'=>'form-control'
		));
		$concel_lind = new Zend_Form_Element_Button('concel_lind');
		$concel_lind->setAttribs(array(
				'class'=>'form-control'
		));
		$this->addElements(array($combo,$wherehouse_id,$handow,$item_code,$branch,
				$document,$session,$blank_smaler,$ptd_usage_value,$qty_onhand,$unit_cost,
				$total_cost,$serial,$lot,$add_lind,$edit_lind,$delete_lind,$concel_lind));
		return $this;
		
	}	
}