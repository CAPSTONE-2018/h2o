<?php
session_start();
// Checking second page values for empy, If it finds any blank field then redirect to second
if (isset($_POST['statement11']) &&
	isset($_POST['statement12']) &&
	isset($_POST['statement13']) &&
	isset($_POST['statement14']) &&
	isset($_POST['statement15']) &&
	isset($_POST['statement16']) &&
	isset($_POST['statement17']) &&
	isset($_POST['statement18']) &&
	isset($_POST['statement19']) &&
	isset($_POST['statement20'])){
		

		$_SESSION['statement11'] = $_POST['statement11'];
		$_SESSION['statement12'] = $_POST['statement12'];
		$_SESSION['statement13'] = $_POST['statement13'];
		$_SESSION['statement14'] = $_POST['statement14'];
		$_SESSION['statement15'] = $_POST['statement15'];
		$_SESSION['statement16'] = $_POST['statement16'];
		$_SESSION['statement17'] = $_POST['statement17'];
		$_SESSION['statement18'] = $_POST['statement18'];
		$_SESSION['statement19'] = $_POST['statement19'];
		$_SESSION['statement20'] = $_POST['statement20'];

} else {
	
	$_SESSION['error_post2'] = "Mandatory field(s) are missing, Please fill it again";
	header("location: post2_form.php"); // Redirecting to first page

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
		if (!empty($_SESSION['error_post3'])) {
			echo $_SESSION['error_post3'];
			unset($_SESSION['error_post3']);
		}
		?>
		</span>
		
		<form action="post4_form.php" method="post">
		<div class="form-group">
			<label class="col-sm-4 control-label">I feel valued and appreciated by others.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement21" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement21" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement21" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement21" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I take responsibility for what I do.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement22" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement22" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement22" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement22" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I tell the truth even when it is not easy.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement23" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement23" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement23" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement23" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I accept people who are different from me.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement24" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement24" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement24" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement24" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I feel safe at school.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement25" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement25" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement25" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement25" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am actively engaged in learning new things.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement26" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement26" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement26" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement26" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am developing a sense of purpose in my life.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement27" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement27" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement27" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement27" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am encouraged to try things that might be good for me.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement28" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement28" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement28" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement28" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am included in family tasks and decisions.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement29" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement29" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement29" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement29" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am helping to make my community a better place.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement30" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement30" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement30" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement30" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<input type="submit" value="Next" />
		</form>
		
		</div>
	</body>
</html>