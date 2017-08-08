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
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

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
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#communications" data-toggle="tab">Communications</a>
								</li>
								<li class="">
									<a href="#cooperation" data-toggle="tab">Cooperation</a>
								</li>
								<li class="">
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
						
						<br>
							Progress
							<div class="progress progress-striped active">
                                <div class="bar" style="width: 1%;"></div>
                            </div>
							<div class="tab-content">
								<div class="tab-pane  active" id="communications">
								<form id="edit-profile" class="form-horizontal">
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
												  <td><input type="radio"  name="oneOne" value=1 required></td>
												  <td><input type="radio"  name="oneOne" value=2></td>
												  <td><input type="radio"  name="oneOne" value=3></td>
												  <td><input type="radio"  name="oneOne" value=4></td>
												  <td><input type="radio"  name="oneOne" value=5></td>
												</tr>
												<tr>
												  <td>Expresses ideas and thoughts in written form</td>
												  <td><input type="radio"  name="oneTwo" value=1 required></td>
												  <td><input type="radio"  name="oneTwo" value=2></td>
												  <td><input type="radio"  name="oneTwo" value=3></td>
												  <td><input type="radio"  name="oneTwo" value=4></td>
												  <td><input type="radio"  name="oneTwo" value=5></td>
												</tr>
												<tr>
												  <td>Exhibits good listening and comprehension</td>
												  <td><input type="radio"  name="oneThree" value=1 required></td>
												  <td><input type="radio"  name="oneThree" value=2></td>
												  <td><input type="radio"  name="oneThree" value=3></td>
												  <td><input type="radio"  name="oneThree" value=4></td>
												  <td><input type="radio"  name="oneThree" value=5></td>
												</tr>
												<tr>
												  <td>Keeps others adequately informed</td>
												  <td><input type="radio"  name="oneFour" value=1 required></td>
												  <td><input type="radio"  name="oneFour" value=2></td>
												  <td><input type="radio"  name="oneFour" value=3></td>
												  <td><input type="radio"  name="oneFour" value=4></td>
												  <td><input type="radio"  name="oneFour" value=5></td>
												</tr>
												<tr>
												 <div class="controls">
												  <td>Uses appropriate communication methods</td>
												  <td><input type="radio"  name="oneFive" value=1 required></td>
												  <td><input type="radio"  name="oneFive" value=2></td>
												  <td><input type="radio"  name="oneFive" value=3></td>
												  <td><input type="radio"  name="oneFive" value=4></td>
												  <td><input type="radio"  name="oneFive" value=5></td>
												 </div>
												</tr>
											  </tbody>
											</table>
										  </div>                       
										 <br />
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
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
												  <td><input type="radio"  name="twoOne" value=1 required></td>
												  <td><input type="radio"  name="twoOne" value=2></td>
												  <td><input type="radio"  name="twoOne" value=3></td>
												  <td><input type="radio"  name="twoOne" value=4></td>
												  <td><input type="radio"  name="twoOne" value=5></td>
												</tr>
												<tr>
												  <td>Exhibits tact and consideration</td>
												  <td><input type="radio"  name="twoTwo" value=1 required></td>
												  <td><input type="radio"  name="twoTwo" value=2></td>
												  <td><input type="radio"  name="twoTwo" value=3></td>
												  <td><input type="radio"  name="twoTwo" value=4></td>
												  <td><input type="radio"  name="twoTwo" value=5></td>
												</tr>
												<tr>
												  <td>Displays positive outlook and pleasant manner</td>
												  <td><input type="radio"  name="twoThree" value=1 required></td>
												  <td><input type="radio"  name="twoThree" value=2></td>
												  <td><input type="radio"  name="twoThree" value=3></td>
												  <td><input type="radio"  name="twoThree" value=4></td>
												  <td><input type="radio"  name="twoThree" value=5></td>
												</tr>
												<tr>
												  <td>Offers assistance and support to coworkers</td>
												  <td><input type="radio"  name="twoFour" value=1 required></td>
												  <td><input type="radio"  name="twoFour" value=2></td>
												  <td><input type="radio"  name="twoFour" value=3></td>
												  <td><input type="radio"  name="twoFour" value=4></td>
												  <td><input type="radio"  name="twoFour" value=5></td>
												</tr>
												<tr>
												  <td>Works cooperatively in group situations</td>
												  <td><input type="radio"  name="twoFive" value=1 required></td>
												  <td><input type="radio"  name="twoFive" value=2></td>
												  <td><input type="radio"  name="twoFive" value=3></td>
												  <td><input type="radio"  name="twoFive" value=4></td>
												  <td><input type="radio"  name="twoFive" value=5></td>
												</tr>
												<tr>
												  <td>Works actively to resolve conflicts</td>
												  <td><input type="radio"  name="twoSix" value=1 required></td>
												  <td><input type="radio"  name="twoSix" value=2></td>
												  <td><input type="radio"  name="twoSix" value=3></td>
												  <td><input type="radio"  name="twoSix" value=4></td>
												  <td><input type="radio"  name="twoSix" value=5></td>
												</tr>
											  </tbody>
											</table>
											Comments:
											<textarea class="form-control" rows="3" name="CooperationComments" required></textarea>
										  </div>                       
										 <br />
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
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
  </body>
</html>
