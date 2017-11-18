<?php
session_start();

require 'DB.php';

// Checking sixth page values for empy, If it finds any blank field then redirect to sixth
if (empty($_POST['statement51'])
	|| empty($_POST['statement52'])
	|| empty($_POST['statement53'])
	|| empty($_POST['statement54'])
	|| empty($_POST['statement55'])
	|| empty($_POST['statement56'])
	|| empty($_POST['statement57'])
	|| empty($_POST['statement58']){
		// Setting error message
		$_SESSION['error_pre6'] = "Mandatory field(s) are missing, Please fill it again";
		header("location: pre6_form.php"); // Redirecting to sixth page
} else {
	
foreach ($_POST as $key => $value){
	$_SESSION['post'][$key] = $value;
}
extract($_SESSION['post']);
$connection = mysql_connect("localhost", "h2o_user", "dbuser");
$db = mysql_select_db("h2o_survey", $connection);
$stmt->execute();
header("Location: Main.php");
}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>H2O</title>
		<link rel="stylesheet" type="text/css" href="style2.css" />
	</head>
	
	<body>
		<div id ="container">
		
		<div id="wrapperHeader">
		 <div id="header">
		  <img src="https://d5wwj7hogtwx9.cloudfront.net/image_uploads/52ac79a2b4c24098c1fbd3c6f9e0e522.jpg" alt="logo" />
		 </div> 
		</div>
		<hr>
		
		<?php											
			echo '<span style = " font-family: Times New Roman; color: black; font-weight: bold; font-size: 21px;">Hello, ' . $_SESSION['first'] . '!</span>';
		?>
		
		<div id ="instructions">
			<b>Pre-Test Instructions:</b>
		</div>
		<p>
			Below is a list of positive things that you might have in yourself, 
			your family, friends, neighborhood, school and community.
		</p>
		<p>
			For each item that describes 
			you now or within the past 3 months, check if the item is true:</p>
		<p>
			Not at All or Rarely, Somewhat or Sometimes, Very or Often, Extremely or Almost Aways.
		</p>
	
		<b>Please answer all items as best as you can.</b>
		<br>
		<br>
		<hr>
		<br>