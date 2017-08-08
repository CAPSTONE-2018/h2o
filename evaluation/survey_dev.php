<?php include('./class/loginClass.php'); ?>
<?php $class = new mainLogin(); ?>
<?php
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
	      		<div class="widget ">
	      			
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

						<form method="post" id="h2o_form" action="" name ="h2o_form" class="form-horizontal">
						<?php if($class->getCurrentUser($class->user_role) == 'admin'){  ?>
						<select id="username" name="answer[0]" class="form-control" required >
						<option value="default" disabled selected required="required" required>Select an employee to review...</option>
							<?php
								$getEmployees = mysql_query("SELECT * FROM h2o_users WHERE role != 'admin';");
								while($user = mysql_fetch_object($getEmployees)){
									echo '<option value="'.$user->username.'">'.$user->username.'</option>';
								}
							?>
						</select>
						
						<?php } ?>						
							<div class="tab-content">
								<div class="tab-pane  active" id="communications">
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
												  <td class="radio-center"><input type="radio"  name="answer[1]" value=1 required></td>
												  <td><input type="radio"  name="answer[1]" value=2></td>
												  <td><input type="radio"  name="answer[1]" value=3></td>
												  <td><input type="radio"  name="answer[1]" value=4></td>
												  <td><input type="radio"  name="answer[1]" value=5></td>
												</tr>
												<tr>
												  <td>Expresses ideas and thoughts in written form</td>
												  <td><input type="radio"  name="answer[2]" value=1 required></td>
												  <td><input type="radio"  name="answer[2]" value=2></td>
												  <td><input type="radio"  name="answer[2]" value=3></td>
												  <td><input type="radio"  name="answer[2]" value=4></td>
												  <td><input type="radio"  name="answer[2]" value=5></td>
												</tr>
												<tr>
												  <td>Exhibits good listening and comprehension</td>
												  <td><input type="radio"  name="answer[3]" value=1 required></td>
												  <td><input type="radio"  name="answer[3]" value=2></td>
												  <td><input type="radio"  name="answer[3]" value=3></td>
												  <td><input type="radio"  name="answer[3]" value=4></td>
												  <td><input type="radio"  name="answer[3]" value=5></td>
												</tr>
												<tr>
												  <td>Keeps others adequately informed</td>
												  <td><input type="radio"  name="answer[4]" value=1 required></td>
												  <td><input type="radio"  name="answer[4]" value=2></td>
												  <td><input type="radio"  name="answer[4]" value=3></td>
												  <td><input type="radio"  name="answer[4]" value=4></td>
												  <td><input type="radio"  name="answer[4]" value=5></td>
												</tr>
												<tr>
												 <div class="controls">
												  <td>Uses appropriate communication methods</td>
												  <td><input type="radio"  name="answer[5]" value=1 required></td>
												  <td><input type="radio"  name="answer[5]" value=2></td>
												  <td><input type="radio"  name="answer[5]" value=3></td>
												  <td><input type="radio"  name="answer[5]" value=4></td>
												  <td><input type="radio"  name="answer[5]" value=5></td>
												 </div>
												</tr>
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[6]" ></textarea>
										  </div>                       
										 <br />
										<div class="form-actions">
											<button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio"  name="answer[7]" value=1></td>
												  <td><input type="radio"  name="answer[7]" value=2></td>
												  <td><input type="radio"  name="answer[7]" value=3></td>
												  <td><input type="radio"  name="answer[7]" value=4></td>
												  <td><input type="radio"  name="answer[7]" value=5></td>
												</tr>
												<tr >
												  <td>Exhibits tact and consideration</td>
												  <td><input type="radio"  name="answer[8]" value=1></td>
												  <td><input type="radio"  name="answer[8]" value=2></td>
												  <td><input type="radio"  name="answer[8]" value=3></td>
												  <td><input type="radio"  name="answer[8]" value=4></td>
												  <td><input type="radio"  name="answer[8]" value=5></td>
												</tr>
												<tr>
												  <td>Displays positive outlook and pleasant manner</td>
												  <td><input type="radio"  name="answer[9]" value=1></td>
												  <td><input type="radio"  name="answer[9]" value=2></td>
												  <td><input type="radio"  name="answer[9]" value=3></td>
												  <td><input type="radio"  name="answer[9]" value=4></td>
												  <td><input type="radio"  name="answer[9]" value=5></td>
												</tr>
												<tr>
												  <td>Offers assistance and support to coworkers</td>
												  <td><input type="radio"  name="answer[10]" value=1></td>
												  <td><input type="radio"  name="answer[10]" value=2></td>
												  <td><input type="radio"  name="answer[10]" value=3></td>
												  <td><input type="radio"  name="answer[10]" value=4></td>
												  <td><input type="radio"  name="answer[10]" value=5></td>
												</tr>
												<tr>
												  <td>Works cooperatively in group situations</td>
												  <td><input type="radio"  name="answer[11]" value=1></td>
												  <td><input type="radio"  name="answer[11]" value=2></td>
												  <td><input type="radio"  name="answer[11]" value=3></td>
												  <td><input type="radio"  name="answer[11]" value=4></td>
												  <td><input type="radio"  name="answer[11]" value=5></td>
												</tr>
												<tr>
												  <td>Works actively to resolve conflicts</td>
												  <td><input type="radio"  name="answer[12]" value=1></td>
												  <td><input type="radio"  name="answer[12]" value=2></td>
												  <td><input type="radio"  name="answer[12]" value=3></td>
												  <td><input type="radio"  name="answer[12]" value=4></td>
												  <td><input type="radio"  name="answer[12]" value=5></td>
												</tr>
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[13]" ></textarea>
										  </div>                       
										 <br />
										<div class="form-actions">
									        <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[14]" value=1 required></td>
												  <td><input type="radio" name="answer[14]" value=2></td>
												  <td><input type="radio" name="answer[14]" value=3></td>
												  <td><input type="radio" name="answer[14]" value=4></td>
												  <td><input type="radio" name="answer[15]" value=5></td>
												</tr>
												<tr>
												  <td>Conserves organizational resources</td>
												  <td><input type="radio" name="answer[15]" value=1 required></td>
												  <td><input type="radio" name="answer[15]" value=2></td>
												  <td><input type="radio" name="answer[15]" value=3></td>
												  <td><input type="radio" name="answer[15]" value=4></td>
												  <td><input type="radio" name="answer[15]" value=5></td>
												</tr>
												<tr>
												  <td>Develops and implements cost-saving measures</td>
												  <td><input type="radio" name="answer[16]" value=1 required></td>
												  <td><input type="radio" name="answer[16]" value=2></td>
												  <td><input type="radio" name="answer[16]" value=3></td>
												  <td><input type="radio" name="answer[16]" value=4></td>
												  <td><input type="radio" name="answer[16]" value=5></td>
												</tr>
												<tr>
												  <td>Contributes to profits and revenue</td>
												  <td><input type="radio" name="answer[17]" value="1" required></td>
												  <td><input type="radio" name="answer[17]" value=2></td>
												  <td><input type="radio" name="answer[17]" value=3></td>
												  <td><input type="radio" name="answer[17]" value=4></td>
												  <td><input type="radio" name="answer[17]" value=5></td>
												</tr>
												
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[18]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[19]" value=1 ></td>
												  <td><input type="radio" name="answer[19]" value=2></td>
												  <td><input type="radio" name="answer[19]" value=3></td>
												  <td><input type="radio" name="answer[19]" value=4></td>
												  <td><input type="radio" name="answer[19]" value=5></td>
												</tr>
												<tr>
												  <td>Follows instructions, responds to management direction</td>
												  <td><input type="radio" name="answer[20]" value=1 ></td>
												  <td><input type="radio" name="answer[20]" value=2></td>
												  <td><input type="radio" name="answer[20]" value=3></td>
												  <td><input type="radio" name="answer[20]" value=4></td>
												  <td><input type="radio" name="answer[20]" value=5></td>
												</tr>
												<tr>
												  <td>Takes responsibility for own actions</td>
												  <td><input type="radio" name="answer[21]" value=1 ></td>
												  <td><input type="radio" name="answer[21]" value=2></td>
												  <td><input type="radio" name="answer[21]" value=3></td>
												  <td><input type="radio" name="answer[21]" value=4></td>
												  <td><input type="radio" name="answer[21]" value=5></td>
												</tr>
												<tr>
												  <td>Commits to doing best job possible</td>
												  <td><input type="radio" name="answer[22]" value=1 ></td>
												  <td><input type="radio" name="answer[22]" value=2></td>
												  <td><input type="radio" name="answer[22]" value=3></td>
												  <td><input type="radio" name="answer[22]" value=4></td>
												  <td><input type="radio" name="answer[22]" value=5></td>
												</tr>
													<tr>
												  <td>Keeps commitments</td>
												  <td><input type="radio" name="answer[23]" value=1 ></td>
												  <td><input type="radio" name="answer[23]" value=2></td>
												  <td><input type="radio" name="answer[23]" value=3></td>
												  <td><input type="radio" name="answer[23]" value=4></td>
												  <td><input type="radio" name="answer[23]" value=5></td>
												</tr>
													<tr>
												  <td>Meets attendance and punctuality guidelines</td>
												  <td><input type="radio" name="answer[24]" value=1 ></td>
												  <td><input type="radio" name="answer[24]" value=2></td>
												  <td><input type="radio" name="answer[24]" value=3></td>
												  <td><input type="radio" name="answer[24]" value=4></td>
												  <td><input type="radio" name="answer[24]" value=5></td>
												</tr>
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[25]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[26]" value=1 ></td>
												  <td><input type="radio" name="answer[26]" value=2></td>
												  <td><input type="radio" name="answer[26]" value=3></td>
												  <td><input type="radio" name="answer[26]" value=4></td>
												  <td><input type="radio" name="answer[26]" value=5></td>
												</tr>
												<tr>
												  <td>Undertakes self-development activities</td>
												  <td><input type="radio" name="answer[27]" value=1 ></td>
												  <td><input type="radio" name="answer[27]" value=2></td>
												  <td><input type="radio" name="answer[27]" value=3></td>
												  <td><input type="radio" name="answer[27]" value=4></td>
												  <td><input type="radio" name="answer[27]" value=5></td>
												</tr>
												<tr>
												  <td>Seeks increased responsibilities</td>
												  <td><input type="radio" name="answer[28]" value=1 ></td>
												  <td><input type="radio" name="answer[28]" value=2></td>
												  <td><input type="radio" name="answer[28]" value=3></td>
												  <td><input type="radio" name="answer[28]" value=4></td>
												  <td><input type="radio" name="answer[28]" value=5></td>
												</tr>
												<tr>
												  <td>Takes independent actions and calculated risks </td>
												  <td><input type="radio" name="answer[29]" value=1 ></td>
												  <td><input type="radio" name="answer[29]" value=2></td>
												  <td><input type="radio" name="answer[29]" value=3></td>
												  <td><input type="radio" name="answer[29]" value=4></td>
												  <td><input type="radio" name="answer[29]" value=5></td>
												</tr>
													<tr>
												  <td>Looks for and takes advantage of opportunities</td>
												  <td><input type="radio" name="answer[30]" value=1 ></td>
												  <td><input type="radio" name="answer[30]" value=2></td>
												  <td><input type="radio" name="answer[30]" value=3></td>
												  <td><input type="radio" name="answer[30]" value=4></td>
												  <td><input type="radio" name="answer[30]" value=5></td>
												</tr>
													<tr>
												  <td>Asks for help when needed</td>
												  <td><input type="radio" name="answer[31]" value=1 ></td>
												  <td><input type="radio" name="answer[31]" value=2></td>
												  <td><input type="radio" name="answer[31]" value=3></td>
												  <td><input type="radio" name="answer[31]" value=4></td>
												  <td><input type="radio" name="answer[31]" value=5></td>
												</tr>
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[32]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[33]" value=1 ></td>
												  <td><input type="radio" name="answer[33]" value=2></td>
												  <td><input type="radio" name="answer[33]" value=3></td>
												  <td><input type="radio" name="answer[33]" value=4></td>
												  <td><input type="radio" name="answer[33]" value=5></td>
												</tr>
												<tr>
												  <td>Exhibits ability to learn and apply new skills</td>
												  <td><input type="radio" name="answer[34]" value=1 ></td>
												  <td><input type="radio" name="answer[34]" value=2></td>
												  <td><input type="radio" name="answer[34]" value=3></td>
												  <td><input type="radio" name="answer[34]" value=4></td>
												  <td><input type="radio" name="answer[34]" value=5></td>
												</tr>
												<tr>
												  <td>Keeps abreast of current developments</td>
												  <td><input type="radio" name="answer[35]" value=1 ></td>
												  <td><input type="radio" name="answer[35]" value=2></td>
												  <td><input type="radio" name="answer[35]" value=3></td>
												  <td><input type="radio" name="answer[35]" value=4></td>
												  <td><input type="radio" name="answer[35]" value=5></td>
												</tr>
												<tr>
												  <td>Requires minimal supervision</td>
												  <td><input type="radio" name="answer[36]" value=1 ></td>
												  <td><input type="radio" name="answer[36]" value=2></td>
												  <td><input type="radio" name="answer[36]" value=3></td>
												  <td><input type="radio" name="answer[36]" value=4></td>
												  <td><input type="radio" name="answer[36]" value=5></td>
												</tr>
													<tr>
												  <td>Displays understanding of how job relates to others</td>
												  <td><input type="radio" name="answer[37]" value=1 ></td>
												  <td><input type="radio" name="answer[37]" value=2></td>
												  <td><input type="radio" name="answer[37]" value=3></td>
												  <td><input type="radio" name="answer[37]" value=4></td>
												  <td><input type="radio" name="answer[37]" value=5></td>
												</tr>
													<tr>
												  <td>Uses resources effectively</td>
												  <td><input type="radio" name="answer[38]" value=1 ></td>
												  <td><input type="radio" name="answer[38]" value=2></td>
												  <td><input type="radio" name="answer[38]" value=3></td>
												  <td><input type="radio" name="answer[38]" value=4></td>
												  <td><input type="radio" name="answer[38]" value=5></td>
												</tr>
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[39]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[40]" value=1 ></td>
												  <td><input type="radio" name="answer[40]" value=2></td>
												  <td><input type="radio" name="answer[40]" value=3></td>
												  <td><input type="radio" name="answer[40]" value=4></td>
												  <td><input type="radio" name="answer[40]" value=5></td>
												</tr>
												<tr>
												  <td>Exhibits sound and accurate judgment</td>
												  <td><input type="radio" name="answer[41]" value=1 ></td>
												  <td><input type="radio" name="answer[41]" value=2></td>
												  <td><input type="radio" name="answer[41]" value=3></td>
												  <td><input type="radio" name="answer[41]" value=4></td>
												  <td><input type="radio" name="answer[41]" value=5></td>
												</tr>
												<tr>
												  <td>Supports and explains reasoning for decisions</td>
												  <td><input type="radio" name="answer[42]" value=1 ></td>
												  <td><input type="radio" name="answer[42]" value=2></td>
												  <td><input type="radio" name="answer[42]" value=3></td>
												  <td><input type="radio" name="answer[42]" value=4></td>
												  <td><input type="radio" name="answer[42]" value=5></td>
												</tr>
												<tr>
												  <td>Includes appropriate people in decision-making process</td>
												  <td><input type="radio" name="answer[43]" value=1 ></td>
												  <td><input type="radio" name="answer[43]" value=2></td>
												  <td><input type="radio" name="answer[43]" value=3></td>
												  <td><input type="radio" name="answer[43]" value=4></td>
												  <td><input type="radio" name="answer[43]" value=5></td>
												</tr>
													<tr>
												  <td>Makes timely decisions</td>
												  <td><input type="radio" name="answer[44]" value=1 ></td>
												  <td><input type="radio" name="answer[44]" value=2></td>
												  <td><input type="radio" name="answer[44]" value=3></td>
												  <td><input type="radio" name="answer[44]" value=4></td>
												  <td><input type="radio" name="answer[44]" value=5></td>
												</tr>
											
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[45]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[46]" value=1 ></td>
												  <td><input type="radio" name="answer[46]" value=2></td>
												  <td><input type="radio" name="answer[46]" value=3></td>
												  <td><input type="radio" name="answer[46]" value=4></td>
												  <td><input type="radio" name="answer[46]" value=5></td>
												</tr>
												<tr>
												  <td>Uses time efficiently</td>
												  <td><input type="radio" name="answer[47]" value=1 ></td>
												  <td><input type="radio" name="answer[47]" value=2></td>
												  <td><input type="radio" name="answer[47]" value=3></td>
												  <td><input type="radio" name="answer[47]" value=4></td>
												  <td><input type="radio" name="answer[47]" value=5></td>
												</tr>
												<tr>
												  <td>Plans for additional resources</td>
												  <td><input type="radio" name="answer[48]" value=1 ></td>
												  <td><input type="radio" name="answer[48]" value=2></td>
												  <td><input type="radio" name="answer[48]" value=3></td>
												  <td><input type="radio" name="answer[48]" value=4></td>
												  <td><input type="radio" name="answer[48]" value=5></td>
												</tr>
												<tr>
												  <td>Integrates changes smoothly</td>
												  <td><input type="radio" name="answer[49]" value=1 ></td>
												  <td><input type="radio" name="answer[49]" value=2></td>
												  <td><input type="radio" name="answer[49]" value=3></td>
												  <td><input type="radio" name="answer[49]" value=4></td>
												  <td><input type="radio" name="answer[49]" value=5></td>
												</tr>
													<tr>
												  <td>Sets goals and objectives</td>
												  <td><input type="radio" name="answer[50]" value=1 ></td>
												  <td><input type="radio" name="answer[50]" value=2></td>
												  <td><input type="radio" name="answer[50]" value=3></td>
												  <td><input type="radio" name="answer[50]" value=4></td>
												  <td><input type="radio" name="answer[50]" value=5></td>
												</tr>
														<tr>
												  <td>Works in an organized manner</td>
												  <td><input type="radio" name="answer[51]" value=1 ></td>
												  <td><input type="radio" name="answer[51]" value=2></td>
												  <td><input type="radio" name="answer[51]" value=3></td>
												  <td><input type="radio" name="answer[51]" value=4></td>
												  <td><input type="radio" name="answer[51]" value=5></td>
												</tr>
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[52]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[53]" value=1 ></td>
												  <td><input type="radio" name="answer[53]" value=2></td>
												  <td><input type="radio" name="answer[53]" value=3></td>
												  <td><input type="radio" name="answer[53]" value=4></td>
												  <td><input type="radio" name="answer[53]" value=5></td>
												</tr>
												<tr>
												  <td> Gathers and analyzes information skillfully</td>
												  <td><input type="radio" name="answer[54]" value=1 ></td>
												  <td><input type="radio" name="answer[54]" value=2></td>
												  <td><input type="radio" name="answer[54]" value=3></td>
												  <td><input type="radio" name="answer[54]" value=4></td>
												  <td><input type="radio" name="answer[54]" value=5></td>
												</tr>
												<tr>
												  <td>Develops alternative solutions</td>
												  <td><input type="radio" name="answer[55]" value=1 ></td>
												  <td><input type="radio" name="answer[55]" value=2></td>
												  <td><input type="radio" name="answer[55]" value=3></td>
												  <td><input type="radio" name="answer[55]" value=4></td>
												  <td><input type="radio" name="answer[55]" value=5></td>
												</tr>
												<tr>
												  <td> Resolves problems in early stages</td>
												  <td><input type="radio" name="answer[56]" value=1 ></td>
												  <td><input type="radio" name="answer[56]" value=2></td>
												  <td><input type="radio" name="answer[56]" value=3></td>
												  <td><input type="radio" name="answer[56]" value=4></td>
												  <td><input type="radio" name="answer[56]" value=5></td>
												</tr>
													<tr>
												  <td> Works well in group problem-solving situations</td>
												  <td><input type="radio" name="answer[57]" value=1 ></td>
												  <td><input type="radio" name="answer[57]" value=2></td>
												  <td><input type="radio" name="answer[57]" value=3></td>
												  <td><input type="radio" name="answer[57]" value=4></td>
												  <td><input type="radio" name="answer[57]" value=5></td>
												</tr>
											
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[58]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[59]" value=1 ></td>
												  <td><input type="radio" name="answer[59]" value=2></td>
												  <td><input type="radio" name="answer[59]" value=3></td>
												  <td><input type="radio" name="answer[59]" value=4></td>
												  <td><input type="radio" name="answer[59]" value=5></td>
												</tr>
												<tr>
												  <td>Displays commitment to excellence</td>
												  <td><input type="radio" name="answer[60]" value=1 ></td>
												  <td><input type="radio" name="answer[60]" value=2></td>
												  <td><input type="radio" name="answer[60]" value=3></td>
												  <td><input type="radio" name="answer[60]" value=4></td>
												  <td><input type="radio" name="answer[60]" value=5></td>
												</tr>
												<tr>
												  <td> Looks for ways to improve and promote quality</td>
												  <td><input type="radio" name="answer[61]" value=1 ></td>
												  <td><input type="radio" name="answer[61]" value=2></td>
												  <td><input type="radio" name="answer[61]" value=3></td>
												  <td><input type="radio" name="answer[61]" value=4></td>
												  <td><input type="radio" name="answer[61]" value=5></td>
												</tr>
												<tr>
												  <td> Applies feedback to improve performance</td>
												  <td><input type="radio" name="answer[62]" value=1 ></td>
												  <td><input type="radio" name="answer[62]" value=2></td>
												  <td><input type="radio" name="answer[62]" value=3></td>
												  <td><input type="radio" name="answer[62]" value=4></td>
												  <td><input type="radio" name="answer[62]" value=5></td>
												</tr>
													<tr>
												  <td> Monitors own work to ensure quality</td>
												  <td><input type="radio" name="answer[63]" value=1 ></td>
												  <td><input type="radio" name="answer[63]" value=2></td>
												  <td><input type="radio" name="answer[63]" value=3></td>
												  <td><input type="radio" name="answer[63]" value=4></td>
												  <td><input type="radio" name="answer[63]" value=5></td>
												</tr>
											
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[64]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[65]" value=1 ></td>
												  <td><input type="radio" name="answer[65]" value=2></td>
												  <td><input type="radio" name="answer[65]" value=3></td>
												  <td><input type="radio" name="answer[65]" value=4></td>
												  <td><input type="radio" name="answer[65]" value=5></td>
												</tr>
												<tr>
												  <td>Completes work in timely manner</td>
												  <td><input type="radio" name="answer[66]" value=1 ></td>
												  <td><input type="radio" name="answer[66]" value=2></td>
												  <td><input type="radio" name="answer[66]" value=3></td>
												  <td><input type="radio" name="answer[66]" value=4></td>
												  <td><input type="radio" name="answer[66]" value=5></td>
												</tr>
												<tr>
												  <td>Strives to increase productivity </td>
												  <td><input type="radio" name="answer[67]" value=1 ></td>
												  <td><input type="radio" name="answer[67]" value=2></td>
												  <td><input type="radio" name="answer[67]" value=3></td>
												  <td><input type="radio" name="answer[67]" value=4></td>
												  <td><input type="radio" name="answer[67]" value=5></td>
												</tr>
												<tr>
												  <td>Works quickly</td>
												  <td><input type="radio" name="answer[68]" value=1 ></td>
												  <td><input type="radio" name="answer[68]" value=2></td>
												  <td><input type="radio" name="answer[68]" value=3></td>
												  <td><input type="radio" name="answer[68]" value=4></td>
												  <td><input type="radio" name="answer[68]" value=5></td>
												</tr>
													<tr>
												  <td> Achieves established goals</td>
												  <td><input type="radio" name="answer[69]" value=1 ></td>
												  <td><input type="radio" name="answer[69]" value=2></td>
												  <td><input type="radio" name="answer[69]" value=3></td>
												  <td><input type="radio" name="answer[69]" value=4></td>
												  <td><input type="radio" name="answer[69]" value=5></td>
												  
												</tr>
											
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[70]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
												  <td><input type="radio" name="answer[71]" value=1 ></td>
												  <td><input type="radio" name="answer[71]" value=2></td>
												  <td><input type="radio" name="answer[71]" value=3></td>
												  <td><input type="radio" name="answer[71]" value=4></td>
												  <td><input type="radio" name="answer[71]" value=5></td>
												</tr>
												<tr>
												  <td>Adapts to new technologies</td>
												  <td><input type="radio" name="answer[72]" value=1 ></td>
												  <td><input type="radio" name="answer[72]" value=2></td>
												  <td><input type="radio" name="answer[72]" value=3></td>
												  <td><input type="radio" name="answer[72]" value=4></td>
												  <td><input type="radio" name="answer[72]" value=5></td>
												</tr>
												<tr>
												  <td>Troubleshoots problems</td>
												  <td><input type="radio" name="answer[73]" value=1 ></td>
												  <td><input type="radio" name="answer[73]" value=2></td>
												  <td><input type="radio" name="answer[73]" value=3></td>
												  <td><input type="radio" name="answer[73]" value=4></td>
												  <td><input type="radio" name="answer[73]" value=5></td>
												</tr>
												<tr>
												  <td>Uses technology to increase productivity</td>
												  <td><input type="radio" name="answer[74]" value=1 ></td>
												  <td><input type="radio" name="answer[74]" value=2></td>
												  <td><input type="radio" name="answer[74]" value=3></td>
												  <td><input type="radio" name="answer[74]" value=4></td>
												  <td><input type="radio" name="answer[74]" value=5></td>
												</tr>
													<tr>
												  <td>Keeps technical skills up to date</td>
												  <td><input type="radio" name="answer[75]" value=1 ></td>
												<td><input type="radio" name="answer[75]" value=2></td>
												<td><input type="radio" name="answer[75]" value=3></td>
												<td><input type="radio" name="answer[75]" value=4></td>
												<td><input type="radio" name="answer[75]" value=5></td>
												</tr>
											
											  </tbody>
											</table>
											Comments:
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[76]" ></textarea>
										  </div>                       
										 <br>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								
								</div>
								
								</form>
															
								</div>
									<?php
										if(isset($_POST['submit']))
										{
											include  "class//User.php";
											include_once  "class//Survey.php";
											//echo $class->getCurrentUser($class->username_field);
											$user=User::loadF($class->getCurrentUser($class->username_field));
											echo $user->Name;
											echo "INSERT THIS INTO THE DB! ->    " . implode(",",$_POST['answer']);
											echo "</br> Get Current User's <b>Username</b> = " . $class->getCurrentUser($class->username_field);
											echo "</br> Get Current User's <b>id</b> = " . $class->getCurrentUser($class->username_id_field);
											echo "</br> Get Current User's <b>role</b> = " . $class->getCurrentUser($class->user_role);
											echo "<br/><br/>And here's output from dictionary (Key is question and value is the radio button value): </br>";
											
											foreach ($_POST['answer'] as $surveyNum => $answer) {
												echo "<br/>Your input for question " . $surveyNum . " was " . $answer;
												
											}
											$s=new Survey();
											$s->answers=$_POST['answer'];
											$idNum=$s->create();
											if($class->getCurrentUser($class->user_role)=="user")
											{
												$user->selfSurvey=$idNum;
												//$user->adminSurvey=$idNum;
											}
											else
											{
												$user->adminSurvey=$idNum;
											}
											echo $idNum;
											$user->save();
											$user->draw("D");
										}
								    ?>
							</div>
						</div>

						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->

	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->

<div class="extra">

	<div class="extra-inner">

		<div class="container">

			<div class="row">
                    <div class="span4">
                        <h4>
                            Footer Row 1</h4>
                        <ul>
                            <li><a href="javascript:;">Test</a></li>
                            <li><a href="javascript:;">Test2</a></li>
                            <li><a href="javascript:;">Test3</a></li>
                            <li><a href="javascript:;">Test4</a></li>
                        </ul>
                    </div>
                    <!-- /span4 -->
                    <div class="span4">
                        <h4>
                            Row 2</h4>
                        <ul>
                                          <li><a href="javascript:;">Test</a></li>
                            <li><a href="javascript:;">Test2</a></li>
                            <li><a href="javascript:;">Test3</a></li>
                            <li><a href="javascript:;">Test4</a></li>
                        </ul>
                    </div>
                    <!-- /span4 -->
                    <div class="span4">
                        <h4>
                            Row 3</h4>
                        <ul>
                            <li><a href="javascript:;">Test</a></li>
                            <li><a href="javascript:;">Test2</a></li>
                            <li><a href="javascript:;">Test3</a></li>
                            <li><a href="javascript:;">Test4</a></li>
                        </ul>
                    </div>
                    <!-- /span4 -->
                </div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /extra-inner -->

</div> <!-- /extra -->
<?php } ?>
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


	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script>
	
  <script src="js/progressBar.js"></script>
  
  </body>
   

</html>
