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
							<li><a href="javascript:;">Settings</a></li>
							<li><a href="javascript:;">Help</a></li>
						</ul>						
					</li>
					 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Welcome, <?php echo $class->getCurrentUser($class->username_field);  ?>!<b class="caret"></b></a>
					<ul class="dropdown-menu">
				 		 <li><a href="javascript:;">Profile</a></li>
				  		<li><a href="?action=logout">Logout</a></li>
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
				<li><a href="survey_full.php"><i class="icon-list-alt"></i><span>Surveys</span> </a> </li>
			        <li><a href="report.php"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
				<?php if($class->getCurrentUser($class->user_role) == 'admin'){  ?>
				<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Admin Pages</span> <b class="caret"></b></a>
				  <ul class="dropdown-menu">
                                        <li><a href="./createNewUser.php">New User</a></li> 
					<li><a href="#">Remove User</a></li>
				  </ul>
				</li>
				<?php } ?>
			</ul>
		</div> <!-- /container -->
	</div> <!-- /subnavbar-inner -->
</div> <!-- /subnavbar -->
