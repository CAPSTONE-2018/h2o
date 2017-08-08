<?php
//Register + Pretest
session_start();

require 'DB.php';

if((isset($_POST['pretest'])) && !empty($_POST['first']) && !empty($_POST['middle']) && !empty($_POST['last'])):
	
	$stmt = $conn->prepare('INSERT INTO users (first, middle, last) VALUES (:first, :middle, :last)');

	$stmt->bindParam(':first', $_POST['first']);
	$stmt->bindParam(':middle', $_POST['middle']);
	$stmt->bindParam(':last', $_POST['last']);

	if( $stmt->execute() ):
		$_SESSION['first'] = $_POST['first'];
		$_SESSION['middle'] = $_POST['middle'];
		$_SESSION['last'] = $_POST['last'];
		
		header("Location: PreTest.php");
	else:
		//var_dump($stmt->errorInfo());
	endif;
endif;
?>
<?php
//Posttest
$message = "User not found.";

if(isset($_POST['posttest'])):
	
	$first = $_POST['first'];
	$middle = $_POST['middle'];
	$last = $_POST['last'];
	
	if(empty($_POST['first'])||empty($_POST['middle'])||empty($_POST['first'])):
	$message1 = 'All field are required';
	
	else:
		$stmt = $conn->prepare('SELECT first,middle,last FROM users WHERE first = ? AND middle = ? AND last = ?');
		
		$stmt->execute(array($first,$middle,$last));
		$results = $stmt->fetch(PDO::FETCH_ASSOC);

		if($stmt->rowCount()> 0 ):
			$_SESSION['first'] = $_POST['first'];
			$_SESSION['middle'] = $_POST['middle'];
			$_SESSION['last'] = $_POST['last'];
			header('Location: PostTest.php');

		else:			
			echo $message;
			//var_dump($stmt->errorInfo());
		endif; 
	endif;
endif;
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>H2O</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="container" style="text-align: center">
			<div id="wrapperHeader">
			 <div id="header">
			  <img src="https://d5wwj7hogtwx9.cloudfront.net/image_uploads/52ac79a2b4c24098c1fbd3c6f9e0e522.jpg" alt="logo" />
			 </div> 
			</div>
			<hr> 
			<b>Welcome! Please enter all fields. </b>
			<form method="POST" action="Main.php">
			<div class="form-name">
		
				<input type="text" class="form-control" name="first" placeholder="First Name" pattern="[A-Za-z]+" autocomplete="off">
			</div>
			
			<div class="form-name">

				<input type="text" class="form-control" name="middle" maxlength="1" placeholder="Middle Initial" pattern="[A-Za-z]+" autocomplete="off">
			</div>
			
			<div class="form-name">

			  <input type="text" class="form-control" name="last" placeholder="Last Name" pattern="[A-Za-z]+" autocomplete="off">
			</div>
		
			<br>
			<b>Select what test you would like to take.</b>
			<div style="text-align: center"> 
	
				<button type="submit" name = "pretest" class="btn btn-primary btn-lg">PreTest</button>				
				<button type="submit" name = "posttest" class="btn btn-primary btn-lg">PostTest</button>
			</div>
			</form>		
		</div>
	</body>
</html>