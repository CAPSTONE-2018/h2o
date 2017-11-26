<?php
session_start();

require 'DB.php';


?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>H2O</title>
		<link rel="stylesheet" type="text/css" href="style2.css" />
	</head>
	
	<body>
		<div id ="container">
		
		<div id="wrapperHeader">
		 <div id="header">
		  <img src="https://d5wwj7hogtwx9.cloudfront.net/image_uploads/52ac79a2b4c24098c1fbd3c6f9e0e522.jpg" alt="logo" />
		 </div> 
		</div>
		<hr>
		
		<?php											
			echo '<span style = " font-family: Times New Roman; color: black; font-weight: bold; font-size: 21px;">Welcome back, ' . $_SESSION['first'] . '!</span>';
		?>
		
		<div id ="instructions">
			<b>Post-Test Instructions:</b>
		</div>
		<p>
			Below is a list of positive things that you might have in yourself, 
			your family, friends, neighborhood, school and community.
		</p>
		<p>
			For each item that describes 
			you now or within the past 3 months, check if the item is true:</p>
		<p>
			Not at All or Rarely, Somewhat or Sometimes, Very or Often, Extremely or Almost Aways.
		</p>
	
		<b>Please answer all items as best as you can.</b>
		<br>
		<br>
		<hr>
		<br>
		
		<span id="error">
		<!---- Initialize session for errors ---->
		<?php
		if (!empty($_SESSION['error'])) {
			echo $_SESSION['error'];
			unset($_SESSION['error']);
		}
		?>
		</span>
		
		<form action="post2_form.php" method="post">
		<div class="form-group">
			<label class="col-sm-4 control-label">I stand up for what I believe in.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement1" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement1" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement1" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement1" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I feel in control of my life and future.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement2" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement2" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement2" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement2" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
		<label class="col-sm-4 control-label">I feel good about myself.</label>
			<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement3" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement3" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement3" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement3" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I avoid things that are dangerous or unhealthy.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement4" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement4" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement4" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement4" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I enjoy reading or being read to.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement5" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement5" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement5" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement5" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I build friendships with other people.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement6" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement6" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement6" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement6" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I care about school. </label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement7" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement7" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement7" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement7" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I do my homework.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement8" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement8" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement8" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement8" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I stay away from tobacco, alcohol, & other drugs.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement9" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement9" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement9" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement9" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I enjoy learning.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement10" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement10" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement10" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement10" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<input type="submit" value="Next" />
		</form>
		
		</div>
	</body>
</html>