<?PHP 
/*
	This page gets posted back to by surveys.php when save is hit.
	Responsible for writing survey to database.
*/

include('./class/User.php'); 

$isAdmin = false;
$targetUserSet = false;

//Check if post request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	//if so, show nav bar
	include 'navbar.php';
	
	//now, lets create a user object using out current user object (as stored in navbar.php)
	//that's where $class comes from. 
	$myUser = new User($class->getCurrentUser('username'));
	$IsAdminSurvey = false;
	$answers = array();
	$LEN = 77;
	
	//populate answers 
	for ($i = 1; $i < $LEN; $i++){
		$ident = 'answer_' . $i;
		$answers[$i] = $_POST[$ident];
	}
	
	//check if logged in user is admin
	if ($myUser->role == 'admin'){
		$isAdmin = true; 
		$IsAdminSurvey = true; 
	}
	
	if (isset($_POST['answer_0'])){	//if a user is selected 
		$targetUserSet = true;	
		$targetUser = new User($_POST['answer_0']);
		
		if ($IsAdminSurvey)	//If an admin is doing survey on user, find admin survey id
			$s = new Survey($targetUser->admin_survey_id);
		else
			$s = new Survey($targetUser->self_survey_id);	//if user is evaluating self, find id
		
		$s->answers = $answers;
		$EXIT_CODE = $s->saveChanges();
	}
		
}else{
	//otherwise, redirect us 
	header('Location: index.php');
}

function drawDots($num){
	$html = '';
	switch($num){
		case 1:
			$color = '#cc3300';
			break;
		case 2:
			$color = '#ff9900';
			break;
		case 3:
			$color = '#e6e600';
			break;
		case 4:
			$color = '#ccff33';
			break;
		case 5:
			$color = '#99ff33';
			break;
	}
	for ($i = 0; $i < $num; $i++){
		
		$html .= '<span style="background-color:'. $color .';" class="dot"></span>';
	}
	return $html;
}

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Account - Bootstrap Admin Template</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
   
    <!-- Font Awesome CSS -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/progress-bar.css">
    <link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	

  </head>

<body>

<div class="main">
	<div class="main-inner">
	    <div class="container">
			<div class="row">
				<div class="">      		
					<div class="widget ">
						<div class="widget-header">
							<i class="icon-user"></i>
							<h3>Server Response</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content" style="text-align:center;">
							<?PHP 
								if ($isAdmin && !$targetUserSet){
									echo '<h1 style="color:red;">Oops! An Error has Occurred. User not specified.</h1>';
								}else if ($EXIT_CODE == 'FAILURE'){
									echo '<h1 style="color:orange;">Oops! An Error has Occurred.</h1>';
								}else{
									echo '<h1 style="color:green;">Successfully Submitted Survey!</h1>';
								}
							?>
							<hr />
							<div style="font-size:16px;width:750px;margin:0 auto;">
								<?PHP 
									if ($isAdmin && !$targetUserSet){
										echo 'The target user for this survey was not selected. Please go back and select a target user.';
									}else if ($EXIT_CODE == 'FAILURE'){
										echo 'The data was able to reach the server, but unable to be uploaded into the database. This may occur when the selected survey has not been modified. No changes have been made to this survey.';
									}else{
										echo 'Thank you for taking our survey. Below are the results you have submitted.
												You are able to update these at any time by going back to the survey.';
									}
								
								?>
								<br />
								<br />								
								<input type="button" class="btn" value="Back to survey" onclick="window.history.back();" />
							</div>
						</div>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
	      		<div class="widget ">
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Survey Results</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<div class="tabbable">
							<h3>Survey For: <?PHP if (isset($_POST['answer_0'])) echo $_POST['answer_0']; else echo '<span style="color:red">Invalid</span>'; ?></h3>
							<h3>Submitted on: <?PHP echo date('Y-m-d H:i:s'); ?></h3>
							<hr />

							<form method="post" id="h2o_form" action="" name ="h2o_form" class="form-horizontal">
							<div class="tab-content">
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Communications</u></h2>
											  <tbody>
												<tr>
												  <td>Expresses ideas and thoughts verbally : <?PHP echo drawDots($answers[1]); ?></td>
												</tr>
												<tr>
												  <td>Expresses ideas and thoughts in written form : <?PHP echo drawDots($answers[2]); ?></td>
												</tr>
												<tr>
												  <td>Exhibits good listening and comprehension : <?PHP echo drawDots($answers[3]); ?></td>
												</tr>
												<tr>
												  <td>Keeps others adequately informed : <?PHP echo drawDots($answers[4]); ?></td>
												</tr>
												<tr>
												 <div class="controls">
												  <td>Uses appropriate communication methods : <?PHP echo drawDots($answers[5]); ?></td>
												 </div>
												</tr>
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[6]; ?>
										  </div>                       
										 <br />
									</fieldset>
								
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Cooperation</u></h2>
											  <tbody>
												<tr>
												  <td>Establishes and maintains effective relations : <?PHP echo drawDots($answers[7]); ?></td>
												</tr>
												<tr >
												  <td>Exhibits tact and consideration : <?PHP echo drawDots($answers[8]); ?></td>
												</tr>
												<tr>
												  <td>Displays positive outlook and pleasant manner : <?PHP echo drawDots($answers[9]); ?></td>
												</tr>
												<tr>
												  <td>Offers assistance and support to coworkers : <?PHP echo drawDots($answers[10]); ?></td>
												</tr>
												<tr>
												  <td>Works cooperatively in group situations : <?PHP echo drawDots($answers[11]); ?></td>
												</tr>
												<tr>
												  <td>Works actively to resolve conflicts : <?PHP echo drawDots($answers[12]); ?></td>
												</tr>
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[13]; ?>
										  </div>                       
										 <br />
									</fieldset>
									
									
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Cost Consciousness</u></h2>
											  <tbody>
												<tr>
												  <td>Works within approved budget : <?PHP echo drawDots($answers[14]); ?></td>
												</tr>
												<tr>
												  <td>Conserves organizational resources : <?PHP echo drawDots($answers[15]); ?></td>
												</tr>
												<tr>
												  <td>Develops and implements cost-saving measures : <?PHP echo drawDots($answers[16]); ?></td>
												</tr>
												<tr>
												  <td>Contributes to profits and revenue : <?PHP echo drawDots($answers[17]); ?></td>
												</tr>
												
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[18]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
								
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Dependability</u></h2>
											  <tbody>
												<tr>
												  <td>Responds to requests for service and assistance : <?PHP echo drawDots($answers[19]); ?></td>
												<tr>
												  <td>Follows instructions, responds to management direction : <?PHP echo drawDots($answers[20]); ?></td>
												</tr>
												<tr>
												  <td>Takes responsibility for own actions : <?PHP echo drawDots($answers[21]); ?></td>
												</tr>
												<tr>
												  <td>Commits to doing best job possible : <?PHP echo drawDots($answers[22]); ?></td>
												</tr>
													<tr>
												  <td>Keeps commitments : <?PHP echo drawDots($answers[23]); ?></td>
												</tr>
													<tr>
												  <td>Meets attendance and punctuality guidelines : <?PHP echo drawDots($answers[24]); ?></td>
												</tr>
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[25]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
									
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Initiative</u></h2>
											  <tbody>
												<tr>
												  <td>Volunteers readily : <?PHP echo drawDots($answers[26]); ?></td>
												</tr>
												<tr>
												  <td>Undertakes self-development activities : <?PHP echo drawDots($answers[27]); ?></td>
												</tr>
												<tr>
												  <td>Seeks increased responsibilities : <?PHP echo drawDots($answers[28]); ?></td>
												</tr>
												<tr>
												  <td>Takes independent actions and calculated risks : <?PHP echo drawDots($answers[29]); ?></td>
												</tr>
													<tr>
												  <td>Looks for and takes advantage of opportunities : <?PHP echo drawDots($answers[30]); ?></td>
												</tr>
													<tr>
												  <td>Asks for help when needed : <?PHP echo drawDots($answers[31]); ?></td>
												</tr>
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[32]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
								
										
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Job Knowledge</u></h2>
											  <tbody>
												<tr>
												  <td>Competent in required job skills and knowledge : <?PHP echo drawDots($answers[33]); ?></td>
												</tr>
												<tr>
												  <td>Exhibits ability to learn and apply new skills : <?PHP echo drawDots($answers[34]); ?></td>
												</tr>
												<tr>
												  <td>Keeps abreast of current developments : <?PHP echo drawDots($answers[35]); ?></td>
												</tr>
												<tr>
												  <td>Requires minimal supervision : <?PHP echo drawDots($answers[36]); ?></td>
												</tr>
													<tr>
												  <td>Displays understanding of how job relates to others : <?PHP echo drawDots($answers[37]); ?></td>
												</tr>
													<tr>
												  <td>Uses resources effectively : <?PHP echo drawDots($answers[38]); ?></td>
												</tr>
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[39]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
									
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Judgement</u></h2>
											  <tbody>
												<tr>
												  <td>Displays willingness to make decisions : <?PHP echo drawDots($answers[40]); ?></td>
												</tr>
												<tr>
												  <td>Exhibits sound and accurate judgement : <?PHP echo drawDots($answers[41]); ?></td>
												</tr>
												<tr>
												  <td>Supports and explains reasoning for decisions : <?PHP echo drawDots($answers[42]); ?></td>
												</tr>
												<tr>
												  <td>Includes appropriate people in decision-making process : <?PHP echo drawDots($answers[43]); ?></td>
												</tr>
													<tr>
												  <td>Makes timely decisions : <?PHP echo drawDots($answers[44]); ?></td>
												</tr>
											
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[45]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
																	
								
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Planning & Organization</u></h2>
											  <tbody>
												<tr>
												  <td>Prioritizes and plans work activities : <?PHP echo drawDots($answers[46]); ?></td>
												</tr>
												<tr>
												  <td>Uses time efficiently : <?PHP echo drawDots($answers[47]); ?></td>
												</tr>
												<tr>
												  <td>Plans for additional resources : <?PHP echo drawDots($answers[48]); ?></td>
												</tr>
												<tr>
												  <td>Integrates changes smoothly : <?PHP echo drawDots($answers[49]); ?></td>
												</tr>
													<tr>
												  <td>Sets goals and objectives : <?PHP echo drawDots($answers[50]); ?></td>
												</tr>
														<tr>
												  <td>Works in an organized manner : <?PHP echo drawDots($answers[51]); ?></td>
												</tr>
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[52]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
										
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Problem Solving</u></h2>
											  <tbody>
												<tr>
												  <td> Identifies problems in a timely manner : <?PHP echo drawDots($answers[53]); ?></td>
												</tr>
												<tr>
												  <td> Gathers and analyzes information skillfully : <?PHP echo drawDots($answers[54]); ?></td>
												</tr>
												<tr>
												  <td>Develops alternative solutions : <?PHP echo drawDots($answers[55]); ?></td>
												</tr>
												<tr>
												  <td> Resolves problems in early stages : <?PHP echo drawDots($answers[56]); ?></td>
												</tr>
													<tr>
												  <td> Works well in group problem-solving situations : <?PHP echo drawDots($answers[57]); ?></td>
												</tr>
											
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[58]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
												
											
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Quality</u></h2>
											  <tbody>
												<tr>
												  <td> Demonstrates accuracy and thoroughness : <?PHP echo drawDots($answers[59]); ?></td>
												</tr>
												<tr>
												  <td>Displays commitment to excellence : <?PHP echo drawDots($answers[60]); ?></td>
												</tr>
												<tr>
												  <td> Looks for ways to improve and promote quality : <?PHP echo drawDots($answers[61]); ?></td>
												</tr>
												<tr>
												  <td> Applies feedback to improve performance : <?PHP echo drawDots($answers[62]); ?></td>
												</tr>
													<tr>
												  <td> Monitors own work to ensure quality : <?PHP echo drawDots($answers[63]); ?></td>
												</tr>
											
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[64]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
																										
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Quantity</u></h2>
											  <tbody>
												<tr>
												  <td> Meets productivity standards : <?PHP echo drawDots($answers[65]); ?></td>
												</tr>
												<tr>
												  <td>Completes work in timely manner : <?PHP echo drawDots($answers[66]); ?></td>
												</tr>
												<tr>
												  <td>Strives to increase productivity : <?PHP echo drawDots($answers[67]); ?></td>
												</tr>
												<tr>
												  <td>Works quickly: <?PHP echo drawDots($answers[68]); ?></td>
												</tr>
													<tr>
												  <td> Achieves established goals : <?PHP echo drawDots($answers[69]); ?></td>
												  
												</tr>
											
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[70]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Use of Technology</u></h2>
											  <tbody>
												<tr>
												  <td>Demonstrates required skills : <?PHP echo drawDots($answers[71]); ?></td>
												</tr>
												<tr>
												  <td>Adapts to new technologies : <?PHP echo drawDots($answers[72]); ?></td>
												</tr>
												<tr>
												  <td>Troubleshoots problems : <?PHP echo drawDots($answers[73]); ?></td>
												</tr>
												<tr>
												  <td>Uses technology to increase productivity : <?PHP echo drawDots($answers[74]); ?></td>
												</tr>
													<tr>
												  <td>Keeps technical skills up to date : <?PHP echo drawDots($answers[75]); ?></td>
												</tr>
											
											  </tbody>
											</table>
											Comments : <?PHP echo $answers[76]; ?>
										  </div>                       
										 <br>
									</fieldset>
								
								
								
								</form>
															
								</div>
							</div>
						</div>

						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->

	      </div> <!-- /row -->
	    </div> <!-- /container -->
	</div> <!-- /main-inner -->
</div> <!-- /main -->



	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script>

  </body>
   

</html>