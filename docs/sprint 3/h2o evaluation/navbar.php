<?PHP
/*
	Layout page that handles login system.
	Included on all pages that need login.
*/

include('./class/loginClass.php'); 
$class = new mainLogin();

// If the current user IS NOT logged in, prompt for login 
if($class->isLoggedIn() == false) { 
header('Location: login.php');
		

// If the current user IS logged in, display dashboard 
} else { 
?>
<head>
<link rel="icon" href="/favicon.ico">
</head>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
	
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="index.php">
				Survey for H2O		
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Accounts
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="settings.php">Settings</a></li>
							<li><a href="help.php">Help</a></li>
						</ul>						
					</li>
					 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Welcome, <?php echo $class->getCurrentUser('username');  ?>!<b class="caret"></b></a>
					<ul class="dropdown-menu">
				 		 <li><a href="profile.php">Profile</a></li>
				  		<li><a href="?action=logout" onclick="
						<?PHP 
							if(isset($_GET['action']) && $_GET['action'] == "logout") {
								$class->killSession();
								
								// The below redirects back to the index.php after the logout button is clicked. This can also be changed as needed
								header('Location: index.php');
							}
						?>
						">Logout</a></li>
					</ul>
			  	</li>
				</ul>			

			
			</div><!--/.nav-collapse -->	
		</div> <!-- /container -->
	</div> <!-- /navbar-inner -->
</div> <!-- /navbar -->
    
<div class="subnavbar pagination-centered">
	<div class="subnavbar-inner">
		<div class="container">
			<ul class="mainnav">
				<li><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span></a></li>
				<li><a href="surveys.php"><i class="icon-list-alt"></i><span>Surveys</span> </a> </li>
			    <li><a href="report.php"><i class="icon-bar-chart"></i><span>Reports</span> </a> </li>
				<?php if($class->getCurrentUser('role') == 'admin'){  ?>
				<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Admin Pages</span> <b class="caret"></b></a>
				  <ul class="dropdown-menu">
                    <li><a href="./createNewUser.php">New User</a></li> 
					<li><a href="./removeUser.php">Remove User</a></li>
				  </ul>
				</li>
				<?php } ?>
			</ul>
		</div> <!-- /container -->
	</div> <!-- /subnavbar-inner -->
</div> <!-- /subnavbar -->
<?PHP } ?>
