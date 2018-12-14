<?php 
include 'navbar.php';
include('./class/db.php');

//Other variables
$userNameIsUnique = true;
$passwordIsValid = true;
$userIsEmpty = false;
$passwordIsEmpty = false;
$password2IsEmpty = false;
$typeIsEmpty = false;
$firstnameIsEmpty = false;
$lastnameIsEmpty = false;
$type = "";
$succeeded = false;

//database object
$db = new Database();
//$refreshConnection();

//Check that the page was requested from itself
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	//Check whether the user filled in the user's name in the text field "user"
	if($_POST['user'] == "") {
		$userIsEmpty = true;
	}
	

	$userNameIsUnique = !$db->userExists($_POST['user']);
	//$db = new Database();
	//Check whether a password was entered and confirmed
	if ($_POST['password'] == "")
		$passwordIsEmpty = true;
	if ($_POST['password2'] == "")
		$password2IsEmpty = true;
	if ($_POST['password'] != $_POST['password2']) {
		$passwordIsValid = false;
	}	
	
	//Check whether a radio button was specified
	if (isset($_POST['type']) == null) {
		$typeIsEmpty = true;
	}
	elseif ($_POST['type'] == 'admin') {
		$type = "admin";
	}
	elseif ($_POST['type'] == 'user') {
		$type = "user";
	}
	
	if ($_POST['firstname'] == "")
		$firstnameIsEmpty = true;
	if ($_POST['lastname'] == "")
		$lastnameIsEmpty = true;
	
	if ($userIsEmpty == false && 
		$passwordIsEmpty == false && 
		$password2IsEmpty == false &&
		$passwordIsValid == true &&
		$typeIsEmpty == false &&
		$firstnameIsEmpty == false &&
		$lastnameIsEmpty == false &&
		$userNameIsUnique == true){
		
		
		$result = $db->sp_create_user($_POST['user'], $_POST['password'], $type, $_POST['firstname'], $_POST['lastname']);
		if ($result == 'SUCCESS'){
			$succeeded = true;
		}else if ($result == 'FAILURE'){
			$succeeded = false;
		}
	}

	
	
	
	
	
		/*
		echo '<script>window.alert("Successfully created a new user!");window.location.href="http://cs.lewisu.edu/h2o/createNewUser.php";</script>';

		echo '<div class="alert alert-success" style="position: absolute; margin-left:50%;">';
			echo '<button type="button" class="close" data-dismiss="alert">X</button>';
			echo '<strong>Success,</strong> You created a new user!.';
        echo '</div>';*/


}

if($class->getCurrentUser('role') !== 'admin'){
 		header('Location: index.php');		
}


?>

<!DOCTYPE html>
<html>
    <head>
	<meta charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
	<link href="css/pages/createNewUser.css" rel="stylesheet" type="text/css">
	</head>
    <body>

		
		<div class="account-container">
		
			<div class="content clearfix">
				<?PHP
					if ($succeeded){
						echo '<div class="alert alert-success">';
						echo '<button type="button" class="close" data-dismiss="alert">X</button>';
						echo '<strong>Success!</strong> You created a new user!';
						echo '</div>';
					}
				?>
				<div class="login-fields">
				
					<h1>Add User</h1><br>
					
					<form action="createNewUser.php" method="POST">

						<?php
						/** Display error messages if "user" field is empty or there is already a user with that name */
						if ($userIsEmpty || $passwordIsEmpty || $password2IsEmpty || $typeIsEmpty) {
							echo ("<span class='error-text'>Please fix the following field errors!</span>");
							echo ("<br/>");
						}
						if (!$userNameIsUnique) {
							echo ("<span class='error-text'>The person already exists. Please check the spelling and try again.</span>");
							echo ("<br/>");
						}
						?>

						Username: <input type="text" name="user"class="login username-field <?PHP if ($userIsEmpty || !$userNameIsUnique) echo 'error-text';?>" maxlength="15"/><br/>
						
						<?php/*
						if ($passwordIsEmpty) {
							echo ("<span class='error-text'>Enter the password, please!</span>");
							echo ("<br/>");
						}*/
						?>
						
						Password: <input type="password" name="password"class="login password-field <?PHP if ($passwordIsEmpty) echo 'error-text';?>"/><br/>
						
						
						
						<?php
						/** Display error messages if the "password2" field is empty
						* or its contents do not match the "password" field
						*//*
						if ($password2IsEmpty) {
							echo ("<span class='error-text'>Confirm your password, please!</span>");
							echo ("<br/>");
						}*/ 
						?>
						
						Please confirm your password: <input type="password" name="password2"class="login password-field <?PHP if ($password2IsEmpty) echo 'error-text';?>"/><br/>
						<?PHP
						if (!$password2IsEmpty && !$passwordIsValid) {
							echo ("<span class='error-text'>The passwords do not match!</span>");
							echo ("<br/>");
						}
						?>
						First Name: <input type="text" name="firstname" class="login username-field <?PHP if ($firstnameIsEmpty) echo 'error-text';?>"/><br/>
						Last Name: <input type="text" name="lastname" class="login username-field <?PHP if ($lastnameIsEmpty) echo 'error-text';?>"/><br/>
						
						</div> <!--login-fields-->
					<?php/*
					if ($typeIsEmpty) {
						echo("<span class='error-text'>Choose the type of account you wish to create!</span>");
						echo("<br/>");
					}*/
					?>
					<div style="<?PHP if ($typeIsEmpty) echo 'border:solid 2px red;border-radius:5px;padding:5px;color:darkred;';?>">
						Account type: <br />
						<input type="radio" name="type" value="admin">Admin<br/>
						<input type="radio" name="type" value="user">User<br/>
					</div>
					<input type="submit" value="Register"class="button btn btn-success btn-large"/>

				</form>
				
				</div><!--content clearfix-->
				
			</div><!--account-container-->
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/base.js"></script>
    </body>
</html>
