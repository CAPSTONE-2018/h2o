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

  public function exchangeArray(array $data)
  {
    !empty($data['answers']) ? $this->parseAnswers($data['answers']) : null;
    $this->dateTaken  = !empty($data['date_taken']) ? $data['date_taken'] : null;
    $this->surveyBy   = !empty($data['surveyby_u_id']) ? $data['surveyby_u_id'] : null;
    $this->surveyFor  = !empty($data['surveyfor_u_id']) ? $data['surveyfor_u_id'] : null;
    $this->surveyType = !empty($data['sur_type']) ? $data['sur_type'] : null;
    $this->id         = !empty($data['id']) ? $data['id'] : null;
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
		$ranks=[0,0,0,0,0,0,0,0,0,0,0,0];
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