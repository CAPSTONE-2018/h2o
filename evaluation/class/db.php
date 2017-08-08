<?php
class Database
{
	private $host='localhost';
	public $con;
	public function __construct($dbname) 
	{
		$user='cs440_h2o';
		$pw='cs440_h2o';
		$this->con=mysqli_connect($this->host,$user,$pw,$dbname);
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
	public function close()
	{
		mysqli_close($this->con);
	}
	
	//add for username
	public function getData($table, $id)
	{
		$result = mysqli_query($this->con,"SELECT * FROM ".$table." WHERE id=".$id.";");
		return $result->fetch_assoc();
	}
	
	public function getData2($table, $id, $value)
	{
		$result = mysqli_query($this->con,"SELECT * FROM ".$table." WHERE id=".$id.";");
		$t=$result->fetch_assoc();
		return $t[$value];
	}
	
	public function getDataFromF($table, $id,$f)
	{
		$sql="SELECT * FROM ".$table ." WHERE ".$f."='".$id."'";
		
		$result = mysqli_query($this->con,$sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if($row==NULL)
		{
			echo "ERROR";
		}
		//echo "This is chris testing the databse side; the result of row is ".$row['userSurvey'];
		return $row;
	}
	
	public function getDataFromI($table, $id,$f)
	{
		$sql="SELECT * FROM ".$table ." WHERE ".$f."=".$id."";
		
		$result = mysqli_query($this->con,$sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if($row==NULL)
		{
			echo "ERROR";
		}
		return $row;
	}
	
	public function updateData($table,$id, $field, $value,$type)
	{
		$sql="UPDATE ".$table." SET ".$field."=".$value." Where id=".$id;
		mysqli_query($this->con,$sql);
	}
	
	function __destruct() 
	{
		mysqli_close($this->con);
   }
}
?>