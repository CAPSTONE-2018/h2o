<?php
session_start();

require 'DB.php';

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

		
		$sql = "INSERT INTO posttest 
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

	if( $stmt->execute() ):	
	
		$fs = fopen("posttest.csv","a");
		fwrite($fs,
		$_SESSION['first']
		. ", " . 
		$_SESSION['middle']
		. ", " . 
		$_SESSION['last']
		. ", " . 
		 $_POST['statement1']
		 . ", " . 
		 $_POST['statement2']
		 . ", " . 
		 $_POST['statement3']
		 . ", " . 
		 $_POST['statement4']
		 . ", " . 
		 $_POST['statement5']
		 . ", " . 
		 $_POST['statement6']
		 . ", " . 
		 $_POST['statement7']
		 . ", " . 
		 $_POST['statement8']
		 . ", " . 
		 $_POST['statement9']
		 . ", " . 
		 $_POST['statement10']
		 . ", " . 
			$_POST['statement11']
			. ", " . 
		 $_POST['statement12']
		 . ", " . 
		 $_POST['statement13']
		 . ", " . 
		 $_POST['statement14']
		 . ", " . 
		 $_POST['statement15']
		 . ", " . 
		 $_POST['statement16']
		 . ", " . 
		 $_POST['statement17']
		 . ", " . 
		 $_POST['statement18']
		 . ", " . 
		 $_POST['statement19']
		 . ", " . 
		 $_POST['statement20']
		 . ", " . 
			$_POST['statement21']
			. ", " . 
		 $_POST['statement22']
		 . ", " . 
		 $_POST['statement23']
		 . ", " . 
		 $_POST['statement24']
		 . ", " . 
		 $_POST['statement25']
		 . ", " . 
		 $_POST['statement26']
		 . ", " . 
		 $_POST['statement27']
		 . ", " . 
		 $_POST['statement28']
		 . ", " . 
		 $_POST['statement29']
		 . ", " . 
		 $_POST['statement30']
		 . ", " . 
			$_POST['statement31']
			. ", " . 
		 $_POST['statement32']
		 . ", " . 
		 $_POST['statement33']
		 . ", " . 
		 $_POST['statement34']
		 . ", " . 
		 $_POST['statement35']
		 . ", " . 
		 $_POST['statement36']
		 . ", " . 
		 $_POST['statement37']
		 . ", " . 
		 $_POST['statement38']
		 . ", " . 
		 $_POST['statement39']
		 . ", " . 
		 $_POST['statement40']
		 . ", " . 
			$_POST['statement41']
			. ", " . 
		 $_POST['statement42']
		 . ", " . 
		 $_POST['statement43']
		 . ", " . 
		 $_POST['statement44']
		 . ", " . 
		 $_POST['statement45']
		 . ", " . 
		 $_POST['statement46']
		 . ", " . 
		 $_POST['statement47']
		 . ", " . 
		 $_POST['statement48']
		 . ", " . 
		 $_POST['statement49']
		 . ", " . 
		 $_POST['statement50']
		 . ", " . 
			$_POST['statement51']
			. ", " . 
		 $_POST['statement52']
		 . ", " . 
		 $_POST['statement53']
		 . ", " . 
		 $_POST['statement54']
		 . ", " . 
		 $_POST['statement55']
		 . ", " . 
		 $_POST['statement56']
		 . ", " . 
		 $_POST['statement57']
		 . ", " . 
		 $_POST['statement58']
		. "\n");
		fclose($fs);
	
		header("Location: Main.php");
	
	else:
		//var_dump($stmt->errorInfo());
	endif;

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
		<form action="PostTest.php" method="POST">
		
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
			<div class="form-group">
			<label class="col-sm-4 control-label">I express my feelings in proper ways.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement11" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement11" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement11" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement11" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I feel good about my future.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement12" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement12" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement12" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement12" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I seek advice from my parents.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement13" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement13" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement13" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement13" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I deal with frustration in positive ways.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement14" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement14" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement14" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement14" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I overcome challenges in positive ways.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement15" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement15" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement15" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement15" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I think it is important to help other people.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement16" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement16" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement16" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement16" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I feel safe and secure at home.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement17" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement17" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement17" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement17" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I plan ahead and make good choices.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement18" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement18" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement18" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement18" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I resist bad influences.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement19" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement19" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement19" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement19" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I resolve conflicts without anyone getting hurt.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement20" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement20" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement20" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement20" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
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
			<div class="form-group">
			<label class="col-sm-4 control-label">I am involved in a religious group or activity.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement31" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement31" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement31" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement31" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am developing good health habits.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement32" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement32" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement32" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement32" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am encouraged to help others.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement33" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement33" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement33" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement33" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am involved in a sport, club, or other group.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement34" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement34" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement34" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement34" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am trying to help solve social problems.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement35" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement35" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement35" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement35" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am given useful roles and responsibilities.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement36" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement36" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement36" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement36" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am developing respect for other people.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement37" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement37" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement37" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement37" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am eager to do well in school and other activities.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement38" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement38" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement38" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement38" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am sensitive to the needs and feelings of others.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement39" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement39" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement39" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement39" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">I am involved in creative things such as music, theater, or art.</label>
				<div class="col-sm-8">
					<div class="radio">
						<label> <input type="radio" name="statement40" id="Radio1" value="1"> Not at All or Rarely </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement40" id="Radio2" value="2"> Somewhat or Sometimes </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement40" id="Radio3" value="3"> Very or Often </label>
					</div>
					<div class="radio">
						<label> <input type="radio" name="statement40" id="Radio4" value="4"> Extremely or Almost Aways</label>
					</div>
				</div>
		</div>
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
		<div>
		<p>&nbsp;</p>
		
		</div>
		<div>
		<button type="submit" name= "submit" class="btn btn-primary center-block">Submit</button>
		</div>
		</form>
		
		<hr>
	</body>
</html>