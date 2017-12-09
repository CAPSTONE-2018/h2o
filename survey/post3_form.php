<?php
session_start();
// Checking second page values for empy, If it finds any blank field then redirect to second
//post3_form.php
$myFile3 = "data3.txt";
$myFilep2 = "datap2.txt";
$lines3 = file($myFile3);
$linesp2 = file($myFilep2);

$poster = 1;

foreach($linesp2 as $line)
{

	if (isset($_POST[trim($line)]))
	{

	}else{
		$poster = 0;
	}
}

if ($poster == 1){
		
		foreach($linesp2 as $line)
		{
			$_SESSION[$line] = $_POST[$line];
		}

} else {
	
	$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
	header("location: post2_form.php"); // Redirecting to second page

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
			echo '<span style = " font-family: Times New Roman; color: black; font-weight: bold; font-size: 21px;">Hello, ' . $_SESSION['first'] . '!</span>';
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
		<?php
		
		foreach($lines3 as $line)
		{
			$var = explode(':', $line, 2);
			$_SESSION['total'] = $_SESSION['total'] + 1;

			echo '<div class="form-group">
					<label class="col-sm-4 control-label">' . $var[0] . '</label>
						<div class="col-sm-8">
							<div class="radio">
								<label> <input type="radio" name="'. trim($var[1]) . '" id="Radio1" value="1"> Not at All or Rarely </label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="'. trim($var[1]) . '" id="Radio2" value="2"> Somewhat or Sometimes </label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="'. trim($var[1]) . '" id="Radio3" value="3"> Very or Often </label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="'. trim($var[1]) . '" id="Radio4" value="4"> Extremely or Almost Aways</label>
							</div>
						</div>
				</div>';
				
		}
		?>
		<input type="submit" value="Next" />
		</form>
		
		</div>
	</body>
</html>