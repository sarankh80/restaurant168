<?php

class Table_Model_DbTable_DbTablesGroup extends Zend_Db_Table_Abstract
{
    protected $_name = 'rs_table_group';
    function addTableGroup($data){
    	$db = $this->getAdapter();
    	$upload = new Zend_File_Transfer();
    	$file = $upload->getFileInfo();
    	foreach ($file as $row){
    		$row_name = $row["name"];
    		$filenameitems = explode(".", $row_name);
    		$extension =  $filenameitems[count($filenameitems) - 1];
    		$photoname = str_replace(" ", "_", $data['group_code']) .'.'. $extension;
    	}
    	$upload->addFilter('Rename',
    			array('target' => PUBLIC_PATH . '/image/'. $photoname, 'overwrite' => true) ,'photo');
    	$receive = $upload->receive();
    	if($receive)
    	{
    		$data['photo'] = $photoname;
    	}
    	else{
    		$data['photo']="";
    	}
    	unset($data['MAX_FILE_SIZE']);
    	$arr = array(
    			'code'=>$data['group_code'],
    			'description'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
    			'img_name'=>$data["photo"],
    			'display_by'=>$data['show_description'],
    			'compid'=>$data['apply_to_company'],
    			'note'=>$data['note'],
    			'background_color'=>$data['backgroun_color'],
    			'font_color'=>$data['font_color'],
    			'font_size'=>$data['font_size'],
    			'status'=>$data['active'],
    			);
         $this->insert($arr);
     
    }
    function getTableGroupById($id){
    	$db = $this->getAdapter();
    	$sql=" SELECT id,CODE,description,lang1,lang2,display_by,compid,note,background_color,img_name,
    	       font_color,font_size,status  FROM $this->_name where id=$id ";
    	return $db->fetchRow($sql);
    }
    function updateTableGroup($data){
    	$db=$this->getAdapter();
    	$photo_name=str_replace(" ","_",$data['group_code']) . '.jpg';
    	$upload=new Zend_File_Transfer();
    	$upload->addFilter('Rename',
    			           array('target'=> PUBLIC_PATH .'/image/'.$photo_name,'overwrite'=>true),'photo');
    	$recieve=$upload->receive();
    	if($recieve){
    		$data['photo']=$photo_name;
    	}
    	else{
    		$sql="SELECT img_name FROM rs_table_group where id=".$data["id"];
    		$row=$db->fetchRow($sql);
    		foreach ($row as $rs){
    			$data['photo']=$rs;
    		}
    	}
    	unset($data['MAX_FILE_SIZE']);
    	$arr = array(
    			'code'=>$data['group_code'],
    			'description'=>$data['description'],
    			'lang1'=>$data['lang_1'],
    			'lang2'=>$data['lang_2'],
    			'img_name'=>$data['photo'],
    			'display_by'=>$data['show_description'],
    			'compid'=>$data['apply_to_company'],
    			'note'=>$data['note'],
    			'background_color'=>$data['backgroun_color'],
    			'font_color'=>$data['font_color'],
    			'font_size'=>$data['font_size'],
    			'status'=>$data['active'],
    			);
    	$where=" id = ".$data['id'];
    	$this->update($arr, $where);
    }
    function getAllRowTablGroup(){
    	$db = $this->getAdapter();
    	$sql="SELECT id,code,description,lang1,lang2,note,status FROM $this->_name";
    	$oderby=" ORDER BY id DESC";
    	return $db->fetchAll($sql.$oderby);
    }
    function geteAllid($search=null){
    	$db = $this->getAdapter();
    	$sql=" SELECT id,title_en,title_kh,date,status FROM $this->_name where id ORDER BY id DESC";
    	return $db->fetchAll($sql);
    	
    }
}

