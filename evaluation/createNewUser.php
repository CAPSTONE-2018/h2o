<?php include ('./class/loginClass.php');?>
<?php $class = new mainLogin();?>
<?php
// Connection variables
//*********SET THESE TO YOUR DATABASE LOGIN*******
$dbHost = "localhost";
$dbUsername = "cs440_h2o";
$dbPasswd = "cs440_h2o";
//********SET THESE TO YOUR DATABASE NAME AND USERS TABLE NAME***********
$dbName = "cs440_h2o";
$dbTable = "h2o_users";
//*********SET THESE TO YOUR USERS TABLE FIELD VALUES***********
$fieldID = "id";
$fieldUsername = "username";
$fieldPassword = "key";
$fieldType = "role";

//Other variables
$userNameIsUnique = true;
$passwordIsValid = true;
$userIsEmpty = false;
$passwordIsEmpty = false;
$password2IsEmpty = false;
$typeIsEmpty = false;
$type = "";

//Check that the page was requested from itself
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//Check whether the user filled in the user's name in the text field "user"
	if($_POST['user'] == "") {
		$userIsEmpty = true;
	}
	//Connect to DB
	$con = mysqli_connect($dbHost,$dbUsername,$dbPasswd);
	if (!$con) {
		exit('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_errno());
	}
	
	//set default client character set
	mysqli_set_charset($con, 'utf-8');
	
	//Check whether the username already exists
	mysqli_select_db($con, $dbName);
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$employee = mysqli_query($con, "SELECT " . $fieldID . " FROM " . $dbTable . " WHERE " . $fieldUsername . "='".$user."'");
	$employeeIDnum = mysqli_num_rows($employee);
	if ($employeeIDnum) {
		$userNameIsUnique = false;
	}
	
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
	//Check whether the bool values show that the input was validated
	//If the data was validated successfully, then add it as a new entry in the database
	if (!$userIsEmpty && $userNameIsUnique && !$passwordIsEmpty && !$password2IsEmpty && $passwordIsValid && !$typeIsEmpty) {
		$password = mysqli_real_escape_string($con, $_POST['password']);
		//encrypt password using whirlpool
		$hashedPass = hash('whirlpool', $password);
		mysqli_select_db($con, $dbName);
		mysqli_query($con, "INSERT INTO `" . $dbTable . "` (`" . $fieldUsername . "`, `" . $fieldPassword . "`, `" . $fieldType . "`) VALUES ('" . $user . "', '" . $hashedPass . "', '" . $type . "')");
		mysqli_free_result($employee);
		mysqli_close($con);
		echo '<script>window.alert("Successfully created a new user!");window.location.href="http://cs.lewisu.edu/h2o/createNewUser.php";</script>';
		/*echo '<div class="alert alert-success" style="position: absolute; margin-left: 400px">';
			echo '<button type="button" class="close" data-dismiss="alert">×</button>';
			echo '<strong>Success,</strong> You created a new user!.';
        echo '</div>';*/

	}
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
	<?php if($class->getCurrentUser($class->user_role) !== 'admin'){
 		header('Location: index.php');
	  } ?>
		<?php include 'navbar.php'; ?>
		<div class="account-container">
		
			<div class="content clearfix">
			
				<div class="login-fields">
				
					<h1>Add User</h1><br>
					
					<form action="createNewUser.php" method="POST">

						<?php
						/** Display error messages if "user" field is empty or there is already a user with that name */
						if ($userIsEmpty) {
							echo ("Enter your name, please!");
							echo ("<br/>");
						}
						if (!$userNameIsUnique) {
							echo ("The person already exists. Please check the spelling and try again");
							echo ("<br/>");
						}
						?>

						Username: <input type="text" name="user"class="login username-field" maxlength="15"/><br/>
						
						<?php
						/** Display error messages if the "password" field is empty */
						if ($passwordIsEmpty) {
							echo ("Enter the password, please!");
							echo ("<br/>");
						}
						?>
						
						Password: <input type="password" name="password"class="login password-field"/><br/>
						
						<?php
						/** Display error messages if the "password2" field is empty
						* or its contents do not match the "password" field
						*/
						if ($password2IsEmpty) {
							echo ("Confirm your password, please!");
							echo ("<br/>");
						}
						if (!$password2IsEmpty && !$passwordIsValid) {
							echo ("<div>The passwords do not match!</div>");
							echo ("<br/>");
						}
						?>

						Please confirm your password: <input type="password" name="password2"class="login password-field"/><br/>
						
						</div> <!--login-fields-->
					<?php
					if ($typeIsEmpty) {
						echo("Choose the type of account you wish to create!");
						echo("<br/>");
					}
					?>
					<input type="radio" name="type" value="admin">Admin<br/>
					<input type="radio" name="type" value="user">User<br/>
	
					<input type="submit" value="Register"class="button btn btn-success btn-large"/>

				</form>
				
				</div><!--content clearfix-->
				
			</div><!--account-container-->
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/base.js"></script>
    </body>
</html>
