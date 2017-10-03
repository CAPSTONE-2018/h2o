<?php
namespace Evaluation\Model;

class Survey
{
	public $answers;
	public $dateTaken;
	public $surveyBy;
	public $surveyFor;
	public $surveyType;
	public $id;
	public function __construct($dbname)
	{
		$this->surveyBy = 'temp';
		$this->surveyFor = 'temp';
		$this->surveyType = 'temp';
		$this->dateTaken = 'temp';
		$this->id = 0;
	}
	public static function load($id)
	{
		$s=new Survey();
		$db=new Database("cs440_h2o");
		$r=$db->getDataFromI("h2o_answers",$id,"id");
		$s->parseAnswers($r["answers"]);
		$s->surveyBy = $r["surveyby_u_id"];
		$s->surveyFor = $r["surveyfor_u_id"];
		$s->surveyType = $r["sur_type"];
		$s->dateTaken = $r["date_taken"];
		$s->id = $r["id"];


		$db->close();
		return $s;
	}
	public function create()
	{
		$db=new Database("cs440_h2o");
		$sql = sprintf("INSERT INTO h2o_answers (surveyby_u_id, surveyfor_u_id, sur_type, answers, date_taken) VALUES ('%s','%s','%s','%s','%s');",
						$this->surveyBy,
						$this->surveyFor,
						$this->surveyType,
						$this->concatenateAnswers(),
						$this->dateTaken);
		mysqli_query($db->con, $sql);
		return mysqli_insert_id($db->con);
	}
	public function parseAnswers($rawData)
	{
		$this->answers=explode(',',$rawData);
	}
	public function concatenateAnswers()
	{
		return implode(',',$this->answers);
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
