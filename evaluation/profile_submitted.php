<?PHP

include('./class/db.php');
include('./class/User.php'); 
$db = new Database();

//Check if post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	//if so, show nav bar
	include 'navbar.php';
	
}else{
	//otherwise, redirect us 
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
    <link rel="stylesheet" href="css/progress-bar.css">
    <link href="css/style.css" rel="stylesheet">
	
  </head>
<body>
	<div style='text-align:center;'>
		<h1>Your changes have been saved!</h1>
		<p>
			<?PHP 
				echo $_POST['variable1'];
				//echo $db->sp_get_user_byname('FLACK')['username'];
			?>
		</p>
		<button>Back</button>
	</div>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script>

 </body>
   

</html>
