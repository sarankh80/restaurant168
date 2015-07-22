<?php 
Class setting_Form_FrmPayment extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmPayment($data=null){
		$payment = new Zend_Form_Element_Text('payment');
		$payment->setAttribs(array(
				'class'=>'form-control',
		));
		
		$type = new Zend_Form_Element_Select('type');
		$type->setAttribs(array(
				'class'=>'form-control',
		));
		$type_opt = array( ""=>$this->tr->translate("CASH"));
		$type->setMultiOptions($type_opt);
		
		$des = new Zend_Form_Element_Text('des');
		$des->setAttribs(array(
				'class'=>'form-control',
		));
		
		$second_lang = new Zend_Form_Element_Text('second_lang');
		$second_lang->setAttribs(array(
				'class'=>'form-control',
		));
		
		$payment = new Zend_Form_Element_Text('payment');
		$payment->setAttribs(array(
				'class'=>'form-control',
		));
		
		$ap_payment = new Zend_Form_Element_Text('ap_payment');
		$ap_payment->setAttribs(array(
				'class'=>'form-control',
		));
		
		$this->addElements(array($payment,$type,$des,$second_lang,$payment,$ap_payment));
				
		return $this;
		
	}	
}