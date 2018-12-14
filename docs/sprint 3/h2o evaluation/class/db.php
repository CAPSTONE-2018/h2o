<?php
include_once ('config.php');

class Database{
	public $con;
	public function refreshConnection(){
		$this->con=mysqli_connect(DB_Host,DB_User,DB_Pass,DB_Name);
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error() . DB_User;
		}
	}
	public function __construct() {
		$this->con=mysqli_connect(DB_Host,DB_User,DB_Pass,DB_Name);
		// Check connection
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error() . DB_User;
		}
	}
	
	public function userExists($UNAME){
		$dbresult = $this->sp_get_user_byname($UNAME)['username'];
		$this->refreshConnection();
		if (isset($dbresult)){
			return true;
		}else{
			return false;
		}
	}
	
	//return table data as fetch array 
	public function SQL_GET($table, $field, $field_val){
		//sanitize
		$sql="SELECT * FROM " . $table . " WHERE " . $field . "='".$field_val."';";		
		$result = mysqli_query($this->con,$sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if($row==NULL){
			echo "ERROR";
		}
		$this->refreshConnection();
		return $row;
	}
	
	//execute a raw sql query
	public function SQL_EXEC($sql){
		$result = mysqli_query($this->con,$sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if($row==NULL){
			echo "ERROR";
		}
		$this->refreshConnection();
		return $row;
	}
	
	//create user proc
	public function sp_create_user($UNAME, $PASS, $ROLE, $FIRSTNAME, $LASTNAME){
		$UNAME = mysqli_real_escape_string($this->con, $UNAME);
		$PASS = hash('whirlpool', $PASS);
		$ROLE = mysqli_real_escape_string($this->con, $ROLE);
		$FIRSTNAME = mysqli_real_escape_string($this->con, $FIRSTNAME);
		$LASTNAME = mysqli_real_escape_string($this->con, $LASTNAME);
		$sql = "CALL morphling.sp_create_user('". $UNAME ."', '". $PASS ."','". $ROLE ."', '". $FIRSTNAME ."', '". $LASTNAME ."');";
		$result = mysqli_query($this->con, $sql);
		$rowset = $result->fetch_array(MYSQLI_ASSOC);
		$this->refreshConnection();
		return $rowset["EXIT_CODE"];
	}
	
	//get users
	public function sp_get_user_byname($UNAME){
		//Sanitize input
		$UNAME = mysqli_real_escape_string($this->con, $UNAME);
		$sql = "CALL morphling.sp_get_user_byname('". $UNAME ."');";
		$result = mysqli_query($this->con, $sql);
		$rowset = $result->fetch_array(MYSQLI_ASSOC);
		$this->refreshConnection();
		return $rowset;
		//to get field values out of: $rowset['field'];
	}
	
	//get all users for lists
	public function sp_get_all_users($ROLE){
		$local = array();
		if (!isset($ROLE)){
			$sql = "SELECT * FROM morphling.h2o_users;";
		}else{
			$sql = "SELECT * FROM morphling.h2o_users WHERE role = '". $ROLE ."';";
		}
		$result = mysqli_query($this->con, $sql);
		while($row = $result->fetch_assoc()){
			$row['fullname'] = $row['firstname'] . " " . $row['lastname'];
			array_push($local, $row); 
		}
		$this->refreshConnection();
		return $local;
	}
	
	public function sp_delete_user($UNAME){
		//$UNAME = mysqli_real_escape_string($this->con, $UNAME);
		$sql = "CALL morphling.sp_delete_user('". $UNAME ."');";
		$result = mysqli_query($this->con, $sql);
		$rowset = $result->fetch_array(MYSQLI_ASSOC);
		//$this->refreshConnection();
		return $rowset['EXIT_CODE'];
	}
	
	public function sp_update_survey($ID, $ANSWERS){
		$ID = mysqli_real_escape_string($this->con, $ID);
		$ANSWERS = mysqli_real_escape_string($this->con, $ANSWERS);
		$result = mysqli_query($this->con, "CALL morphling.sp_update_survey(" . $ID . ", '" . $ANSWERS .  "');");
		$rowset = $result->fetch_array(MYSQLI_ASSOC);
		$this->refreshConnection();
		return $rowset['EXIT_CODE'];
	}
	
	public function sp_get_survey($SURV_FOR, $SURV_TYPE){
		$SURV_FOR = mysqli_real_escape_string($this->con, $SURV_FOR);
		$SURV_TYPE = mysqli_real_escape_string($this->con, $SURV_TYPE);
		$sql = "CALL morphling.sp_get_survey('". $SURV_FOR ."', '" . $SURV_TYPE . "');";
		$result = mysqli_query($this->con, $sql);
		$rowset = $result->fetch_array(MYSQLI_ASSOC);
		$this->refreshConnection();
		return $rowset;
	}
	
	public function sp_survey_complete($SURV_FOR, $SURV_TYPE){
		$SURV_FOR = mysqli_real_escape_string($this->con, $SURV_FOR);
		$SURV_TYPE = mysqli_real_escape_string($this->con, $SURV_TYPE);
		$sql = "CALL morphling.sp_survey_complete('". $SURV_FOR ."', '" . $SURV_TYPE . "');";
		$result = mysqli_query($this->con, $sql);
		$rowset = $result->fetch_array(MYSQLI_ASSOC);
		$this->refreshConnection();
		return $rowset['RESULT'];
	}
	

	public function close(){
		mysqli_close($this->con);
	}
	
	function __destruct() {
		mysqli_close($this->con);
	}
	
}
?>