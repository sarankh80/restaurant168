<?php 
Class setting_Form_FrmCostchange extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmCostchange($data=null){
		$receive = new Zend_Form_Element_Text('$receive');
		$receive->setAttribs(array(
				'class'=>'form-control',
		));
		$to = new Zend_Form_Element_Text('to');
		$to->setAttribs(array(
				'class'=>'form-control',
		));
		$item= new Zend_Form_Element_Text('item');
		$item->setAttribs(array(
				'class'=>'form-control',
		));
		$to1 = new Zend_Form_Element_Text('to1');
		$to1->setAttribs(array(
				'class'=>'form-control',
		));
		$location= new Zend_Form_Element_Text('location');
		$location->setAttribs(array(
				'class'=>'form-control',
		));
		$to2 = new Zend_Form_Element_Text('to2');
		$to2->setAttribs(array(
				'class'=>'form-control',
		));
		$supply= new Zend_Form_Element_Text('supply');
		$supply->setAttribs(array(
				'class'=>'form-control',
		));
		$to3 = new Zend_Form_Element_Text('to3');
		$to3->setAttribs(array(
				'class'=>'form-control',
		));
		$project= new Zend_Form_Element_Text('project');
		$project->setAttribs(array(
				'class'=>'form-control',
		));
		$to4 = new Zend_Form_Element_Text('to4');
		$to4->setAttribs(array(
				'class'=>'form-control',
		));
		
		
		$this->addElements(array($receive,$to,$item,$to1,$location,$to2,$supply,$to3,$project,$to4));
				
		return $this;
		
	}	
}