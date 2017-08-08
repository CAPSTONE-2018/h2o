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
	
	<script>
    window.open    = function(){};
    window.print   = function(){};
    // Support hover state for mobile.
    if (false) {
      window.ontouchstart = function(){};
    }

    function __linkClick(e) {
      parent.window.postMessage(this.href, '*');
    };

    function __bindToLinks() {
      var __links = document.querySelectorAll('a');
      for (var i = 0, l = __links.length; i < l; i++) {
        if ( __links[i].getAttribute('data-t') == '_blank' ) {
          __links[i].addEventListener('click', __linkClick, false);
        }
      }
    }
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
												  <td><input type="radio"  name="answer[1]" value=1 required></td>
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
											<textarea id="textarea" style="width:100%"class="form-control" rows="3" maxlength="150" name="answer[6]" required></textarea>
										  </div>                       
										 <br />
										<div class="form-actions">
											<button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</div>								
							
								</form>
															
								</div>
									<?php
										if(isset($_POST['submit']))
										{
											echo "INSERT THIS INTO THE DB! ->    " . implode(",",$_POST['answer']);
											echo "</br> Get Current User's <b>Username</b> = " . $class->getCurrentUser($class->username_field);
											echo "</br> Get Current User's <b>id</b> = " . $class->getCurrentUser($class->username_id_field);
											echo "</br> Get Current User's <b>role</b> = " . $class->getCurrentUser($class->user_role);
											echo "<br/><br/>And here's output from dictionary (Key is question and value is the radio button value): </br>";
											
											foreach ($_POST['answer'] as $surveyNum => $answer) {
												echo "<br/>Your input for question " . $surveyNum . " was " . $answer;
												
											}
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
	<script>
    	$(document).ready(function() {
			  $('#h2o_form').showProgress();
		  });
    </script>
	
	<script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage('resize', "*");
    }
    __bindToLinks();
  </script>
  <script>
    /*
	jQuery Plugin
	Name: Collapsible Progress Bar
	Version: 0.8
	Description: Uses Twitter Bootstrap 3.0 styling to present an accessible, simple progress bar for a web form, with customizable messages of encouragement.
	Dependencies: Bootstrap 3.0 (http://getbootstrap.com/), Font Awesome 4.0.3 (http://fortawesome.github.io/Font-Awesome/), jQuery 1.10.2 or later (http://jquery.com/)
	Author: Joshua Blackwood
	Copyright: 2013 Joshua Blackwood under the MIT License (http://opensource.org/licenses/MIT)
 */

(function($) {

	$.fn.showProgress = function(options) {

		var defaults = {
			message: {
				'100': ' - All done! Just click the <strong>Save</strong> button to continue!'
			},
			position: 'bottom'
		};

		options = $.extend(defaults, options);

		var markup = '<!-- Progress Bar --><div class="navbar navbar-default navbar-fixed-'+ options.position +'" id="progress-bar-wrap"><div class="container"><h4 style="padding-top: 4px; padding-bottom:4px;">Completion Progress  <small class="encouragement"></small><button type="button" class="close" data-dismiss="progress-bar" aria-hidden="true" title="Collapse"><span class="sr-only"></span></button></h4><div class="progress"><div id="form-progress" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span class="sr-only" style="color: transparent;"></span></div></div></div></div> <!-- /progress bar -->';

		$('body').append(markup);

		var dismiss = $('button[data-dismiss="progress-bar"]'),
        radioSiblings = $(this).find('input[type=radio][required], input[type=radio].required').parents('td').siblings().children('input[type=radio]'),
			  input = $(this).find('input[required], select[required], textarea[required], input.required, select.required, textarea.required').add(radioSiblings),
			  magicNumber = 100 / (input.length - radioSiblings.length),
			  pbw = $('#progress-bar-wrap');

		dismiss.on('click', function() {
			pbw.toggleClass('collapsed', 300);
		});

		input.data('progress', '0');
    
		input.change(function(){

			var $this = $(this),
				progressBar = $('#form-progress'),
				srText = $('#form-progress > span'),
				avn = progressBar.attr('aria-valuenow'),
				hasProgress = $this.data('progress'),
				siblingInput = $this.parents('td').siblings().children('input'),
				siblingName = siblingInput.attr('name'),
				encouragement = $('.encouragement');

			if (pbw.not(':visible')) {
				pbw.show(300);
			}

			if (hasProgress == '0') {
				if ($this.attr('name') == siblingName) {
					siblingInput.data('progress', '1');
				}
				avnMath = parseFloat(avn) + parseFloat(magicNumber);
				updateAVN = avnMath.toFixed(3);
				pbWidth = updateAVN;
				progressBar.width(pbWidth + '%');
				progressBar.attr('aria-valuenow', updateAVN);
				srText.text(updateAVN + '% Complete');
				$this.data('progress', '1');
				console.log('AVN is: ' + updateAVN);
			} else if (! $this.val() ) { // If the field value is emptied, we need to remove that progress.
				$this.data('progress', '0');
				avnMath = parseFloat(avn) - parseFloat(magicNumber);
				updateAVN = avnMath.toFixed(2);
				pbWidth = updateAVN;
				progressBar.width(pbWidth + '%');
				progressBar.attr('aria-valuenow', updateAVN);
				srText.text(updateAVN + '% Complete');
				console.log('AVN is: ' + updateAVN);
			}
			
			for (var key in options.message) {
				keyMatch = parseFloat(key - 5.00);
				var value = options.message[key];
				if (encouragement.not(':visible')) {
					encouragement.show(300);
				}
				if (updateAVN >= keyMatch) {
					encouragement.html(value);
					console.log(key + ' : ' + value);
				}
			}

		});
	};

})(jQuery);
    //@ sourceURL=pen.js
  </script>

  </body>
   

</html>
