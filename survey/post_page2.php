<?php

require('DB.php');
session_start();
$quest1=$_POST['q1'];
$quest2=$_POST['q2'];
$quest3=$_POST['q3'];
$quest4=$_POST['q4'];
$quest5=$_POST['q5'];
$user=$_SESSION['userID'];
$qid1="q1";
$qid2="q2";
$qid3="q3";
$qid4="q4";
$qid5="q5";



if(!empty($quest1)&&!empty($quest2)&&!empty($quest3)&&!empty($quest4)&&!empty($quest5)){
    
    $sql1="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid1','$quest1')";
    $sql2="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid2','$quest2')";
    $sql3="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid3','$quest3')";
    $sql4="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid4','$quest4')";
    $sql5="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid5','$quest5')";
    
    $connection->query($sql1);
    $connection->query($sql2);
    $connection->query($sql3);
    $connection->query($sql4);
    $connection->query($sql5);
    
}
else{
    header("location:post_page1.php");
    
}
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<title>H2O | Post Survey</title>
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
			<h1>POSITIVE VALUES</h1>
			<p id="intro">Caring, Equality and Social Justice, Integrity, Honesty, Responsibility, Restrain</p>
			<form action="post_page3.php" method="post">
				<p>6. I am involved in helping to make my community a better place.</p>
				<div>
					<input type="radio" value="Not at All" id="q6-a1" name="q6" required>
					<label for="q6-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q6-a2" name="q6">
					<label for="q6-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q6-a3" name="q6">
					<label for="q6-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q6-a4" name="q6">
					<label for="q6-a4">Always</label>
				</div>
				
				<p>7. I am encouraged to help others.</p>	
				<div>	
					<input type="radio" value="Not at All" id="q7-a1" name="q7" required>
					<label for="q7-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q7-a2" name="q7">
					<label for="q7-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q7-a3" name="q7">
					<label for="q7-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q7-a4" name="q7">
					<label for="q7-a4">Always</label>
				</div>
				
				<p>8. I feel that negative emotions can get me into trouble, at school, home, work and in the community.</p>
				<div>	
					<input type="radio" value="Not at All" id="q8-a1" name="q8" required>
					<label for="q8-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q8-a2" name="q8">
					<label for="q8-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q8-a3" name="q8">
					<label for="q8-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q8-a4" name="q8">
					<label for="q8-a4">Always</label>
				</div>
				
				<p>9. I stand up for what I believe in.</p>		
				<div>
					<input type="radio" value="Not at All" id="q9-a1" name="q9" required>
					<label for="q9-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q9-a2" name="q9">
					<label for="q9-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q9-a3" name="q9">
					<label for="q9-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q9-a4" name="q9">
					<label for="q9-a4">Always</label>
				</div>
				
				<p>10. I resist bad influences, and stay away from tobacco, alcohol, and other drugs.</p>	
				<div>
					<input type="radio" value="Not at All" id="q10-a1" name="q10" required>
					<label for="q10-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q10-a2" name="q10">
					<label for="q10-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q10-a3" name="q10">
					<label for="q10-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q10-a4" name="q10">
					<label for="q10-a4">Always</label>
				</div>
				
				<p>11. I take responsibility for what I do.</p>	
				<div>
					<input type="radio" value="Not at All" id="q11-a1" name="q11" required>
					<label for="q11-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q11-a2" name="q11">
					<label for="q11-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q11-a3" name="q11">
					<label for="q11-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q11-a4" name="q11">
					<label for="q11-a4">Always</label>
				</div>
				
				<button type="submit">Next</button>
			</form>
		</div>
	</body>
</html>