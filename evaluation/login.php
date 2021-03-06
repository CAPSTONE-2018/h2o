<?php include('./class/loginClass.php'); ?>
<?php $class = new mainLogin(); ?>

<?php
/**
 * @category	H20 Employee Eval System - Main Page
 * @author		Software Engineering - H20 Project
 * @version		1.0
 * @see			documentation.html
 */
// Check if POST was sent
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// If the username and password fiels not empty, check for valid credentials
	if($_POST['username'] != "" && $_POST['password'] != "") {
		// Credentials passed through Whirpool encryption algorithm
		if($class->checkCredentials($_POST['username'], $_POST['password']) == true) {
			echo "Valid!!";
			$class->setUser($_POST['username']);
			
			// This redirects back to the index.php, once credentials are validated
			// The "Location:" can be changed to any desired redirect page, or you place any scripts below this statement to execute
			
			header('Location: index.php');
		} 
		
		// Display invalid credential message
		else {
			$message = "Incorrect username or password."; 
			$type = "danger";
		}
	} 
	
	// Display warning message if no credentials are given at all
	else {
		$message = "Please enter a username and password"; $type = "warning";
	}
}

// Log out the user if GET action is called and equals 'logout'
if(isset($_GET['action']) && $_GET['action'] == "logout") {
	$class->killSession();
	
	// The below redirects back to the index.php after the logout button is clicked. This can also be changed as needed
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <title>H20 - Employee Evaluation Portal</title>

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
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html">
					H20 Employee Evaluation	System			
				</a>		
				<div class="nav-collapse">
					<ul class="nav pull-right">
						
						<li class="">						
							
							
						</li>
					</ul>
						
					</div><!--/.nav-collapse -->	
			
				</div> <!-- /container -->
				
			</div> <!-- /navbar-inner -->
			
		</div> <!-- /navbar -->

	<div class="account-container">
		
		<div class="content clearfix">
			
			<form action="login.php" method="post">
			
				<h1>Member Login</h1>		
				
				<div class="login-fields">
					<?php if(isset($message)) { ?>
				<div class="alert alert-<?php echo $type; ?>">
					<strong><?php echo $message; ?></strong>
				</div>
				<?php } else { ?>
					<div class="alert alert-info">
						Please provide your details
					</div>
				<?php } ?>
					
					<div class="field">
						<label for="username">Username</label>
						<input type="text" id="username" name="username" placeholder="Username" class="login username-field" />
					</div> <!-- /field -->
					
					<div class="field">
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" placeholder="Password" class="login password-field"/>
					</div> <!-- /password -->
					
				</div> <!-- /login-fields -->
				
				<div class="login-actions">
					
					<span class="login-checkbox">
						<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
						<label class="choice" for="Field">Keep me signed in</label>
					</span>
										
					<input type="submit" class="button btn btn-success btn-large" value="Sign In" />
					
				</div> <!-- .actions -->
				
			</form>
			
		</div> <!-- /content -->
		
	</div> <!-- /account-container -->

	 </div>
</div>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
	$(function () {
	
		jQuery.support.placeholder = false;
		test = document.createElement('input');
		if('placeholder' in test) jQuery.support.placeholder = true;
		
		if (!$.support.placeholder) {
			
			$('.field').find ('label').show ();
			
		}
	
	});
	</script>
</body>
</html>