<?php 

/*
	Developer: 	Adam Shehadeh
	Date:		10/28/2018
	Note:		Revised from previous code. 

*/

include 'navbar.php';
?>



<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>H2O Survey</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
   <link rel="icon" href="/favicon.ico">
    <!-- Font Awesome CSS -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/progress-bar.css">
    <link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-1.7.2.min.js"></script>
	
</head>

<body>
	<div class="main">
		<div class="main-inner">
			<div class="container">
			  <div class="row">
				<div class="span12">      		
					<div class="widget">
						<div class="widget-header">
							<i class="icon-user"></i>
							<h3>Survey</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<ul class="nav nav-tabs nav-justified">
									<li class="active">
										<a href="#communications" data-toggle="tab">Communications</a>
									</li>
									<li>
										<a href="#cooperation" data-toggle="tab">Cooperation</a>
									</li>
									<li>
										<a href="#consciousness" data-toggle="tab">Cost Consciousness</a>
									</li>
									<li>
										<a href="#dependability" data-toggle="tab">Dependability</a>
									</li>
									<li>
										<a href="#initiative" data-toggle="tab">Initiative</a>
									</li>
									<li>
										<a href="#knowledge" data-toggle="tab">Job Knowledge</a>
									</li>
									<li>
										<a href="#judgement" data-toggle="tab">Judgement</a>
									</li>
									<li>
										<a href="#organization" data-toggle="tab">Planning &amp; Organization</a></li>
									<li>
										<a href="#solving" data-toggle="tab">Problem Solving</a></li>
									<li>
										<a href="#quality" data-toggle="tab">Quality</a></li>
									<li>
										<a href="#quantity" data-toggle="tab">Quantity</a>
									</li>
									<li>
										<a href="#tech" data-toggle="tab">Use of Technology</a>
									</li>
								</ul>

								<form method="post" id="h2o_form" action="survey_submitted.php" name ="h2o_form" class="form-horizontal">
									<input type="hidden" name="hid" value="testing variables!!" />

									<?php if($class->getCurrentUser('role') == 'admin'){  ?>
									<select id="username" name="answer_0" class="form-control" onchange="loadUserSurvey($(this).val())" required >
									<option value="default" disabled selected required="required" required>Select an employee to review...</option>
										<?php
											$getEmployees = mysql_query("SELECT * FROM h2o_users WHERE role != 'admin';");
											while($user = mysql_fetch_object($getEmployees)){
												echo '<option value="'.$user->username.'">'.$user->username.'</option>';
											}
										?>
									</select>
									<?php } else{ ?>	
										<input type="hidden" name="answer_0" value="<?PHP echo $class->getCurrentUser('username'); ?>" />
									<?PHP }?>
									<div class="tab-content">
										<div class="tab-pane active" id="communications">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>Expresses ideas and thoughts verbally</td>
														  <td><input type="radio"  name="answer_1" value=1></td>
														  <td><input type="radio"  name="answer_1" value=2></td>
														  <td><input type="radio"  name="answer_1" value=3></td>
														  <td><input type="radio"  name="answer_1" value=4></td>
														  <td><input type="radio"  name="answer_1" value=5></td>
														</tr>
														<tr>
														  <td>Expresses ideas and thoughts in written form</td>
														  <td><input type="radio"  name="answer_2" value=1></td>
														  <td><input type="radio"  name="answer_2" value=2></td>
														  <td><input type="radio"  name="answer_2" value=3></td>
														  <td><input type="radio"  name="answer_2" value=4></td>
														  <td><input type="radio"  name="answer_2" value=5></td>
														</tr>
														<tr>
														  <td>Exhibits good listening and comprehension</td>
														  <td><input type="radio"  name="answer_3" value=1></td>
														  <td><input type="radio"  name="answer_3" value=2></td>
														  <td><input type="radio"  name="answer_3" value=3></td>
														  <td><input type="radio"  name="answer_3" value=4></td>
														  <td><input type="radio"  name="answer_3" value=5></td>
														</tr>
														<tr>
														  <td>Keeps others adequately informed</td>
														  <td><input type="radio"  name="answer_4" value=1></td>
														  <td><input type="radio"  name="answer_4" value=2></td>
														  <td><input type="radio"  name="answer_4" value=3></td>
														  <td><input type="radio"  name="answer_4" value=4></td>
														  <td><input type="radio"  name="answer_4" value=5></td>
														</tr>
														<tr>
														 <div class="controls">
														  <td>Uses appropriate communication methods</td>
														  <td><input type="radio"  name="answer_5" value=1></td>
														  <td><input type="radio"  name="answer_5" value=2></td>
														  <td><input type="radio"  name="answer_5" value=3></td>
														  <td><input type="radio"  name="answer_5" value=4></td>
														  <td><input type="radio"  name="answer_5" value=5></td>
														 </div>
														</tr>
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_6" ></textarea>
												  </div>                       
												 <br />
												<div class="form-actions">
													<button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);" >Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										</div>								
										<div class="tab-pane" id="cooperation">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>Establishes and maintains effective relations</td>
														  <td><input type="radio"  name="answer_7" value=1></td>
														  <td><input type="radio"  name="answer_7" value=2></td>
														  <td><input type="radio"  name="answer_7" value=3></td>
														  <td><input type="radio"  name="answer_7" value=4></td>
														  <td><input type="radio"  name="answer_7" value=5></td>
														</tr>
														<tr >
														  <td>Exhibits tact and consideration</td>
														  <td><input type="radio"  name="answer_8" value=1></td>
														  <td><input type="radio"  name="answer_8" value=2></td>
														  <td><input type="radio"  name="answer_8" value=3></td>
														  <td><input type="radio"  name="answer_8" value=4></td>
														  <td><input type="radio"  name="answer_8" value=5></td>
														</tr>
														<tr>
														  <td>Displays positive outlook and pleasant manner</td>
														  <td><input type="radio"  name="answer_9" value=1></td>
														  <td><input type="radio"  name="answer_9" value=2></td>
														  <td><input type="radio"  name="answer_9" value=3></td>
														  <td><input type="radio"  name="answer_9" value=4></td>
														  <td><input type="radio"  name="answer_9" value=5></td>
														</tr>
														<tr>
														  <td>Offers assistance and support to coworkers</td>
														  <td><input type="radio"  name="answer_10" value=1></td>
														  <td><input type="radio"  name="answer_10" value=2></td>
														  <td><input type="radio"  name="answer_10" value=3></td>
														  <td><input type="radio"  name="answer_10" value=4></td>
														  <td><input type="radio"  name="answer_10" value=5></td>
														</tr>
														<tr>
														  <td>Works cooperatively in group situations</td>
														  <td><input type="radio"  name="answer_11" value=1></td>
														  <td><input type="radio"  name="answer_11" value=2></td>
														  <td><input type="radio"  name="answer_11" value=3></td>
														  <td><input type="radio"  name="answer_11" value=4></td>
														  <td><input type="radio"  name="answer_11" value=5></td>
														</tr>
														<tr>
														  <td>Works actively to resolve conflicts</td>
														  <td><input type="radio"  name="answer_12" value=1></td>
														  <td><input type="radio"  name="answer_12" value=2></td>
														  <td><input type="radio"  name="answer_12" value=3></td>
														  <td><input type="radio"  name="answer_12" value=4></td>
														  <td><input type="radio"  name="answer_12" value=5></td>
														</tr>
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_13" ></textarea>
												  </div>                       
												 <br />
												<div class="form-actions">
													<button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);" >Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
											</div>
											
										<div class="tab-pane" id="consciousness">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>Works within approved budget</td>
														  <td><input type="radio" name="answer_14" value=1></td>
														  <td><input type="radio" name="answer_14" value=2></td>
														  <td><input type="radio" name="answer_14" value=3></td>
														  <td><input type="radio" name="answer_14" value=4></td>
														  <td><input type="radio" name="answer_14" value=5></td>
														</tr>
														<tr>
														  <td>Conserves organizational resources</td>
														  <td><input type="radio" name="answer_15" value=1></td>
														  <td><input type="radio" name="answer_15" value=2></td>
														  <td><input type="radio" name="answer_15" value=3></td>
														  <td><input type="radio" name="answer_15" value=4></td>
														  <td><input type="radio" name="answer_15" value=5></td>
														</tr>
														<tr>
														  <td>Develops and implements cost-saving measures</td>
														  <td><input type="radio" name="answer_16" value=1></td>
														  <td><input type="radio" name="answer_16" value=2></td>
														  <td><input type="radio" name="answer_16" value=3></td>
														  <td><input type="radio" name="answer_16" value=4></td>
														  <td><input type="radio" name="answer_16" value=5></td>
														</tr>
														<tr>
														  <td>Contributes to profits and revenue</td>
														  <td><input type="radio" name="answer_17" value="1"></td>
														  <td><input type="radio" name="answer_17" value=2></td>
														  <td><input type="radio" name="answer_17" value=3></td>
														  <td><input type="radio" name="answer_17" value=4></td>
														  <td><input type="radio" name="answer_17" value=5></td>
														</tr>
														
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_18" ></textarea>
												  </div>                       
												 <br>
												<div class="form-actions">
													<button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button> 
													<button class="btn cancel_btn" onclick="backHome(event);" >Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										</div>
										
										<div class="tab-pane" id="dependability">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>Responds to requests for service and assistance</td>
														  <td><input type="radio" name="answer_19" value=1></td>
														  <td><input type="radio" name="answer_19" value=2></td>
														  <td><input type="radio" name="answer_19" value=3></td>
														  <td><input type="radio" name="answer_19" value=4></td>
														  <td><input type="radio" name="answer_19" value=5></td>
														</tr>
														<tr>
														  <td>Follows instructions, responds to management direction</td>
														  <td><input type="radio" name="answer_20" value=1></td>
														  <td><input type="radio" name="answer_20" value=2></td>
														  <td><input type="radio" name="answer_20" value=3></td>
														  <td><input type="radio" name="answer_20" value=4></td>
														  <td><input type="radio" name="answer_20" value=5></td>
														</tr>
														<tr>
														  <td>Takes responsibility for own actions</td>
														  <td><input type="radio" name="answer_21" value=1></td>
														  <td><input type="radio" name="answer_21" value=2></td>
														  <td><input type="radio" name="answer_21" value=3></td>
														  <td><input type="radio" name="answer_21" value=4></td>
														  <td><input type="radio" name="answer_21" value=5></td>
														</tr>
														<tr>
														  <td>Commits to doing best job possible</td>
														  <td><input type="radio" name="answer_22" value=1></td>
														  <td><input type="radio" name="answer_22" value=2></td>
														  <td><input type="radio" name="answer_22" value=3></td>
														  <td><input type="radio" name="answer_22" value=4></td>
														  <td><input type="radio" name="answer_22" value=5></td>
														</tr>
															<tr>
														  <td>Keeps commitments</td>
														  <td><input type="radio" name="answer_23" value=1></td>
														  <td><input type="radio" name="answer_23" value=2></td>
														  <td><input type="radio" name="answer_23" value=3></td>
														  <td><input type="radio" name="answer_23" value=4></td>
														  <td><input type="radio" name="answer_23" value=5></td>
														</tr>
															<tr>
														  <td>Meets attendance and punctuality guidelines</td>
														  <td><input type="radio" name="answer_24" value=1></td>
														  <td><input type="radio" name="answer_24" value=2></td>
														  <td><input type="radio" name="answer_24" value=3></td>
														  <td><input type="radio" name="answer_24" value=4></td>
														  <td><input type="radio" name="answer_24" value=5></td>
														</tr>
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_25" ></textarea>
												  </div>                       
												 <br>
												<div class="form-actions">
													<button type="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);" >Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										
										</div>	
										<div class="tab-pane" id="initiative">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>Volunteers readily</td>
														  <td><input type="radio" name="answer_26" value=1></td>
														  <td><input type="radio" name="answer_26" value=2></td>
														  <td><input type="radio" name="answer_26" value=3></td>
														  <td><input type="radio" name="answer_26" value=4></td>
														  <td><input type="radio" name="answer_26" value=5></td>
														</tr>
														<tr>
														  <td>Undertakes self-development activities</td>
														  <td><input type="radio" name="answer_27" value=1 ></td>
														  <td><input type="radio" name="answer_27" value=2></td>
														  <td><input type="radio" name="answer_27" value=3></td>
														  <td><input type="radio" name="answer_27" value=4></td>
														  <td><input type="radio" name="answer_27" value=5></td>
														</tr>
														<tr>
														  <td>Seeks increased responsibilities</td>
														  <td><input type="radio" name="answer_28" value=1 ></td>
														  <td><input type="radio" name="answer_28" value=2></td>
														  <td><input type="radio" name="answer_28" value=3></td>
														  <td><input type="radio" name="answer_28" value=4></td>
														  <td><input type="radio" name="answer_28" value=5></td>
														</tr>
														<tr>
														  <td>Takes independent actions and calculated risks </td>
														  <td><input type="radio" name="answer_29" value=1></td>
														  <td><input type="radio" name="answer_29" value=2></td>
														  <td><input type="radio" name="answer_29" value=3></td>
														  <td><input type="radio" name="answer_29" value=4></td>
														  <td><input type="radio" name="answer_29" value=5></td>
														</tr>
														<tr>
														  <td>Looks for and takes advantage of opportunities</td>
														  <td><input type="radio" name="answer_30" value=1></td>
														  <td><input type="radio" name="answer_30" value=2></td>
														  <td><input type="radio" name="answer_30" value=3></td>
														  <td><input type="radio" name="answer_30" value=4></td>
														  <td><input type="radio" name="answer_30" value=5></td>
														</tr>
														<tr>
														  <td>Asks for help when needed</td>
														  <td><input type="radio" name="answer_31" value=1 ></td>
														  <td><input type="radio" name="answer_31" value=2></td>
														  <td><input type="radio" name="answer_31" value=3></td>
														  <td><input type="radio" name="answer_31" value=4></td>
														  <td><input type="radio" name="answer_31" value=5></td>
														</tr>
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_32" ></textarea>
												  </div>                       
												 <br>
												<div class="form-actions">
													<button type="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);" >Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										
										</div>	
										<div class="tab-pane" id="knowledge">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>Competent in required job skills and knowledge</td>
														  <td><input type="radio" name="answer_33" value=1></td>
														  <td><input type="radio" name="answer_33" value=2></td>
														  <td><input type="radio" name="answer_33" value=3></td>
														  <td><input type="radio" name="answer_33" value=4></td>
														  <td><input type="radio" name="answer_33" value=5></td>
														</tr>
														<tr>
														  <td>Exhibits ability to learn and apply new skills</td>
														  <td><input type="radio" name="answer_34" value=1></td>
														  <td><input type="radio" name="answer_34" value=2></td>
														  <td><input type="radio" name="answer_34" value=3></td>
														  <td><input type="radio" name="answer_34" value=4></td>
														  <td><input type="radio" name="answer_34" value=5></td>
														</tr>
														<tr>
														  <td>Keeps abreast of current developments</td>
														  <td><input type="radio" name="answer_35" value=1></td>
														  <td><input type="radio" name="answer_35" value=2></td>
														  <td><input type="radio" name="answer_35" value=3></td>
														  <td><input type="radio" name="answer_35" value=4></td>
														  <td><input type="radio" name="answer_35" value=5></td>
														</tr>
														<tr>
														  <td>Requires minimal supervision</td>
														  <td><input type="radio" name="answer_36" value=1></td>
														  <td><input type="radio" name="answer_36" value=2></td>
														  <td><input type="radio" name="answer_36" value=3></td>
														  <td><input type="radio" name="answer_36" value=4></td>
														  <td><input type="radio" name="answer_36" value=5></td>
														</tr>
															<tr>
														  <td>Displays understanding of how job relates to others</td>
														  <td><input type="radio" name="answer_37" value=1></td>
														  <td><input type="radio" name="answer_37" value=2></td>
														  <td><input type="radio" name="answer_37" value=3></td>
														  <td><input type="radio" name="answer_37" value=4></td>
														  <td><input type="radio" name="answer_37" value=5></td>
														</tr>
															<tr>
														  <td>Uses resources effectively</td>
														  <td><input type="radio" name="answer_38" value=1></td>
														  <td><input type="radio" name="answer_38" value=2></td>
														  <td><input type="radio" name="answer_38" value=3></td>
														  <td><input type="radio" name="answer_38" value=4></td>
														  <td><input type="radio" name="answer_38" value=5></td>
														</tr>
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_39" ></textarea>
												  </div>                       
												 <br>
												<div class="form-actions">
													<button type="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);" >Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										
										</div>	
										<div class="tab-pane" id="judgement">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>Displays willingness to make decisions</td>
														  <td><input type="radio" name="answer_40" value=1 ></td>
														  <td><input type="radio" name="answer_40" value=2></td>
														  <td><input type="radio" name="answer_40" value=3></td>
														  <td><input type="radio" name="answer_40" value=4></td>
														  <td><input type="radio" name="answer_40" value=5></td>
														</tr>
														<tr>
														  <td>Exhibits sound and accurate judgment</td>
														  <td><input type="radio" name="answer_41" value=1 ></td>
														  <td><input type="radio" name="answer_41" value=2></td>
														  <td><input type="radio" name="answer_41" value=3></td>
														  <td><input type="radio" name="answer_41" value=4></td>
														  <td><input type="radio" name="answer_41" value=5></td>
														</tr>
														<tr>
														  <td>Supports and explains reasoning for decisions</td>
														  <td><input type="radio" name="answer_42" value=1 ></td>
														  <td><input type="radio" name="answer_42" value=2></td>
														  <td><input type="radio" name="answer_42" value=3></td>
														  <td><input type="radio" name="answer_42" value=4></td>
														  <td><input type="radio" name="answer_42" value=5></td>
														</tr>
														<tr>
														  <td>Includes appropriate people in decision-making process</td>
														  <td><input type="radio" name="answer_43" value=1 ></td>
														  <td><input type="radio" name="answer_43" value=2></td>
														  <td><input type="radio" name="answer_43" value=3></td>
														  <td><input type="radio" name="answer_43" value=4></td>
														  <td><input type="radio" name="answer_43" value=5></td>
														</tr>
															<tr>
														  <td>Makes timely decisions</td>
														  <td><input type="radio" name="answer_44" value=1 ></td>
														  <td><input type="radio" name="answer_44" value=2></td>
														  <td><input type="radio" name="answer_44" value=3></td>
														  <td><input type="radio" name="answer_44" value=4></td>
														  <td><input type="radio" name="answer_44" value=5></td>
														</tr>
													
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_45" ></textarea>
												  </div>                       
												 <br>
												<div class="form-actions">
													<button type="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);">Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										
										</div>										
										
										<div class="tab-pane" id="organization">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>Prioritizes and plans work activities</td>
														  <td><input type="radio" name="answer_46" value=1 ></td>
														  <td><input type="radio" name="answer_46" value=2></td>
														  <td><input type="radio" name="answer_46" value=3></td>
														  <td><input type="radio" name="answer_46" value=4></td>
														  <td><input type="radio" name="answer_46" value=5></td>
														</tr>
														<tr>
														  <td>Uses time efficiently</td>
														  <td><input type="radio" name="answer_47" value=1 ></td>
														  <td><input type="radio" name="answer_47" value=2></td>
														  <td><input type="radio" name="answer_47" value=3></td>
														  <td><input type="radio" name="answer_47" value=4></td>
														  <td><input type="radio" name="answer_47" value=5></td>
														</tr>
														<tr>
														  <td>Plans for additional resources</td>
														  <td><input type="radio" name="answer_48" value=1 ></td>
														  <td><input type="radio" name="answer_48" value=2></td>
														  <td><input type="radio" name="answer_48" value=3></td>
														  <td><input type="radio" name="answer_48" value=4></td>
														  <td><input type="radio" name="answer_48" value=5></td>
														</tr>
														<tr>
														  <td>Integrates changes smoothly</td>
														  <td><input type="radio" name="answer_49" value=1 ></td>
														  <td><input type="radio" name="answer_49" value=2></td>
														  <td><input type="radio" name="answer_49" value=3></td>
														  <td><input type="radio" name="answer_49" value=4></td>
														  <td><input type="radio" name="answer_49" value=5></td>
														</tr>
															<tr>
														  <td>Sets goals and objectives</td>
														  <td><input type="radio" name="answer_50" value=1 ></td>
														  <td><input type="radio" name="answer_50" value=2></td>
														  <td><input type="radio" name="answer_50" value=3></td>
														  <td><input type="radio" name="answer_50" value=4></td>
														  <td><input type="radio" name="answer_50" value=5></td>
														</tr>
																<tr>
														  <td>Works in an organized manner</td>
														  <td><input type="radio" name="answer_51" value=1 ></td>
														  <td><input type="radio" name="answer_51" value=2></td>
														  <td><input type="radio" name="answer_51" value=3></td>
														  <td><input type="radio" name="answer_51" value=4></td>
														  <td><input type="radio" name="answer_51" value=5></td>
														</tr>
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_52" ></textarea>
												  </div>                       
												 <br>
												<div class="form-actions">
													<button type="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);">Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										
										</div>		
										<div class="tab-pane" id="solving">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td> Identifies problems in a timely manner</td>
														  <td><input type="radio" name="answer_53" value=1 ></td>
														  <td><input type="radio" name="answer_53" value=2></td>
														  <td><input type="radio" name="answer_53" value=3></td>
														  <td><input type="radio" name="answer_53" value=4></td>
														  <td><input type="radio" name="answer_53" value=5></td>
														</tr>
														<tr>
														  <td> Gathers and analyzes information skillfully</td>
														  <td><input type="radio" name="answer_54" value=1 ></td>
														  <td><input type="radio" name="answer_54" value=2></td>
														  <td><input type="radio" name="answer_54" value=3></td>
														  <td><input type="radio" name="answer_54" value=4></td>
														  <td><input type="radio" name="answer_54" value=5></td>
														</tr>
														<tr>
														  <td>Develops alternative solutions</td>
														  <td><input type="radio" name="answer_55" value=1 ></td>
														  <td><input type="radio" name="answer_55" value=2></td>
														  <td><input type="radio" name="answer_55" value=3></td>
														  <td><input type="radio" name="answer_55" value=4></td>
														  <td><input type="radio" name="answer_55" value=5></td>
														</tr>
														<tr>
														  <td> Resolves problems in early stages</td>
														  <td><input type="radio" name="answer_56" value=1 ></td>
														  <td><input type="radio" name="answer_56" value=2></td>
														  <td><input type="radio" name="answer_56" value=3></td>
														  <td><input type="radio" name="answer_56" value=4></td>
														  <td><input type="radio" name="answer_56" value=5></td>
														</tr>
															<tr>
														  <td> Works well in group problem-solving situations</td>
														  <td><input type="radio" name="answer_57" value=1 ></td>
														  <td><input type="radio" name="answer_57" value=2></td>
														  <td><input type="radio" name="answer_57" value=3></td>
														  <td><input type="radio" name="answer_57" value=4></td>
														  <td><input type="radio" name="answer_57" value=5></td>
														</tr>
													
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_58" ></textarea>
												  </div>                       
												 <br>
												<div class="form-actions">
													<button type="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);">Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										
										</div>					
										<div class="tab-pane" id="quality">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td> Demonstrates accuracy and thoroughness</td>
														  <td><input type="radio" name="answer_59" value=1 ></td>
														  <td><input type="radio" name="answer_59" value=2></td>
														  <td><input type="radio" name="answer_59" value=3></td>
														  <td><input type="radio" name="answer_59" value=4></td>
														  <td><input type="radio" name="answer_59" value=5></td>
														</tr>
														<tr>
														  <td>Displays commitment to excellence</td>
														  <td><input type="radio" name="answer_60" value=1 ></td>
														  <td><input type="radio" name="answer_60" value=2></td>
														  <td><input type="radio" name="answer_60" value=3></td>
														  <td><input type="radio" name="answer_60" value=4></td>
														  <td><input type="radio" name="answer_60" value=5></td>
														</tr>
														<tr>
														  <td> Looks for ways to improve and promote quality</td>
														  <td><input type="radio" name="answer_61" value=1 ></td>
														  <td><input type="radio" name="answer_61" value=2></td>
														  <td><input type="radio" name="answer_61" value=3></td>
														  <td><input type="radio" name="answer_61" value=4></td>
														  <td><input type="radio" name="answer_61" value=5></td>
														</tr>
														<tr>
														  <td> Applies feedback to improve performance</td>
														  <td><input type="radio" name="answer_62" value=1 ></td>
														  <td><input type="radio" name="answer_62" value=2></td>
														  <td><input type="radio" name="answer_62" value=3></td>
														  <td><input type="radio" name="answer_62" value=4></td>
														  <td><input type="radio" name="answer_62" value=5></td>
														</tr>
															<tr>
														  <td> Monitors own work to ensure quality</td>
														  <td><input type="radio" name="answer_63" value=1 ></td>
														  <td><input type="radio" name="answer_63" value=2></td>
														  <td><input type="radio" name="answer_63" value=3></td>
														  <td><input type="radio" name="answer_63" value=4></td>
														  <td><input type="radio" name="answer_63" value=5></td>
														</tr>
													
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_64" ></textarea>
												  </div>                       
												 <br>
												<div class="form-actions">
													<button type="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);">Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										
										</div>																			
										<div class="tab-pane" id="quantity">
											<fieldset>
												<div class="table-responsive">
													<table class="table table-striped">
													  <thead>
														<tr>
														  <th></th>
														  <th>Unsatisfactory</th>
														  <th>Needs Improvement</th>
														  <th>Meets Job Requirements</th>
														  <th>Exceeds Job Requirements</th>
														  <th>Outstanding</th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td> Meets productivity standards</td>
														  <td><input type="radio" name="answer_65" value=1 ></td>
														  <td><input type="radio" name="answer_65" value=2></td>
														  <td><input type="radio" name="answer_65" value=3></td>
														  <td><input type="radio" name="answer_65" value=4></td>
														  <td><input type="radio" name="answer_65" value=5></td>
														</tr>
														<tr>
														  <td>Completes work in timely manner</td>
														  <td><input type="radio" name="answer_66" value=1 ></td>
														  <td><input type="radio" name="answer_66" value=2></td>
														  <td><input type="radio" name="answer_66" value=3></td>
														  <td><input type="radio" name="answer_66" value=4></td>
														  <td><input type="radio" name="answer_66" value=5></td>
														</tr>
														<tr>
														  <td>Strives to increase productivity </td>
														  <td><input type="radio" name="answer_67" value=1 ></td>
														  <td><input type="radio" name="answer_67" value=2></td>
														  <td><input type="radio" name="answer_67" value=3></td>
														  <td><input type="radio" name="answer_67" value=4></td>
														  <td><input type="radio" name="answer_67" value=5></td>
														</tr>
														<tr>
														  <td>Works quickly</td>
														  <td><input type="radio" name="answer_68" value=1 ></td>
														  <td><input type="radio" name="answer_68" value=2></td>
														  <td><input type="radio" name="answer_68" value=3></td>
														  <td><input type="radio" name="answer_68" value=4></td>
														  <td><input type="radio" name="answer_68" value=5></td>
														</tr>
															<tr>
														  <td> Achieves established goals</td>
														  <td><input type="radio" name="answer_69" value=1 ></td>
														  <td><input type="radio" name="answer_69" value=2></td>
														  <td><input type="radio" name="answer_69" value=3></td>
														  <td><input type="radio" name="answer_69" value=4></td>
														  <td><input type="radio" name="answer_69" value=5></td>
														  
														</tr>
													
													  </tbody>
													</table>
													Comments:
													<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_70" ></textarea>
												  </div>                       
												 <br>
												<div class="form-actions">
													<button type="submit" class="btn btn-primary">Save</button> 
													<button class="btn" onclick="backHome(event);">Cancel</button>
												</div> <!-- /form-actions -->
											</fieldset>
										
										</div>									
								<div class="tab-pane" id="tech">
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <thead>
												<tr>
												  <th></th>
												  <th>Unsatisfactory</th>
												  <th>Needs Improvement</th>
												  <th>Meets Job Requirements</th>
												  <th>Exceeds Job Requirements</th>
												  <th>Outstanding</th>
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <td>Demonstrates required skills</td>
												  <td><input type="radio" name="answer_71" value=1 ></td>
												  <td><input type="radio" name="answer_71" value=2></td>
												  <td><input type="radio" name="answer_71" value=3></td>
												  <td><input type="radio" name="answer_71" value=4></td>
												  <td><input type="radio" name="answer_71" value=5></td>
												</tr>
												<tr>
												  <td>Adapts to new technologies</td>
												  <td><input type="radio" name="answer_72" value=1 ></td>
												  <td><input type="radio" name="answer_72" value=2></td>
												  <td><input type="radio" name="answer_72" value=3></td>
												  <td><input type="radio" name="answer_72" value=4></td>
												  <td><input type="radio" name="answer_72" value=5></td>
												</tr>
												<tr>
												  <td>Troubleshoots problems</td>
												  <td><input type="radio" name="answer_73" value=1 ></td>
												  <td><input type="radio" name="answer_73" value=2></td>
												  <td><input type="radio" name="answer_73" value=3></td>
												  <td><input type="radio" name="answer_73" value=4></td>
												  <td><input type="radio" name="answer_73" value=5></td>
												</tr>
												<tr>
												  <td>Uses technology to increase productivity</td>
												  <td><input type="radio" name="answer_74" value=1 ></td>
												  <td><input type="radio" name="answer_74" value=2></td>
												  <td><input type="radio" name="answer_74" value=3></td>
												  <td><input type="radio" name="answer_74" value=4></td>
												  <td><input type="radio" name="answer_74" value=5></td>
												</tr>
													<tr>
												  <td>Keeps technical skills up to date</td>
												  <td><input type="radio" name="answer_75" value=1 ></td>
												<td><input type="radio" name="answer_75" value=2></td>
												<td><input type="radio" name="answer_75" value=3></td>
												<td><input type="radio" name="answer_75" value=4></td>
												<td><input type="radio" name="answer_75" value=5></td>
												</tr>
											
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer_76" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn" onclick="backHome(event);">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								
								</div>
								
								</form>
															
								</div>
									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">		
		<div class="footer-inner">
			<div class="container">
				<div class="row">
					<div class="span12">
						&copy; 2014 <a href="#">h2o</a>.
					</div> <!-- /span12 -->
				</div> <!-- /row -->
			</div> <!-- /container -->
		</div> <!-- /footer-inner -->
	</div> <!-- /footer -->

	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script>
</body>
<script>
	var userrole = '<?PHP echo $class->getCurrentUser('role'); ?>';
	
	$(function(){
		if (userrole == 'user'){
			loadUserSurvey('<?PHP echo $class->getCurrentUser('username'); ?>');
		}
	});
	function loadUserSurvey(usr){
		clearSurvey();
		var user = usr;
		var stype = '<?PHP echo $class->getCurrentUser('role'); ?>';
		$.ajax({
			cache: false,
			url: '/ajax/loadSurvey.php',
			contentType: 'JSON',
			data: {survFor: user, survType: stype },
			type: 'GET',
			dataType: 'TEXT',
			success: function(result){
				var ans = result.split('`');
				for (var i = 0; i < ans.length; i++){
					setAnswerVal(i+1, ans[i]);
				}
			},
			error: function(){
				alert('error calling ajax');
			}
		});
	}
	
	function setAnswerVal(index, val){
		var findr = 'input[name=answer_' + index + ']';
		$.each($(findr), function(i, elm){
			if ($(elm).val() == val){
				$(elm).prop('checked', true);
			}
		});
		
		//if answer is a comment
		switch(index){
			case 6:
				$('textarea[name=answer_6]').val(val);
				break;
			case 13:
				$('textarea[name=answer_13]').val(val);
				break;
			case 18:
				$('textarea[name=answer_18]').val(val);
				break;
			case 25:
				$('textarea[name=answer_25]').val(val);
				break;
			case 32:
				$('textarea[name=answer_32]').val(val);
				break;
			case 39:
				$('textarea[name=answer_39]').val(val);
				break;
			case 45:
				$('textarea[name=answer_45]').val(val);
				break;
			case 52:
				$('textarea[name=answer_52]').val(val);
				break;
			case 58:
				$('textarea[name=answer_58]').val(val);
				break;
			case 64:
				$('textarea[name=answer_64]').val(val);
				break;
			case 70:
				$('textarea[name=answer_70]').val(val);
				break;
			case 76:
				$('textarea[name=answer_76]').val(val);
				break;
		}
	}
	
	function clearSurvey(){
		var findr = 'input[type=radio]';
		$.each($(findr), function(i, elm){
			$(elm).prop('checked', false);
		});
		
		//if answer is a comment
		$('textarea[name=answer_6]').val('');
		$('textarea[name=answer_13]').val('');
		$('textarea[name=answer_18]').val('');
		$('textarea[name=answer_25]').val('');
		$('textarea[name=answer_32]').val('');
		$('textarea[name=answer_39]').val('');
		$('textarea[name=answer_45]').val('');
		$('textarea[name=answer_52]').val('');
		$('textarea[name=answer_58]').val('');
		$('textarea[name=answer_64]').val('');
		$('textarea[name=answer_70]').val('');
		$('textarea[name=answer_76]').val('');
	}
	
	function backHome(evt){
		evt.preventDefault();
		window.location.href = '/index.php';
	}
</script>

</html>
