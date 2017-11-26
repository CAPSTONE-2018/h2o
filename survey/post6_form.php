<?php
session_start();
// Checking fifth page values for empy, If it finds any blank field then redirect to fifth
if (isset($_POST['statement41']) &&
	isset($_POST['statement42']) &&
	isset($_POST['statement43']) &&
	isset($_POST['statement44']) &&
	isset($_POST['statement45']) &&
	isset($_POST['statement46']) &&
	isset($_POST['statement47']) &&
	isset($_POST['statement48']) &&
	isset($_POST['statement49']) &&
	isset($_POST['statement50'])){
		

		$_SESSION['statement41'] = $_POST['statement41'];
		$_SESSION['statement42'] = $_POST['statement42'];
		$_SESSION['statement43'] = $_POST['statement43'];
		$_SESSION['statement44'] = $_POST['statement44'];
		$_SESSION['statement45'] = $_POST['statement45'];
		$_SESSION['statement46'] = $_POST['statement46'];
		$_SESSION['statement47'] = $_POST['statement47'];
		$_SESSION['statement48'] = $_POST['statement48'];
		$_SESSION['statement49'] = $_POST['statement49'];
		$_SESSION['statement50'] = $_POST['statement50'];

} else {
	
	$_SESSION['error_post5'] = "Mandatory field(s) are missing, Please fill it again";
	header("location: post5_form.php"); // Redirecting to first page

}
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
		<?php
		if (!empty($_SESSION['error_post6'])) {
			echo $_SESSION['error_post6'];
			unset($_SESSION['error_post6']);
		}
		?>
		</span>
		
		<form action="post7_form.php" method="post">
		<div class="form-group">
			<label class="col-sm-4 control-label">I have support from adults other than my parents.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement51" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement51" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement51" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement51" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have a family that provides me with clear rules.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement52" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement52" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement52" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement52" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have parent(s) who urge me to do well in school.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement53" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement53" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement53" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement53" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have a family that gives me love and support.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement54" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement54" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement54" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement54" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have neighbors who help watch out for me.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement55" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement55" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement55" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement55" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have parent(s) who are good at talking with me about things.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement56" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement56" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement56" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement56" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have a school that enforces rules fairly.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement57" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement57" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement57" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement57" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have a family that knows where I am and what I am doing.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement58" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement58" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement58" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement58" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<input type="submit" value="Next" />
		</form>
		
		</div>
	</body>
</html>