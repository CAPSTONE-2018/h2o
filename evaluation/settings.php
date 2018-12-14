
<?php 
include 'navbar.php';
include('./class/db.php');

$myUser = $class->getCurrentUser();
if ($myUser['role'] != 'admin'){
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
	
	<style>
		.tblInfo{
			width:75%;
			margin: 0 auto;
		}
		.tblInfo td{
			
		}
		.spnDT{
			width:125px;
			display:inline-block;
			font-weight:bold;
			margin-left:50px;
			
		}
		.spnDD{
			
		}
	</style>
	
</head>

<body>
	<div class="main-inner">
		<div class="container">
		<div class="row">
			<div class="span12">      		
				<div class="widget">
					<div class="widget-header">
						<i class="icon-user"></i>
						<h3>H2o Evaluation Settings</h3>
					</div>
					<div class="widget-content">
						<table class="tblInfo">
							<tr>
								<th><h3>Web Hosting Information: </h3></th>
								<th><h3>MySql Database Credentials:</h3></th>
							</tr>
							<tr>
								<td>
									<div style="height:175px;">
										<br />
										<span class="spnDT">Site Hosted By:</span>
										<span class="spnDD"><a href="https://my.gearhost.com/Websites/Configure/h20eval">gearhost</a></span>
										<br />
										<span class="spnDT">Username:</span>											
										<span class="spnDD">h20.eval.project@gmail.com</span>
										<br />
										<span class="spnDT">Password:</span>											
										<span class="spnDD">poorMi$t57</span>
										<br />
										<span class="spnDT">PHP Version: </span>
										<span class="spnDD">5.5</span>
									</div>
									
								</td>
								<td>
									
									<div style="height:175px;">
										<br />
										<span class="spnDT">DB Hosted By: </span>
										<span class="spnDD"><a href="https://my.gearhost.com/Databases/Details/morphling">gearhost</a></span>
										<br />
										<span class="spnDT">Host:</span>
										<span class="spnDD">den1.mysql4.gear.host</span>
										<br />
										<span class="spnDT">Database:</span>
										<span class="spnDD">morphling</span>
										<br />
										<span class="spnDT">Username:</span>
										<span class="spnDD">morphling</span>
										<br />
										<span class="spnDT">Password:</span>
										<span class="spnDD">Uc1B!Tdt~t4J</span>
									</div>
								
								</td>
							</tr>
						</table>
						
						<p>This page is visible to administrators only.<br />
						Delete this page if the site is no longer hosted on gearhost.</p>
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