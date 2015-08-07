<?php

class Application_Model_DbTable_DbGlobal extends Zend_Db_Table_Abstract
{
	public function setName($name){
		$this->_name=$name;
	}
	public static function getUserId(){
		$session_user=new Zend_Session_Namespace('auth');
		return $session_user->user_id;
	
	}
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function getGlobalDb($sql)
  	{
  		$db=$this->getAdapter();
  		$row=$db->fetchAll($sql);  		
  		if(!$row) return NULL;
  		return $row;
  	}
  	public function getGlobalDbRow($sql)
  	{
  		$db=$this->getAdapter();  		
  		$row=$db->fetchRow($sql);
  		if(!$row) return NULL;
  		return $row;
  	}
  	public static function getActionAccess($action)
    {
    	$arr=explode('-', $action);
    	return $arr[0];    	
    }     
    public function isRecordExist($conditions,$tbl_name){
		$db=$this->getAdapter();		
		$sql="SELECT * FROM ".$tbl_name." WHERE ".$conditions." LIMIT 1"; 
		$row= count($db->fetchRow($sql));
		if(!$row) return NULL;
		return $row;	
    }
    /*for select 1 record by id of earch table by using params*/
    public function GetRecordByID($conditions,$tbl_name){
    	$db=$this->getAdapter();
    	$sql="SELECT * FROM ".$tbl_name." WHERE ".$conditions." LIMIT 1";
    	$row = $this->fetchRow($sql);
    	return $row;
    	$row= $db->fetchRow($sql);
    	return $row;
    }
    /**
     * insert record to table $tbl_name
     * @param array $data
     * @param string $tbl_name
     */
    public function addRecord($data,$tbl_name){
    	$this->setName($tbl_name);
    	$row= $this->insert($data);
    }
    public function updateRecord($data,$id,$tbl_name){
    	$this->setName($tbl_name);
    	$where=$this->getAdapter()->quoteInto('id=?',$id);
    	$this->update($data,$where);    	
    }   
    public function DeleteRecord($tbl_name,$id){
    	$db = $this->getAdapter();
		$sql = "UPDATE ".$tbl_name." SET status=0 WHERE id=".$id;
		return $db->query($sql);
    } 
     public function DeleteData($tbl_name,$where){
    	$db = $this->getAdapter();
		$sql = "DELETE FROM ".$tbl_name.$where;
		return $db->query($sql);
    } 
    public function getDayInkhmerBystr($str){
    	
    	$rs=array(
    			'Mon'=>'ច័ន្ទ',
    			'Tue'=>'អង្គារ',
    			'Wed'=>'ពុធ',
    			'Thu'=>"ព្រហ",
    			'Fri'=>"សុក្រ",
    			'Sat'=>"សៅរី",
    			'Sun'=>"អាទិត្យ");
    	if($str==null){
    		return $rs;
    	}else{
    	return $rs[$str];
    	}
    
    }
    public function  getGroupCode(){
    	$db=$this->getAdapter();
    	$sql="SELECT id, code,description FROM rs_table_group ORDER BY id DESC";
    	$rows= $db->fetchAll($sql);
    	$options=array();
    	if(!empty($rows))foreach($rows AS $row){
    		$options[$row['id']]=$row['code']."-".$row['description'];//($row['displayby']==1)?$row['name_kh']:$row['name_en'];
    	}
        return $options;
    }
    public function getTypeOfTable(){
    	$db=$this->getAdapter();
    	$sql="SELECT id,code ,description FROM rs_table_type ORDER BY id DESC";
    	$row=$db->fetchAll($sql);
    	$option=array();
    	if(!empty($row))
    		foreach ($row As $rows){ 
    		$option[$rows['id']]=$rows['code']."-".$rows['description'];
    	}
    	return $option;
    }
    public function getVewOptoinTypeByType($type=null,$option = null,$limit =null,$first_option =null){
    	$db = $this->getAdapter();
    	$sql="SELECT id,key_code,CONCAT(name_kh,'-',name_en) AS name_en ,displayby FROM `ln_view` WHERE status =1 ";//just concate
    	if($type!=null){
    		$sql.=" AND type = $type ";
    	}
    	if($limit!=null){
    		$sql.=" LIMIT $limit ";
    	}
    	$rows = $db->fetchAll($sql);
    	if($option!=null){
    		$options=array();
    		if($first_option==null){//if don't want to get first select
    			$options=array(''=>"-----ជ្រើសរើស-----",-1=>"Add New",);
    		}
    		if(!empty($rows))foreach($rows AS $row){
    			$options[$row['key_code']]=$row['name_en'];//($row['displayby']==1)?$row['name_kh']:$row['name_en'];
    		}
    		return $options;
    	}else{
    		return $rows;
    	}
    }
   
}
?>