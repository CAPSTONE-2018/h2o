<?php
include 'navbar.php';
include('./class/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>H20 - Remove User</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/pages/signin.css" rel="stylesheet" type="text/css">
	<link href="css/pages/dashboard.css" rel="stylesheet">
</head>
<body>
	
	<div class="account-container">
	
		<div class="content clearfix">
		
			<div class="login-fields">
			
				<h1>Remove User</h1><br>
				
				<form action="removeUser.php" method="POST">

					Please Enter a User to Delete: 
					<br />
					<?PHP
						if ($_SERVER['REQUEST_METHOD'] == 'POST') {
							$success = false;
							if (isset($_POST['userToRemove'])){
								
								//cuz we know its gonna happen
								$userIsTryingToDeleteThemselves = false;
								
								if ($_POST['userToRemove'] != $class->getCurrentUser('username')){
								
									$db = new Database();
									$result = $db->sp_delete_user($_POST['userToRemove']);
									
									if ($result == 'SUCCESS'){
										$success = true;
										echo '<div class="alert alert-success">';
										echo '<button type="button" class="close" data-dismiss="alert">X</button>';
										echo '<strong>Success!</strong> You\'ve deleted user: ' . $_POST['userToRemove'] . '!';
										echo '</div>';
									}else{
										echo '<br />';
										echo '<div class="error-text" >';
										echo 'Could not find user "' . $_POST['userToRemove'] . '".';
										echo '</div>';
										$failed = true;
									}
								}else{
									echo '<br />';
									echo '<div class="error-text" >';
									echo 'Why are you trying to delete yourself? :(';
									echo '</div>';
									$failed = true;
								}
							}
						}
					?>
					<br />
					<input type="text" style="height:40px;" name="userToRemove" class="login username-field <?PHP if (isset($failed)) echo 'error-text';?>" maxlength="30"/><br/>
					
					
					</div> <!--login-fields-->
					<input type="submit" value="Remove"class="button btn btn-success btn-large"/>

				</form>
			
		</div><!--content clearfix-->
	</div><!--account-container-->

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>
</body>
</html>