<?php 

require ('DB.php');
session_start();
$SchoolName= $_POST['school'];
$GradeLevel= $_POST['grade'];
$Age= $_POST['age'];
$Gender= $_POST['gender'];
if(!empty($SchoolName)&&!empty($GradeLevel)&&!empty($Age)&&!empty($Gender)){
    $sql="INSERT INTO Users(SchoolName,GradeLevel,Age,Gender) VALUES ('$SchoolName','$GradeLevel','$Age','$Gender')";
    $connection->query($sql);
    $last_id=$connection->insert_id;
    $_SESSION['user']=$last_id;
    
}
else{
    header("location:index.html");
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
			<h1>POSITIVE IDENTITY</h1>
			<p id="intro">Personal Power, Self-Esteem, Sense of Purpose, Positive View of Personal Future.</p>
			<form action="pre_page2.php" method="post">
				<p>1. I am developing a sense of purpose.</p>
				<div>
					<input type="radio" value="Not at All" id="q1-a1" name="q1" required>
					<label for="q1-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q1-a2" name="q1">
					<label for="q1-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q1-a3" name="q1">
					<label for="q1-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q1-a4" name="q1">
					<label for="q1-a4">Always</label>
				</div>
				
				<p>2. I believe that my personal decisions can affect my health as well as the health of others</p>		
				<div>
					<input type="radio" value="Not at All" id="q2-a1" name="q2" required>
					<label for="q2-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q2-a2" name="q2">
					<label for="q2-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q2-a3" name="q2">
					<label for="q2-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q2-a4" name="q2">
					<label for="q2-a4">Always</label>
				</div>
				
				<p>3. I have a good sense of who I am, body image and self-esteem.</p>	
				<div>
					<input type="radio" value="Not at All" id="q3-a1" name="q3" required>
					<label for="q3-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q3-a2" name="q3">
					<label for="q3-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q3-a3" name="q3">
					<label for="q3-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q3-a4" name="q3">
					<label for="q3-a4">Always</label>
				</div>
				
				<p>4. I feel good about and have a positive view of my personal future.</p>		
				<div>
					<input type="radio" value="Not at All" id="q4-a1" name="q4" required>
					<label for="q4-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q4-a2" name="q4">
					<label for="q4-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q4-a3" name="q4">
					<label for="q4-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q4-a4" name="q4">
					<label for="q4-a4">Always</label>
				</div>
				
				<p>5. I feel good about myself.</p>	
				<div>
					<input type="radio" value="Not at All" id="q5-a1" name="q5" required>
					<label for="q5-a1">Not at All</label>
				</div>
				<div>
					<input type="radio" value="Rarely" id="q5-a2" name="q5">
					<label for="q5-a2">Rarely</label>
				</div>
				<div>
					<input type="radio" value="Sometimes" id="q5-a3" name="q5">
					<label for="q5-a3">Sometimes</label>
				</div>
				<div>
					<input type="radio" value="Always" id="q5-a4" name="q5">
					<label for="q5-a4">Always</label>
				</div>
				
				<button type="submit">Next</button>
			</form>
		</div>
	</body>
</html>
