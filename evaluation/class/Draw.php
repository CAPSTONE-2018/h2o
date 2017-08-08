<?php
class Draw
{
	public static $squareSize=300;
	public static function rotate($x,$y,$rot,$centerX,$centerY)
	{
		$y=$y+10;
		$x = $x-$centerX;
		$y = $y-$centerY;
		
		$newX=($x*cos($rot))-($y*sin($rot));
		$newY=($x*sin($rot))+($y*cos($rot));
		$newX=$newX+$centerX;
		$newY=$newY+$centerY;
		return array($newX,$newY);
	}
	public static function rotateWord($x,$y,$rot,$centerX,$centerY)
	{
		$x = $x-$centerX;
		$y = $y-$centerY;
		$newX=($x*cos($rot))-($y*sin($rot));
		$newY=($x*sin($rot))+($y*cos($rot));
		$newX=$newX+$centerX;
		$newY=$newY+$centerY;
		return array($newX,$newY);
	}
	public static function getYLoc($rank)
	{
		$rate=(self::$squareSize/2)/5;
		return (5-$rank)*$rate;
	}
	public static function createImage($fileName,$selEval,$adminEval,$cats)
	{
		//unset($selEval[2]);
		//first draw the underlyng pie 
		//create a list of points
		//points[]=num catergories
		//get the amount of rotatiobn between each point
		//$rotEach=360/numCats
		//for number of catergories
			//add subarray rotate($centerX,0,$rotEach*i,$centerX,$centerY) to list
		//draw polygon 
		//for each point in list
			//draw line between point i and point (centerX,CenterY)
		
		//draw actual rating 
		
		//determine selfSurvey and admn survy
		
		//first draw self survey
		//create new array of points
		//for each point 
			//add subarray rotate($centerX,selfSruvey.cat[i],$rotEach*i,$centerX,$centerY) to list 
		//add first back to end
		//fill poly
		
		//repeat for admin 
		
		//draw poly for self again.
		
		//save
		
		//return name
		
	
		if(function_exists("imagecreatetruecolor"))
		{
			$im = @imagecreatetruecolor(self::$squareSize+150,self::$squareSize+30)
				or die('Cannot Initialize new GD image stream');
		}
		else
		{
			$im = @imagecreate(self::$squareSize+150,self::$squareSize+30)
				or die('Cannot Initialize new GD image stream');
		}
		
		$back=imagecolorallocatealpha ($im,255,255,255,0);
		$black=imagecolorallocatealpha ($im,0,0,0,0);
		$green=imagecolorallocatealpha ($im,0,255,38,0);
		$blue=imagecolorallocatealpha ($im,0,38,255,0);
		
		imagefilledrectangle($im,0,0,self::$squareSize+150,self::$squareSize+30,$back);
		
		$centerX=self::$squareSize/2;
		$centerY=self::$squareSize/2;
		
		$numPoints=count($cats);
		$rotEach=360/14;
		$points=array();
		$i=0;
		$index=0;
		for ($i = 0; $i <= 14; $i++) 
		{
		
			$temp=self::rotate($centerX,0,$index*$rotEach,$centerX,$centerY);
			array_push($points, $temp[0],$temp[1]);
			imageline($im,$centerX,$centerY,$temp[0],$temp[1],$black);
			$index=$index+1;
		}
		imagepolygon ($im,$points,(count($points)/2)-4,$black);
		
		//draw the lines to conect the center
		
		//draw self survey
		$selfPoints=array();//6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6
		$i=0;
		$index=0;
		foreach($selEval as $r)
		{
			$temp=self::rotate($centerX,self::getYLoc($r),$index*$rotEach,$centerX,$centerY);
			$selfPoints[$i]=$temp[0];
			$i=$i+1;
			$selfPoints[$i]=$temp[1];
			$i=$i+1;
			$index=$index+1;
		}
		imagefilledpolygon($im,$selfPoints,count($selfPoints)/2,$blue);
		
		
		//draw self survey
		$adminPoints=array();//6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6
		$i=0;
		$index=0;
		foreach($adminEval as $r)
		{
			$temp=self::rotate($centerX,self::getYLoc($r),$index*$rotEach,$centerX,$centerY);
			$adminPoints[$i]=$temp[0];
			$i=$i+1;
			$adminPoints[$i]=$temp[1];
			$i=$i+1;
			$index=$index+1;
		}
		imagefilledpolygon($im,$adminPoints,count($adminPoints)/2,$green);
		
		
		$selfPoints2=array();//6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6
		$i=0;
		$index=0;
		foreach($selEval as $r)
		{
			$temp=self::rotate($centerX,self::getYLoc($r),$index*$rotEach,$centerX,$centerY);
			$selfPoints2[$i]=$temp[0];
			$i=$i+1;
			$selfPoints2[$i]=$temp[1];
			$i=$i+1;
			$index=$index+1;
		}
		imagepolygon($im,$selfPoints2,count($selfPoints2)/2,$blue);
		
		
		imagealphablending($im, false);
		imagesavealpha($im, true);
		
		$points=array();
		$i=0;
		$index=0;
		//$rotEach=360/count($cats);
		echo count($cats);
		foreach ($cats as $c)
		{
			$tY=0;
			if($index==0)
			{
				$tY=10;
			}
			$temp=self::rotateWord($centerX,$tY,$index*$rotEach,$centerX,$centerY);
			imagestring($im,5,$temp[0],$temp[1],$c,$black);
			$index=$index+1;
		}
			
		ob_start();	
		imagepng($im);
		$image = ob_get_contents();
		ob_end_clean();
		echo '<img src="data:image/png;base64,'.base64_encode($image).'" />';	
		imagedestroy($im);
	}
}
?>