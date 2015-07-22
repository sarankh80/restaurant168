<?php 
Class setting_Form_FrmChangekey extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmChangekey($data=null){
		$changeby = new Zend_Form_Element_Select('changeby ');
	    $changeby ->setAttribs(array(
				'class'=>'form-control',
		));
	    $changeby_opt = array( ""=>$this->tr->translate("Item Master"));
	    $changeby->setMultiOptions($changeby_opt);
	    
	    $oldcode = new Zend_Form_Element_Text('oldcode ');
	    $oldcode ->setAttribs(array(
	    		'class'=>'form-control',
	    ));
	    
	    $newcode = new Zend_Form_Element_Text('newcode');
	    $newcode ->setAttribs(array(
	    		'class'=>'form-control',
	    ));
		
		
		$this->addElements(array($changeby,$oldcode,$newcode));
				
		return $this;
		
	}	
}