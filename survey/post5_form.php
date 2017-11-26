<?php
session_start();
// Checking fourth page values for empy, If it finds any blank field then redirect to fourth
if (isset($_POST['statement31']) &&
	isset($_POST['statement32']) &&
	isset($_POST['statement33']) &&
	isset($_POST['statement34']) &&
	isset($_POST['statement35']) &&
	isset($_POST['statement36']) &&
	isset($_POST['statement37']) &&
	isset($_POST['statement38']) &&
	isset($_POST['statement39']) &&
	isset($_POST['statement40'])){
		

		$_SESSION['statement31'] = $_POST['statement31'];
		$_SESSION['statement32'] = $_POST['statement32'];
		$_SESSION['statement33'] = $_POST['statement33'];
		$_SESSION['statement34'] = $_POST['statement34'];
		$_SESSION['statement35'] = $_POST['statement35'];
		$_SESSION['statement36'] = $_POST['statement36'];
		$_SESSION['statement37'] = $_POST['statement37'];
		$_SESSION['statement38'] = $_POST['statement38'];
		$_SESSION['statement39'] = $_POST['statement39'];
		$_SESSION['statement40'] = $_POST['statement40'];

} else {
	
	$_SESSION['error_post4'] = "Mandatory field(s) are missing, Please fill it again";
	header("location: post4_form.php"); // Redirecting to first page

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
		if (!empty($_SESSION['error_post5'])) {
			echo $_SESSION['error_post5'];
			unset($_SESSION['error_post5']);
		}
		?>
		</span>
		
		<form action="post6_form.php" method="post">
		<div class="form-group">
			<label class="col-sm-4 control-label">I am serving others in my community.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement41" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement41" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement41" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement41" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am spending quality time at home with parent(s).</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement42" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement42" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement42" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement42" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have friends who set good examples for me.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement43" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement43" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement43" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement43" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have a school that gives students clear rules.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement44" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement44" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement44" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement44" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have adults who are good role models for me.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement45" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement45" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement45" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement45" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have a safe neighborhood.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement46" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement46" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement46" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement46" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have parent (s) who try to help me succeed.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement47" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement47" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement47" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement47" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have good neighbors who care about me.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement48" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement48" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement48" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement48" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have a school that cares about kids and encourages them.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement49" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement49" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement49" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement49" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I have teachers who urge me to develop and achieve. </label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement50" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement50" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement50" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement50" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<input type="submit" value="Next" />
		</form>
		
		</div>
	</body>
</html>