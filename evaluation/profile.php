
<?php 
include 'navbar.php';
$myUser = $class->getCurrentUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>H20 - Profile</title>

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
	<div class="main-inner">
		<div class="container">
		<div class="row">
			<div class="span12">      		
				<div class="widget">
					<div class="widget-header">
						<i class="icon-user"></i>
						<h3>My Profile</h3>
					</div>
					<div class="widget-content">
						<img src='img/pink_man_with_a_pink_plan.png' style="float:left;" />
						<dl class="dl-horizontal" style="float:left;">
							<dt>Username: </dt>
							<dd><?PHP echo $myUser['username'] ?></dd>
							
							<dt>First Name:</dt>
							<dd><?PHP echo $myUser['firstname'] ?></dd>
							
							<dt>Last Name:</dt>
							<dd><?PHP echo $myUser['lastname'] ?></dd>
							
							<dt>Role:</dt>
							<dd><?PHP echo $myUser['role'] ?></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/signin.js"></script>
</html>