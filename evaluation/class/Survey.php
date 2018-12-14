<?php
include_once  'class//db.php';
include_once 'class//config.php';

class Survey
{
	public $id;
	public $date_taken;
	public $survey_type;
	public $survey_by;
	public $survey_for;
	public $answers;

	public function __construct($id_) 
	{
		if ($id_ != NULL){
			$db = new Database(DB_Name);
			$dataRow = $db->SQL_GET(DB_Survey_Table, 'id', $id_);
			
			$this->id = $id_;
			$this->date_taken = $dataRow['date_taken'];
			$this->survey_type = $dataRow['survey_type'];
			$this->survey_by = $dataRow['survey_by'];
			$this->survey_for = $dataRow['survey_for'];
			$this->answers= $this->parseAnswers($dataRow['answers']);
			
			$db->close();
		}else{
			$this->id = -1;
			$this->date_taken = 'NEVER!';
			$this->survey_type = '';
			$this->survey_by = '';
			$this->survey_for = '';
			//$this->answers= $this->parseAnswers("Empty,pls,fix,parsing");
		}
	}
	public function saveChanges(){
		$db = new Database(DB_NAME);
		// removes ` from any comments so it doesnt fuck up our data. since we use ` as delimiter
		$ans = implode('`',str_replace('`', ',', $this->answers));

		$result = $db->sp_update_survey($this->id, $ans);
		$db->refreshConnection();
		return $result;
	}
	public function parseAnswers($rawData)
	{
		return explode('`',$rawData);
	}
	public function concatenateAnswers()
	{
		return implode('`',$this->answers);
	}
	
	public function getCategoryRanks()
	{
		$ranks=array(0,0);
		$i=0;
		$counter = 0;
		foreach($this->answers as $a)
		{
			$cat=0;
			if($i<=4)//5
			{
				$cat=0;
			}
			else if($i<10)//6
			{
				$cat=1;
			}
			else if($i<14)//4
			{
				$cat=2;
			}
			else if($i<20)//6
			{
				$cat=3;
			}
			else if($i<26)//6
			{
				$cat=4;
			}
			else if($i<32)//6
			{
				$cat=5;
			}
			else if($i<37)//5
			{
				$cat=6;
			}
			else if($i<43)//6
			{
				$cat=7;
			}
			else if($i<49)//6
			{
				$cat=8;
			}
			else if($i<54)//5
			{
				$cat=9;
			}
			else if($i<59)//5
			{
				$cat=10;
			}
			else if($i<64)//5
			{
				$cat=11;
			}
			else if($i<69)//5
			{
				$cat=12;
			}
			if(is_numeric($a))
			{
				$i=$i+1;
				//$ranks[$cat]=($ranks[$cat]+intval($a))/2;
				$ranks[$cat] = ((($ranks[$cat] * $counter) + intval($a)) / ($counter + 1));
				$counter += 1;
			}
			else
			{
				$counter = 0;
			}
			
		}
		return $ranks;
	}
}
?>


