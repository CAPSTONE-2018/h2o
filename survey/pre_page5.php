<?php

require('DB.php');
session_start();
$quest18=$_POST['q18'];
$quest19=$_POST['q19'];
$quest20=$_POST['q20'];
$quest21=$_POST['q21'];
$quest22=$_POST['q22'];
$quest23=$_POST['q23'];
$quest24=$_POST['q24'];
$quest25=$_POST['q25'];
$quest26=$_POST['q26'];
$quest27=$_POST['q27'];
$user=$_SESSION['user'];
$qid18="q18";
$qid19="q19";
$qid20="q20";
$qid21="q21";
$qid22="q22";
$qid23="q23";
$qid24="q24";
$qid25="q25";
$qid26="q26";
$qid27="q27";



if(!empty($quest18)&&!empty($quest19)&&!empty($quest20)&&!empty($quest21)&&!empty($quest22)&&!empty($quest23)&&!empty($quest24)&&!empty($quest25)&&!empty($quest26)&&!empty($quest27)){
    
    $sql18="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid18','$quest18')";
    $sql19="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid19','$quest19')";
    $sql20="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid20','$quest20')";
    $sql21="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid21','$quest21')";
    $sql22="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid22','$quest22')";
    $sql23="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid23','$quest23')";
    $sql24="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid24','$quest24')";
    $sql25="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid25','$quest25')";
    $sql26="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid26','$quest26')";
    $sql27="INSERT INTO PreTest(UserID,QuestionID,Answers) VALUES('$user','$qid27','$quest27')";
    
    
    $connection->query($sql18);
    $connection->query($sql19);
    $connection->query($sql20);
    $connection->query($sql21);
    $connection->query($sql22);
    $connection->query($sql23);
    $connection->query($sql24);
    $connection->query($sql25);
    $connection->query($sql26);
    $connection->query($sql27);
    
    
}
else{
    header("location:pre_page4.php");
    
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
			<h1>SOCIAL COMPETENCIES</h1>
			<p id="intro">Planning and decision making, Interpersonal Competence, Cultural Competence, Resistance Skills, Peaceful Conflict Resolution</p>
			<form action="pre_page6.php" method="post">
				<p>28. I deal with frustration and overcome challenges in positive ways.</p>
				<div>
					<input type="radio" value="Not at All" id="q28-a1" name="q28" required>
					<label for="q28-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q28-a2" name="q28">
					<label for="q28-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q28-a3" name="q28">
					<label for="q28-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q28-a4" name="q28">
					<label for="q28-a4">Always</label>
				</div>
				
				<p>29. I plan ahead and make good choices.</p>	
				<div>	
					<input type="radio" value="Not at All" id="q29-a1" name="q29" required>
					<label for="q29-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q29-a2" name="q29">
					<label for="q29-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q29-a3" name="q29">
					<label for="q29-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q29-a4" name="q29">
					<label for="q29-a4">Always</label>
				</div>
				
				<p>30. I resolve conflicts without anyone getting hurt.</p>	
				<div>
					<input type="radio" value="Not at All" id="q30-a1" name="q30" required>
					<label for="q30-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q30-a2" name="q30">
					<label for="q30-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q30-a3" name="q30">
					<label for="q30-a3">Sometimes</label>	
				</div>
				<div>
					<input type="radio" value="Always" id="q30-a4" name="q30">
					<label for="q30-a4">Always</label>
				</div>
				
				<p>31. I avoid things that are dangerous and unhealthy.</p>	
				<div>	
					<input type="radio" value="Not at All" id="q31-a1" name="q31" required>
					<label for="q31-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q31-a2" name="q31">
					<label for="q31-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q31-a3" name="q31">
					<label for="q31-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q31-a4" name="q31">
					<label for="q31-a4">Always</label>
				</div>
				
				<p>32. I express feelings in proper ways.</p>	
				<div>
					<input type="radio" value="Not at All" id="q32-a1" name="q32" required>
					<label for="q32-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q32-a2" name="q32">
					<label for="q32-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q32-a3" name="q32">
					<label for="q32-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q32-a4" name="q32">
					<label for="q32-a4">Always</label>
				</div>
				
				<p>33. I know how to avoid negative peer pressure and influences from best friends and acquaintances.</p>	
				<div>
					<input type="radio" value="Not at All" id="q33-a1" name="q33" required>
					<label for="q33-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q33-a2" name="q33">
					<label for="q33-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q33-a3" name="q33">
					<label for="q33-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q33-a4" name="q33">
					<label for="q33-a4">Always</label>
				</div>
				
				<p>34. I feel that I am in control of my emotions, and rarely feel violent or angry towards others.</p>	
				<div>
					<input type="radio" value="Not at All" id="q34-a1" name="q34" required>
					<label for="q34-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q34-a2" name="q34">
					<label for="q34-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q34-a3" name="q34">
					<label for="q34-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q34-a4" name="q34">
					<label for="q34-a4">Always</label>
				</div>
				
				<p>35. I have friends who set good examples for me.</p>	
				<div>
					<input type="radio" value="Not at All" id="q35-a1" name="q35" required>
					<label for="q35-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q35-a2" name="q35">
					<label for="q35-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q35-a3" name="q35">
					<label for="q35-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q35-a4" name="q35">
					<label for="q35-a4">Always</label>
				</div>
				
				<p>36. I know how to resolve conflict with my peers.</p>	
				<div>
					<input type="radio" value="Not at All" id="q36-a1" name="q36" required>
					<label for="q36-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q36-a2" name="q36">
					<label for="q36-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q36-a3" name="q36">
					<label for="q36-a3">Sometimes</label>	
				</div>
				<div>
					<input type="radio" value="Always" id="q36-a4" name="q36">
					<label for="q36-a4">Always</label>
				</div>
				
				<p>37. I stand up against bullying, peer pressure, and negative influences from peers and others.</p>	
				<div>
					<input type="radio" value="Not at All" id="q37-a1" name="q37" required>
					<label for="q37-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q37-a2" name="q37">
					<label for="q37-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q37-a3" name="q37">
					<label for="q37-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q37-a4" name="q37">
					<label for="q37-a4">Always</label>
				</div>
							
				<button type="submit">Submit</button>
			</form>
		</div>
	</body>
</html>