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


<?php include 'navbar.php';?>

<div class="main">
	<div class="main-inner">
	    <div class="container">
	      <div class="row">
	      	<div class="span12">      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Survey Results</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<div class="tabbable">
							

							<form method="post" id="h2o_form" action="" name ="h2o_form" class="form-horizontal">
							<div class="tab-content">
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Communications</u></h2>
											  <tbody>
												<tr>
												  <td>Expresses ideas and thoughts verbally :</td>
												</tr>
												<tr>
												  <td>Expresses ideas and thoughts in written form :</td>
												</tr>
												<tr>
												  <td>Exhibits good listening and comprehension :</td>
												</tr>
												<tr>
												  <td>Keeps others adequately informed :</td>
												</tr>
												<tr>
												 <div class="controls">
												  <td>Uses appropriate communication methods :</td>
												 </div>
												</tr>
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br />
									</fieldset>
								
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Cooperation</u></h2>
											  <tbody>
												<tr>
												  <td>Establishes and maintains effective relations :</td>
												</tr>
												<tr >
												  <td>Exhibits tact and consideration :</td>
												</tr>
												<tr>
												  <td>Displays positive outlook and pleasant manner :</td>
												</tr>
												<tr>
												  <td>Offers assistance and support to coworkers :</td>
												</tr>
												<tr>
												  <td>Works cooperatively in group situations :</td>
												</tr>
												<tr>
												  <td>Works actively to resolve conflicts :</td>
												</tr>
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br />
									</fieldset>
									
									
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Cost Consciousness</u></h2>
											  <tbody>
												<tr>
												  <td>Works within approved budget :</td>
												</tr>
												<tr>
												  <td>Conserves organizational resources :</td>
												</tr>
												<tr>
												  <td>Develops and implements cost-saving measures :</td>
												</tr>
												<tr>
												  <td>Contributes to profits and revenue :</td>
												</tr>
												
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
								
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Dependability</u></h2>
											  <tbody>
												<tr>
												  <td>Responds to requests for service and assistance :</td>
												<tr>
												  <td>Follows instructions, responds to management direction :</td>
												</tr>
												<tr>
												  <td>Takes responsibility for own actions :</td>
												</tr>
												<tr>
												  <td>Commits to doing best job possible :</td>
												</tr>
													<tr>
												  <td>Keeps commitments :</td>
												</tr>
													<tr>
												  <td>Meets attendance and punctuality guidelines :</td>
												</tr>
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
									
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Initiative</u></h2>
											  <tbody>
												<tr>
												  <td>Volunteers readily :</td>
												</tr>
												<tr>
												  <td>Undertakes self-development activities :</td>
												</tr>
												<tr>
												  <td>Seeks increased responsibilities :</td>
												</tr>
												<tr>
												  <td>Takes independent actions and calculated risks :</td>
												</tr>
													<tr>
												  <td>Looks for and takes advantage of opportunities :</td>
												</tr>
													<tr>
												  <td>Asks for help when needed :</td>
												</tr>
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
								
										
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Job Knowledge</u></h2>
											  <tbody>
												<tr>
												  <td>Competent in required job skills and knowledge :</td>
												</tr>
												<tr>
												  <td>Exhibits ability to learn and apply new skills :</td>
												</tr>
												<tr>
												  <td>Keeps abreast of current developments :</td>
												</tr>
												<tr>
												  <td>Requires minimal supervision :</td>
												</tr>
													<tr>
												  <td>Displays understanding of how job relates to others :</td>
												</tr>
													<tr>
												  <td>Uses resources effectively :</td>
												</tr>
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
									
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Judgement</u></h2>
											  <tbody>
												<tr>
												  <td>Displays willingness to make decisions :</td>
												</tr>
												<tr>
												  <td>Exhibits sound and accurate judgement :</td>
												</tr>
												<tr>
												  <td>Supports and explains reasoning for decisions :</td>
												</tr>
												<tr>
												  <td>Includes appropriate people in decision-making process :</td>
												</tr>
													<tr>
												  <td>Makes timely decisions :</td>
												</tr>
											
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
																	
								
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Planning & Organization</u></h2>
											  <tbody>
												<tr>
												  <td>Prioritizes and plans work activities :</td>
												</tr>
												<tr>
												  <td>Uses time efficiently :</td>
												</tr>
												<tr>
												  <td>Plans for additional resources :</td>
												</tr>
												<tr>
												  <td>Integrates changes smoothly :</td>
												</tr>
													<tr>
												  <td>Sets goals and objectives :</td>
												</tr>
														<tr>
												  <td>Works in an organized manner :</td>
												</tr>
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
										
									
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Problem Solving</u></h2>
											  <tbody>
												<tr>
												  <td> Identifies problems in a timely manner :</td>
												</tr>
												<tr>
												  <td> Gathers and analyzes information skillfully :</td>
												</tr>
												<tr>
												  <td>Develops alternative solutions :</td>
												</tr>
												<tr>
												  <td> Resolves problems in early stages :</td>
												</tr>
													<tr>
												  <td> Works well in group problem-solving situations :</td>
												</tr>
											
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
												
											
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Quality</u></h2>
											  <tbody>
												<tr>
												  <td> Demonstrates accuracy and thoroughness :</td>
												</tr>
												<tr>
												  <td>Displays commitment to excellence :</td>
												</tr>
												<tr>
												  <td> Looks for ways to improve and promote quality :</td>
												</tr>
												<tr>
												  <td> Applies feedback to improve performance :</td>
												</tr>
													<tr>
												  <td> Monitors own work to ensure quality :</td>
												</tr>
											
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
																										
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Quantity</u></h2>
											  <tbody>
												<tr>
												  <td> Meets productivity standards :</td>
												</tr>
												<tr>
												  <td>Completes work in timely manner :</td>
												</tr>
												<tr>
												  <td>Strives to increase productivity :</td>
												</tr>
												<tr>
												  <td>Works quickly:</td>
												</tr>
													<tr>
												  <td> Achieves established goals :</td>
												  
												</tr>
											
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
								
									<fieldset>
										<div class="table-responsive">
											<table class="table table-striped">
											  <h2><u>Use of Technology</u></h2>
											  <tbody>
												<tr>
												  <td>Demonstrates required skills :</td>
												</tr>
												<tr>
												  <td>Adapts to new technologies :</td>
												</tr>
												<tr>
												  <td>Troubleshoots problems :</td>
												</tr>
												<tr>
												  <td>Uses technology to increase productivity :</td>
												</tr>
													<tr>
												  <td>Keeps technical skills up to date :</td>
												</tr>
											
											  </tbody>
											</table>
											Comments :
										  </div>                       
										 <br>
									</fieldset>
								
								
								
								</form>
															
								</div>
							</div>
						</div>

						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->

	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->



	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script>

  </body>
   

</html>