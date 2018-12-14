<?php 
include 'navbar.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
ini_set('error_reporting', E_ALL);
include('./class/User.php'); 

$isAdmin = false;

if($class->getCurrentUser('role') == 'admin'){
	$isAdmin = true;
}
                                                    

function drawUserHTML(){
	
	$db = new Database();
	$users = $db->sp_get_all_users('user');
	
	$html .= "<select id='username_ctrl' onchange='load(this);'>";
	foreach($users as $u){
		$html .= "<option>" . $u['username'] . "</option>";
	}
	$html .= "</select>";
	
	return $html;
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
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


	<style type="text/css">
		#wrap {
		   width:100%;
		   margin:0 auto;
		}
		#left_col {
		   float:left;
		   width:50%;
		}
		#right_col {
		   float:right;
		   width:50%;
		}
		.widget{
			width:565px;
			display:inline-block;
			margin:5px 5px;
			vertical-align:top;
		}
		.widget-header{
			line-height:-5px !important;
		}
	</style>
		
</head>

<body> 	

	<div class="main">
		<div class="main-inner">
			<div class="container">
				<div class="widget" style="width: 100%;">
					<div class="widget-header"> <i class="icon-signal"></i>
						<h3>Result Data</h3>
					</div>
					<div class="widget-content" style="text-align:center;">
						
						<?php
	                        
							# gets User and Surveys
							$username = $class->getCurrentUser('username');
							
							//echo "Employee Report For: " . $username . "<br /> <br />"; 
							echo "<h1 style='float:left;'> Employee Evaluation Results</h1> ";
							
							if ($isAdmin)
								echo "Employee Report For: " . drawUserHTML() . "<br /> <br /> <hr />";   
							else							
								echo "Employee Report For: <input id='username_ctrl' readonly type='text' value='" . $username . "'/><br /> <br /> <hr />";   
							//Build user object 
							$myUser= new User($username);
							
							$userSurvey = new Survey($myUser->self_survey_id);
							$adminSurvey = new Survey($myUser->admin_survey_id);

							//$myUser->draw("RandomString");                           #calls draw function
							
						?>
						
						<div id="CHART1">
						</div>
					</div>
				</div>			
				<div id='rptMain'>
					<!-- Report to be generated here -->
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/signin.js"></script>
	<script>
	
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawChart);
	
	var dt = [];
	$(function(){
		load($('#username_ctrl'));
	});
	function drawChart() {
		
		var data = google.visualization.arrayToDataTable(dt);
		var options = {
			title: 'Evaluation Average Scores by Category',
			chartArea: {width: '50%'},
			hAxis: {
				title: 'Categories',
				minValue: 0
			},
			vAxis: {
				title: 'Rating'
			}
		};
		var chart = new google.charts.Bar(document.getElementById('CHART1'));	
		chart.draw(data, google.charts.Bar.convertOptions(options));
	}
	function load(ctrl){
		dt = [
			['City', 'Employee', 'Evaluator'],
			['Communic',				0,0],
			['Cooperation',				0,0],
			['Cost Consc',				0,0],
			['Dependable',				0,0],
			['Initiative',				0,0],
			['Job Knwlge',				0,0],
			['Judgement',				0,0],
			['Planning ',				0,0],
			['Prob Solving',			0,0],
			['Quality',					0,0],
			['Quantity',				0,0],
			['Use of Tech',				0,0]
		];
		
		var user = $(ctrl).val();
		$('#rptMain').html(user);
		
		$.ajax({
			cache: false,
			url: '/ajax/loadReport.php',
			contentType: 'JSON',
			data: {survFor: user},
			type: 'GET',
			dataType: 'TEXT',
			success: function(result){
				$('#rptMain').html(result);
			},
			error: function(){
				alert('error calling ajax');
			}
		});
		
		$.ajax({
			cache: false,
			url: '/ajax/loadReportChart.php',
			contentType: 'JSON',
			data: {survFor: user},
			type: 'GET',
			dataType: 'JSON',
			success: function(result){
				dt = [
					['City', 'Employee', 'Evaluator'],
					['Communic',			result.u1, result.a1],
					['Cooperation',			result.u2, result.a2],
					['Cost Consc',			result.u3, result.a3],
					['Dependable',			result.u4, result.a4],
					['Initiative',			result.u5, result.a5],
					['Job Knwlge',			result.u6, result.a6],
					['Judgement',			result.u7, result.a7],
					['Planning',			result.u8, result.a8],
					['Prob Solving',		result.u9, result.a9],
					['Quality',				result.u10, result.a10],
					['Quantity',			result.u11, result.a11],
					['Use of Tech',			result.u12, result.a12]
				];
				drawChart();
			},
			error: function(){
				alert('error calling ajax');
			}
		});
	}
	</script>
</body>
</html>
