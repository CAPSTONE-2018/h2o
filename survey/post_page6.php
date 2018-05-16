<?php

require('DB.php');
session_start();
$quest28=$_POST['q28'];
$quest29=$_POST['q29'];
$quest30=$_POST['q30'];
$quest31=$_POST['q31'];
$quest32=$_POST['q32'];
$quest33=$_POST['q33'];
$quest34=$_POST['q34'];
$quest35=$_POST['q35'];
$quest36=$_POST['q36'];
$quest37=$_POST['q37'];
$user=$_SESSION['userID'];
$qid28="q28";
$qid29="q29";
$qid30="q30";
$qid31="q31";
$qid32="q32";
$qid33="q33";
$qid34="q34";
$qid35="q35";
$qid36="q36";
$qid37="q37";



if(!empty($quest28)&&!empty($quest29)&&!empty($quest30)&&!empty($quest31)&&!empty($quest32)&&!empty($quest33)&&!empty($quest34)&&!empty($quest35)&&!empty($quest36)&&!empty($quest37)){
    
    $sql28="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid28','$quest28')";
    $sql29="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid29','$quest29')";
    $sql30="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid30','$quest30')";
    $sql31="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid31','$quest31')";
    $sql32="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid32','$quest32')";
    $sql33="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid33','$quest33')";
    $sql34="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid34','$quest34')";
    $sql35="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid35','$quest35')";
    $sql36="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid36','$quest36')";
    $sql37="INSERT INTO PostTest(UserID,QuestionID,Answers) VALUES('$user','$qid37','$quest37')";
    
    
    $connection->query($sql28);
    $connection->query($sql29);
    $connection->query($sql30);
    $connection->query($sql31);
    $connection->query($sql32);
    $connection->query($sql33);
    $connection->query($sql34);
    $connection->query($sql35);
    $connection->query($sql36);
    $connection->query($sql37);
    
    
}
else{
    header("location:post_page5.php");
    
}
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<title>H2O | Post Survey</title>
		<link rel="stylesheet" type="text/css" href="css/nonsurvey.css">	
	</head>
	<body>
		<div id="wrapper-header">
			<div id="header">
				<img id="logo" src="http://hearthavenoutreach.org/wp-content/uploads/2017/08/H2O-logo-PNG-clear-background-white-600.png" alt="logo" />
			</div>
		</div>
		<p><b>Thank You for Filling Out our Survey</b></p>
		
		<form action="index.html" method="get">
			<button type="submit">Login</button>
		</form>
		
		<p>Download the CSV file for the PostTest</p>
		<form action="csvpost.php" method="get">
		    <button type="submit">Download</button>
		</form>
	</body>
</html>