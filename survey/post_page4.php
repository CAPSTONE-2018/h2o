<?php

require('DB.php');
session_start();
$quest12=$_POST['q12'];
$quest13=$_POST['q13'];
$quest14=$_POST['q14'];
$quest15=$_POST['q15'];
$quest16=$_POST['q16'];
$quest17=$_POST['q17'];
$user=$_SESSION['userID'];
$qid12="q12";
$qid13="q13";
$qid14="q14";
$qid15="q15";
$qid16="q16";
$qid17="q17";



if(!empty($quest12)&&!empty($quest13)&&!empty($quest14)&&!empty($quest15)&&!empty($quest16)&&!empty($quest17)){
    
    $sql12="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid12','$quest12')";
    $sql13="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid13','$quest13')";
    $sql14="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid14','$quest14')";
    $sql15="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid15','$quest15')";
    $sql16="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid16','$quest16')";
    $sql17="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid17','$quest17')";
    
    $connection->query($sql12);
    $connection->query($sql13);
    $connection->query($sql14);
    $connection->query($sql15);
    $connection->query($sql16);
    $connection->query($sql17);
    
}
else{
    header("location:post_page3.php");
    
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
			<h1>SUPPORT</h1>
			<p id="intro">Family Support, Positive Family Communication, Other Adult Relationships, Caring Neighborhood, School Climate, Parent Involvement in Schooling</p>
			<form action="post_page5.php" method="post">
				<p>18. I feel understood at home.</p>
				<div>
					<input type="radio" value="Not at All" id="q18-a1" name="q18" required>
					<label for="q18-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q18-a2" name="q18">
					<label for="q18-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q18-a3" name="q18">
					<label for="q18-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q18-a4" name="q18">
					<label for="q18-a4">Always</label>
				</div>
				
				<p>19. I seek help in identifying the right choices to make in my life.</p>	
				<div>	
					<input type="radio" value="Not at All" id="q19-a1" name="q19" required>
					<label for="q19-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q19-a2" name="q19">
					<label for="q19-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q19-a3" name="q19">
					<label for="q19-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q19-a4" name="q19">
					<label for="q19-a4">Always</label>
				</div>
				
				<p>20. I have family support and adults who are good role models for me.</p>
				<div>	
					<input type="radio" value="Not at All" id="q20-a1" name="q20" required>
					<label for="q20-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q20-a2" name="q20">
					<label for="q20-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q20-a3" name="q20">
					<label for="q20-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q20-a4" name="q20">
					<label for="q20-a4">Always</label>
				</div>
				
				<p>21. I seek advice from my parents.</p>		
				<div>
					<input type="radio" value="Not at All" id="q21-a1" name="q21" required>
					<label for="q21-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q21-a2" name="q21">
					<label for="q21-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q21-a3" name="q21">
					<label for="q21-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q21-a4" name="q21">
					<label for="q21-a4">Always</label>
				</div>
				
				<p>22. I feel valued and appreciated by others.</p>	
				<div>
					<input type="radio" value="Not at All" id="q22-a1" name="q22" required>
					<label for="q22-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q22-a2" name="q22">
					<label for="q22-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q22-a3" name="q22">
					<label for="q22-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q22-a4" name="q22">
					<label for="q22-a4">Always</label>
				</div>
				
				<p>23. I feel safe and secure at home.</p>	
				<div>
					<input type="radio" value="Not at All" id="q23-a1" name="q23" required>
					<label for="q23-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q23-a2" name="q23">
					<label for="q23-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q23-a3" name="q23">
					<label for="q23-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q23-a4" name="q23">
					<label for="q23-a4">Always</label>
				</div>
				
				<p>24. I am encouraged to try things that might be good for me.</p>	
				<div>
					<input type="radio" value="Not at All" id="q24-a1" name="q24" required>
					<label for="q24-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q24-a2" name="q24">
					<label for="q24-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q24-a3" name="q24">
					<label for="q24-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q24-a4" name="q24">
					<label for="q24-a4">Always</label>
				</div>
				
				<p>25. I am included in family responsibilities and decisions.</p>	
				<div>
					<input type="radio" value="Not at All" id="q25-a1" name="q25" required>
					<label for="q25-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q25-a2" name="q25">
					<label for="q25-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q25-a3" name="q25">
					<label for="q25-a3">Sometimes</label>	
				</div>
				<div>
					<input type="radio" value="Always" id="q25-a4" name="q25">
					<label for="q25-a4">Always</label>
				</div>
				
				<p>26. I usually have problems at home.</p>	
				<div>
					<input type="radio" value="Not at All" id="q26-a1" name="q26" required>
					<label for="q26-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q26-a2" name="q26">
					<label for="q26-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q26-a3" name="q26">
					<label for="q26-a3">Sometimes</label>	
				</div>
				<div>
					<input type="radio" value="Always" id="q26-a4" name="q26">
					<label for="q26-a4">Always</label>
				</div>
				
				<p>27. I am involved in creative things such as music, theater, or art.</p>	
				<div>
					<input type="radio" value="Not at All" id="q27-a1" name="q27" required>
					<label for="q27-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q27-a2" name="q27">
					<label for="q27-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q27-a3" name="q27">
					<label for="q27-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q27-a4" name="q27">
					<label for="q27-a4">Always</label>
				</div>
								
				<button type="submit">Next</button>
			</form>
		</div>
	</body>
</html>