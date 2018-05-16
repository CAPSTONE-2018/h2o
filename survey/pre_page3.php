<?php

require('DB.php');
session_start();
$quest6=$_POST['q6'];
$quest7=$_POST['q7'];
$quest8=$_POST['q8'];
$quest9=$_POST['q9'];
$quest10=$_POST['q10'];
$quest11=$_POST['q11'];
$user=$_SESSION['user'];
$qid6="q6";
$qid7="q7";
$qid8="q8";
$qid9="q9";
$qid10="q10";
$qid11="q11";



if(!empty($quest6)&&!empty($quest7)&&!empty($quest8)&&!empty($quest9)&&!empty($quest10)&&!empty($quest11)){
    
    $sql6="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid6','$quest6')";
    $sql7="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid7','$quest7')";
    $sql8="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid8','$quest8')";
    $sql9="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid9','$quest9')";
    $sql10="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid10','$quest10')";
    $sql11="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid11','$quest11')";
    
    $connection->query($sql6);
    $connection->query($sql7);
    $connection->query($sql8);
    $connection->query($sql9);
    $connection->query($sql10);
    $connection->query($sql11);
    
}
else{
    header("location:pre_page2.php");
    
}
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<title>H2O | Pre Survey</title>
		<link rel="shortcut icon" href="../Images/survey.ico" type="image/x-icon" >
		<link rel="stylesheet" type="text/css" href="css/survey.css">
		<link rel="stylesheet" type="text/css" href="css/surveyPageStyle.css">
	</head>
	<body>
		<div id="wrapper-header">
			<div id="header">
				<img id="logo" src="http://hearthavenoutreach.org/wp-content/uploads/2017/08/H2O-logo-PNG-clear-background-white-600.png" alt="logo" />
			</div>
		</div>
		<div class="surveyPage">
			<h1>COMMITMENT TO LEARNING</h1>
			<p id="intro">Achievement, Motivation, School Engagement, Homework, Bonding to School, Reading for pleasure</p>
			<form action="pre_page4.php" method="post">
				<p>12. I am eager to do well in school and other activities.</p>
				<div>
					<input type="radio" value="Not at All" id="q12-a1" name="q12" required>
					<label for="q12-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q12-a2" name="q12">
					<label for="q12-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q12-a3" name="q12">
					<label for="q12-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q12-a4" name="q12">
					<label for="q12-a4">Always</label>
				</div>
				
				<p>13. I can improve my academic success if I have assistance with homework or other related issues.</p>	
				<div>	
					<input type="radio" value="Not at All" id="q13-a1" name="q13" required>
					<label for="q13-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q13-a2" name="q13">
					<label for="q13-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q13-a3" name="q13">
					<label for="q13-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q13-a4" name="q13">
					<label for="q13-a4">Always</label>
				</div>
				
				<p>14. I set goals that will help me to improve my academic success.</p>	
				<div>
					<input type="radio" value="Not at All" id="q14-a1" name="q14" required>
					<label for="q14-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q14-a2" name="q14">
					<label for="q14-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q14-a3" name="q14">
					<label for="q14-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q14-a4" name="q14">
					<label for="q14-a4">Always</label>
				</div>
				
				<p>15. I feel understood at school.</p>		
				<div>
					<input type="radio" value="Not at All" id="q15-a1" name="q15" required>
					<label for="q15-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q15-a2" name="q15">
					<label for="q15-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q15-a3" name="q15">
					<label for="q15-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q15-a4" name="q15">
					<label for="q15-a4">Always</label>
				</div>
				
				<p>16. I feel academically and socially challenged at school.</p>	
				<div>
					<input type="radio" value="Not at All" id="q16-a1" name="q16" required>
					<label for="q16-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q16-a2" name="q16">
					<label for="q16-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q16-a3" name="q16">
					<label for="q16-a3">Sometimes</label>	
				</div>
				<div>
					<input type="radio" value="Always" id="q16-a4" name="q16">
					<label for="q16-a4">Always</label>
				</div>
				
				<p>17. I enjoy learning, I do my homework, I care about school.</p>	
				<div>
					<input type="radio" value="Not at All" id="q17-a1" name="q17" required>
					<label for="q17-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q17-a2" name="q17">
					<label for="q17-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q17-a3" name="q17">
					<label for="q17-a3">Sometimes</label>	
				</div>
				<div>
					<input type="radio" value="Always" id="q17-a4" name="q17">
					<label for="q17-a4">Always</label>
				</div>
				
				<button type="submit">Next</button>
			</form>
		</div>
	</body>
</html>