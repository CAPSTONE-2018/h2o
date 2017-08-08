
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
			$class->setUser($_POST['username']);
			
			// This redirects back to the index.php, once credentials are validated
			// The "Location:" can be changed to any desired redirect page, or you place any scripts below this statement to execute
			header('Location: index.php');
		} 
		
		// Display invalid credential message
		else {
			$message = "Incorrect username or password."; $type = "danger";
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
	<script type="text/javascript" src="//www.google.com/jsapi"></script>
				<script type="text/javascript">
				  google.load('visualization', '1', {packages: ['corechart']});
				</script>
				<script type="text/javascript">
				  function drawVisualization() {
					// Create and populate the data table.
					<?php 
						include_once 'class//User.php';
						//Query for the last created survey
						$last = $class->generalQuery("SELECT id FROM h2o_answers ORDER BY id DESC limit 1"); 
						$last = $last[0];
						$user1Survey = Survey::load($last);
						//Query for the second to last created survey
						$last = $class->generalQuery(sprintf("SELECT id FROM h2o_answers WHERE id<%s ORDER BY id DESC limit 1",$last));
						$last = $last[0];
						$user2Survey = Survey::load($last);
						//Averages Categories and Pulls names
						$u1S = $user1Survey->getCategoryRanks();
						$u2S = $user2Survey->getCategoryRanks();
						$u1N = $class->generalQuery(sprintf("SELECT username FROM h2o_users where id=%s;",$user1Survey->surveyFor));
						$u2N = $class->generalQuery(sprintf("SELECT username FROM h2o_users where id=%s;",$user2Survey->surveyFor));
						//Pastes into javascript array						
						echo 	"var data = google.visualization.arrayToDataTable([";
						echo	"['Category',				   '{$u1N[0]}',    '{$u2N[0]}',		'Average'],";
						echo	"['Communications',				{$u1S[0]},      {$u2S[0]},	" . (($u1S[0] + $u2S[0]) / 2) . "],";
						echo	"['Cooperation',				{$u1S[1]},      {$u2S[1]},	" . (($u1S[1] + $u2S[1]) / 2) . "],";
						echo	"['Cost Consciousness',			{$u1S[2]},		{$u2S[2]},	" . (($u1S[2] + $u2S[2]) / 2) . "],";
						echo	"['Dependability',				{$u1S[3]},      {$u2S[3]},  " . (($u1S[3] + $u2S[3]) / 2) . "],";
						echo	"['Initiative',					{$u1S[4]},		{$u2S[4]},	" . (($u1S[4] + $u2S[4]) / 2) . "],";
						echo	"['Job Knowledge',				{$u1S[5]},		{$u2S[5]},	" . (($u1S[5] + $u2S[5]) / 2) . "],";
						echo	"['Judgement',					{$u1S[6]},		{$u2S[6]},	" . (($u1S[6] + $u2S[6]) / 2) . "],";
						echo	"['Planning & Organization',	{$u1S[7]},		{$u2S[7]},	" . (($u1S[7] + $u2S[7]) / 2) . "],";
						echo	"['Problem Solving',			{$u1S[8]},      {$u2S[8]},  " . (($u1S[8] + $u2S[8]) / 2) . "],";
						echo	"['Quality',					{$u1S[9]},      {$u2S[9]},  " . (($u1S[9] + $u2S[9]) / 2) . "],";
						echo	"['Quantity',					{$u1S[10]},		{$u2S[10]}, " . (($u1S[10] + $u2S[10]) / 2) . "],";
						echo	"['Use of Tech',				{$u1S[11]},     {$u2S[11]}, " . (($u1S[11] + $u2S[11]) / 2) . "]";
						echo	"]);";
					?>
					// Create and draw the visualization.
					var ac = new google.visualization.ComboChart(document.getElementById('visualization'));
					ac.draw(data, {
					  title : 'H2O Form - Employee Summary',
					  width: 1100,
					  height: 400,
					  vAxis: {title: "Score"},
					  hAxis: {title: "Category"},
					  seriesType: "bars",
					  //vAxis: { viewWindow: {max: 5, min: 0}, gridlines: { count:6}},
					  series: {4: {type: "line"}}
					});
				  }

				  google.setOnLoadCallback(drawVisualization);
				</script>
</head>
<body>

	<?php // If the current user IS NOT logged in, prompt for login ?>
	<?php if($class->isLoggedIn() == false) { 
	header('Location: login.php');?>
			
	
	<?php // If the current user IS logged in, display dashboard ?>
	<?php } else { ?>
		<?php include 'navbar.php';?>		
	<div class="main">
		<div class="main-inner">
		<div class="container">
		  <div class="row">
			<div class="span12">
			  <div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
		  <h3> Recent Surveys <?php print_r($last);?></h3>
		</div>
		<div class="widget-content">
		<!-- /widget-header -->

				<div id="visualization" style="width: 1100px; height: 400px;"></div>
		</div>
	  </div>
         
          <!-- /widget -->
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts">
				  <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Apps</span></a>
				  <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Bookmarks</span></a>
				  <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-signal"></i><span class="shortcut-label">Reports</span> </a>
				  <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-comment"></i><span class="shortcut-label">Comments</span></a>
				  <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-user"></i><span class="shortcut-label">Users - <?php echo $class->getCount("h2o_users")?></span></a>
				  <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-file"></i><span class="shortcut-label">Notes</span></a>
				  <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-picture"></i> <span class="shortcut-label">Photos</span> </a>
			  </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          <div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
              <h3>Cool chart here</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
             <canvas id="area-chart" class="chart-holder" height="600" width="538"> 
				</canvas>
              <!-- /area-chart --> 
            </div>
			 <script type="text/javascript" src="//www.google.com/jsapi"></script>
				<script type="text/javascript">
				  google.load('visualization', '1', {packages: ['corechart']});
				</script>
				<!-- <div id="visualization" style="width: 1300px; height: 400px;"></div> -->
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
     
		</div>
	    <!-- /span6 --> 
	   </div>
	   <!-- /row --> 
	  </div>
	 <!-- /container --> 
    </div>
  <!-- /main-inner --> 
  </div>
	<!-- /main -->
		<?php } ?>
 </div>
</div>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/signin.js"></script>
</body>
</html>
