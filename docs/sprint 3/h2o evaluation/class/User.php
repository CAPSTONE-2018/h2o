<?php
include_once 'class//db.php';
include_once 'class//Survey.php';
include 'class//Draw.php';
include_once 'class//config.php';

class User{
	public $id;
	public $username;
	public $passwd;
	public $role;
	public $self_survey_id;
	public $admin_survey_id;
	
	public function __construct($userName) {
		//try to lookup our user in db
		
		
		if ($userName != NULL){
			$db = new Database(DB_Name);
			$dataRow = $db->SQL_GET(DB_Users_Table, 'username', $userName);
			$this->id = $dataRow['id'];
			$this->username = $dataRow['username'];
			$this->passwd = $dataRow['passwd'];
			$this->role = $dataRow['role'];
			$this->self_survey_id = $dataRow['self_survey_id'];
			$this->admin_survey_id = $dataRow['admin_survey_id'];
			$db->close();
		}else{
			$this->id = -1;
			$this->username = 'EMPTY USER';
			$this->passwd = '';
			$this->role = '';
			$this->self_survey_id = -1;
			$this->admin_survey_id = -1;
		}
	}
	/*
	
	public static function delete($id)
	{
		$db=new Database("cs440_h20");
		mysqli_query($db->con, sprintf("DELETE from h2o_users where id=%s", $id));
	}

	
	redo this
	public function save()
	{
		$db=new Database("cs440_h2o");
		
		//todo update for the two survey
		$db->updateData("h2o_users",$this->ID, "userSurvey", $this->selfSurvey,'i');
		$db->updateData("h2o_users",$this->ID, "adminSurvey", $this->adminSurvey,'i');
		$db->close();
	}
	*/
	public function draw($fileName)
	{ 
		$cats = array("COMMUNICATIONS","COOPERATION","COST CONSCIOUSNESS","DEPENDABILITY","INITIATIVE","JOB KNOWLEDGE","JUDGMENT","PLANNING & ORGANIZATION"
		,"PROBLEM SOLVING","QUALITY","QUANTITY","USE OF TECHNOLOGY");
		
		if($this->self_survey_id>0)
		{
			$ss= new Survey($this->self_survey_id);
			$sR=$ss->getCategoryRanks();
			foreach ($sR as $s)
			{
				//add code here i guess
			}
		}
		
		if($this->admin_survey_id>0)
		{
			$sa= new Survey($this->admin_survey_id);
			$aR=$sa->getCategoryRanks();
		}
		if($this->self_survey_id<0)
		{
			$sR=$aR;
		}
		
		if($this->admin_survey_id<0)
		{
			$aR=$sR;
		}
		Draw::createImage($fileName,$sR,$aR,$cats);
		return $fileName.".png";
		
	}
}
?>