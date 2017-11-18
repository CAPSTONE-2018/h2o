<?php
session_start();

require 'DB.php';

//If not empty, perform insertion and bind variables
if(!empty($_POST['statement1'])&&
	 !empty($_POST['statement2'])&&
	 !empty($_POST['statement3'])&&
	 !empty($_POST['statement4'])&&
	 !empty($_POST['statement5'])&&
	 !empty($_POST['statement6'])&&
	 !empty($_POST['statement7'])&&
	 !empty($_POST['statement8'])&&
	 !empty($_POST['statement9'])&&
	 !empty($_POST['statement10'])&&
		!empty($_POST['statement11'])&&
	 !empty($_POST['statement12'])&&
	 !empty($_POST['statement13'])&&
	 !empty($_POST['statement14'])&&
	 !empty($_POST['statement15'])&&
	 !empty($_POST['statement16'])&&
	 !empty($_POST['statement17'])&&
	 !empty($_POST['statement18'])&&
	 !empty($_POST['statement19'])&&
	 !empty($_POST['statement20'])&&
		!empty($_POST['statement21'])&&
	 !empty($_POST['statement22'])&&
	 !empty($_POST['statement23'])&&
	 !empty($_POST['statement24'])&&
	 !empty($_POST['statement25'])&&
	 !empty($_POST['statement26'])&&
	 !empty($_POST['statement27'])&&
	 !empty($_POST['statement28'])&&
	 !empty($_POST['statement29'])&&
	 !empty($_POST['statement30'])&&
		!empty($_POST['statement31'])&&
	 !empty($_POST['statement32'])&&
	 !empty($_POST['statement33'])&&
	 !empty($_POST['statement34'])&&
	 !empty($_POST['statement35'])&&
	 !empty($_POST['statement36'])&&
	 !empty($_POST['statement37'])&&
	 !empty($_POST['statement38'])&&
	 !empty($_POST['statement39'])&&
	 !empty($_POST['statement40'])&&
		!empty($_POST['statement41'])&&
	 !empty($_POST['statement42'])&&
	 !empty($_POST['statement43'])&&
	 !empty($_POST['statement44'])&&
	 !empty($_POST['statement45'])&&
	 !empty($_POST['statement46'])&&
	 !empty($_POST['statement47'])&&
	 !empty($_POST['statement48'])&&
	 !empty($_POST['statement49'])&&
	 !empty($_POST['statement50'])&&
		!empty($_POST['statement51'])&&
	 !empty($_POST['statement52'])&&
	 !empty($_POST['statement53'])&&
	 !empty($_POST['statement54'])&&
	 !empty($_POST['statement55'])&&
	 !empty($_POST['statement56'])&&
	 !empty($_POST['statement57'])&&
	 !empty($_POST['statement58'])):

		
		$sql = "INSERT INTO pretest 
		(first, 
		middle, 
		last, 
		statement1,
		statement2,
		statement3,
		statement4,
		statement5,
		statement6,
		statement7,
		statement8,
		statement9,
		statement10,
			statement11,
		statement12,
		statement13,
		statement14,
		statement15,
		statement16,
		statement17,
		statement18,
		statement19,
		statement20,
			statement21,
		statement22,
		statement23,
		statement24,
		statement25,
		statement26,
		statement27,
		statement28,
		statement29,
		statement30,
			statement31,
		statement32,
		statement33,
		statement34,
		statement35,
		statement36,
		statement37,
		statement38,
		statement39,
		statement40,
			statement41,
		statement42,
		statement43,
		statement44,
		statement45,
		statement46,
		statement47,
		statement48,
		statement49,
		statement50,
			statement51,
		statement52,
		statement53,
		statement54,
		statement55,
		statement56,
		statement57,
		statement58
		) VALUES (
		'{$_SESSION['first']}',
		'{$_SESSION['middle']}',
		'{$_SESSION['last']}', 
		:statement1, 
		:statement2,
		:statement3,
		:statement4,
		:statement5,
		:statement6,
		:statement7,
		:statement8,
		:statement9,
		:statement10,
			:statement11,
		:statement12,
		:statement13,
		:statement14,
		:statement15,
		:statement16,
		:statement17,
		:statement18,
		:statement19,
		:statement20,
			:statement21,
		:statement22,
		:statement23,
		:statement24,
		:statement25,
		:statement26,
		:statement27,
		:statement28,
		:statement29,
		:statement30,
			:statement31,
		:statement32,
		:statement33,
		:statement34,
		:statement35,
		:statement36,
		:statement37,
		:statement38,
		:statement39,
		:statement40,
			:statement41,
		:statement42,
		:statement43,
		:statement44,
		:statement45,
		:statement46,
		:statement47,
		:statement48,
		:statement49,
		:statement50,
			:statement51,
		:statement52,
		:statement53,
		:statement54,
		:statement55,
		:statement56,
		:statement57,
		:statement58)";
		
		$stmt = $conn->prepare($sql);

		$stmt->bindParam(':statement1', $_POST['statement1']);
		$stmt->bindParam(':statement2', $_POST['statement2']);
		$stmt->bindParam(':statement3', $_POST['statement3']);
		$stmt->bindParam(':statement4', $_POST['statement4']);
		$stmt->bindParam(':statement5', $_POST['statement5']);
		$stmt->bindParam(':statement6', $_POST['statement6']);
		$stmt->bindParam(':statement7', $_POST['statement7']);
		$stmt->bindParam(':statement8', $_POST['statement8']);
		$stmt->bindParam(':statement9', $_POST['statement9']);
		$stmt->bindParam(':statement10', $_POST['statement10']);
			$stmt->bindParam(':statement11', $_POST['statement11']);
		$stmt->bindParam(':statement12', $_POST['statement12']);
		$stmt->bindParam(':statement13', $_POST['statement13']);
		$stmt->bindParam(':statement14', $_POST['statement14']);
		$stmt->bindParam(':statement15', $_POST['statement15']);
		$stmt->bindParam(':statement16', $_POST['statement16']);
		$stmt->bindParam(':statement17', $_POST['statement17']);
		$stmt->bindParam(':statement18', $_POST['statement18']);
		$stmt->bindParam(':statement19', $_POST['statement19']);
		$stmt->bindParam(':statement20', $_POST['statement20']);
			$stmt->bindParam(':statement21', $_POST['statement21']);
		$stmt->bindParam(':statement22', $_POST['statement22']);
		$stmt->bindParam(':statement23', $_POST['statement23']);
		$stmt->bindParam(':statement24', $_POST['statement24']);
		$stmt->bindParam(':statement25', $_POST['statement25']);
		$stmt->bindParam(':statement26', $_POST['statement26']);
		$stmt->bindParam(':statement27', $_POST['statement27']);
		$stmt->bindParam(':statement28', $_POST['statement28']);
		$stmt->bindParam(':statement29', $_POST['statement29']);
		$stmt->bindParam(':statement30', $_POST['statement30']);
			$stmt->bindParam(':statement31', $_POST['statement31']);
		$stmt->bindParam(':statement32', $_POST['statement32']);
		$stmt->bindParam(':statement33', $_POST['statement33']);
		$stmt->bindParam(':statement34', $_POST['statement34']);
		$stmt->bindParam(':statement35', $_POST['statement35']);
		$stmt->bindParam(':statement36', $_POST['statement36']);
		$stmt->bindParam(':statement37', $_POST['statement37']);
		$stmt->bindParam(':statement38', $_POST['statement38']);
		$stmt->bindParam(':statement39', $_POST['statement39']);
		$stmt->bindParam(':statement40', $_POST['statement40']);
			$stmt->bindParam(':statement41', $_POST['statement41']);
		$stmt->bindParam(':statement42', $_POST['statement42']);
		$stmt->bindParam(':statement43', $_POST['statement43']);
		$stmt->bindParam(':statement44', $_POST['statement44']);
		$stmt->bindParam(':statement45', $_POST['statement45']);
		$stmt->bindParam(':statement46', $_POST['statement46']);
		$stmt->bindParam(':statement47', $_POST['statement47']);
		$stmt->bindParam(':statement48', $_POST['statement48']);
		$stmt->bindParam(':statement49', $_POST['statement49']);
		$stmt->bindParam(':statement50', $_POST['statement50']);
			$stmt->bindParam(':statement51', $_POST['statement51']);
		$stmt->bindParam(':statement52', $_POST['statement52']);
		$stmt->bindParam(':statement53', $_POST['statement53']);
		$stmt->bindParam(':statement54', $_POST['statement54']);
		$stmt->bindParam(':statement55', $_POST['statement55']);
		$stmt->bindParam(':statement56', $_POST['statement56']);
		$stmt->bindParam(':statement57', $_POST['statement57']);
		$stmt->bindParam(':statement58', $_POST['statement58']);
endif;
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
			echo '<span style = " font-family: Times New Roman; color: black; font-weight: bold; font-size: 21px;">Hello, ' . $_SESSION['first'] . '!</span>';
		?>
		
		<div id ="instructions">
			<b>Pre-Test Instructions:</b>
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
		
		<form action="pre2_form.php" method="post">
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