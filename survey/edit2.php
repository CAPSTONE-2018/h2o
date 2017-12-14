<?php
session_start();

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
		
		
		<div id ="instructions">
			<b>Admin Page</b>
		</div>
		<p>
			Edit the questions by using the form below.
		</p>
		<p>
		</p>
		<p>

		</p>

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
		<b>Add Question:</b>
		<form action="process.php" method="post">
		Type your question here: <input type="text" name="question"><br>
		Page number: <input type="text" name="page"><br>
		<input type="submit">
		</form>
		
		<b>Remove Question:</b>
		<form action="process2.php" method="post">
		Type question to remove here: <input type="text" name="remove"><br>
		Page number of question: <input type="text" name="page_remove"><br>
		<input type="submit">
		</form>
	
		</div>
	</body>
</html>