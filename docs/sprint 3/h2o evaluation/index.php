
<?php 

include 'navbar.php';
/**
 * @category	H20 Employee Eval System - Main Page
 * @author		Software Engineering - H20 Project
 * @version		1.0
 * @see			documentation.html
 */

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
</head>
<body>
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
								<div id="visualization-note" style="padding:5px;position:absolute;z-index:5;right:5px;display:none;">
									Based on <span id="spnSelfs">XX</span> User Surveys and <span id="spnEvals">YY</span> Evaluations.<br />
								</div>
								<div id="visualization" style="width: 1100px; height: 425px;"></div>
							</div>
						</div>
					</div>
					<div class="span6" style="display:none;" >
						<div class="widget">
							<div class="widget-header"> 
								<i class="icon-bookmark"></i>
								<h3>Shortcuts</h3>
							</div>
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
							</div>
						</div>
					</div>
				<div class="span12" style="<?PHP if ($class->getCurrentUser('role') != 'admin') {echo 'display:none';} ?>">
					<div class="widget">
						<div class="widget-header"> 
							<i class="icon-signal"></i>
							<h3>Our Members</h3>
						</div>
						<div id="divMemberContent" class="widget-content shortcuts" style="text-align:left;">
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   </div>
  </div>

	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/signin.js"></script>
	<script>
	var dt = [];
	google.load('visualization', '1', {packages: ['corechart']});
	//google.setOnLoadCallback(drawChart);
	
	$(function(){
		loadChart();
		loadMembers();
	})
	
	function loadMembers(){
		$.ajax({
			cache: false,
			url: '/ajax/loadIndexMembers.php',
			contentType: 'JSON',
			data: {},
			type: 'GET',
			dataType: 'JSON',
			success: function(result){
				$('#divMemberContent').html(result);
				var allmembershortcuts = $('#divMemberContent').find('.shortcut');
				allmembershortcuts.off('mouseenter');
				allmembershortcuts.off('mouseleave');
				allmembershortcuts.mouseenter(function(){
					var orgCol = $(this).css('background-color');
					$(this).css('background-color','black');
					$(this).mouseleave(function() {
						$(this).css('background-color',orgCol);
					});
				});
				
			},
			error: function(){
				alert('error calling ajax');
			}
		});
	}
	
	
	function drawChart() {
		var data = google.visualization.arrayToDataTable(dt);
		var ac = new google.visualization.ComboChart(document.getElementById('visualization'));
		ac.draw(data, {
		  title : 'H2O Form - Employee Summary',
		  width: 1100,
		  height: 400,
		  vAxis: {title: "Score"},
		  hAxis: {title: "Category"},
		  seriesType: "bars",
		  series: {4: {type: "line"}},
		  colors: ['#bedafd', '#c8fad3']
		});
		$('#visualization-note').show();
	}
	function loadChart(){
		$.ajax({
			cache: false,
			url: '/ajax/loadIndexMainChart.php',
			contentType: 'JSON',
			type: 'GET',
			dataType: 'JSON',
			success: function(result){
				dt = [
				['Category',			    'Avg Eval Score',		'Avg Self Score'],
				['Communications',			   result.aavg.avg1,		result.uavg.avg1],
				['Cooperation',				   result.aavg.avg2,		result.uavg.avg2],
				['Cost Consciousness',		   result.aavg.avg3,		result.uavg.avg3],
				['Dependability',			   result.aavg.avg4,		result.uavg.avg4],
				['Initiative',				   result.aavg.avg5,		result.uavg.avg5],
				['Job Knowledge',			   result.aavg.avg6,		result.uavg.avg6],
				['Judgement',				   result.aavg.avg7,		result.uavg.avg7],
				['Planning & Organization',	   result.aavg.avg8,		result.uavg.avg8],
				['Problem Solving',			   result.aavg.avg9,		result.uavg.avg9],
				['Quality',					   result.aavg.avg10,		result.uavg.avg10],
				['Quantity',				   result.aavg.avg11,		result.uavg.avg11],
				['Use of Tech',				   result.aavg.avg12,		result.uavg.avg12]
				];
				$('#spnSelfs').html(result.Selfs);
				$('#spnEvals').html(result.Evals);
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