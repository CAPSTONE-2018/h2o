<?php
session_start();

require 'DB.php';

// Checking sixth page values for empy, If it finds any blank field then redirect to sixth
if (isset($_POST['statement51']) &&
	isset($_POST['statement52']) &&
	isset($_POST['statement53']) &&
	isset($_POST['statement54']) &&
	isset($_POST['statement55']) &&
	isset($_POST['statement56']) &&
	isset($_POST['statement57']) &&
	isset($_POST['statement58'])){
		

		$_SESSION['statement51'] = $_POST['statement51'];
		$_SESSION['statement52'] = $_POST['statement52'];
		$_SESSION['statement53'] = $_POST['statement53'];
		$_SESSION['statement54'] = $_POST['statement54'];
		$_SESSION['statement55'] = $_POST['statement55'];
		$_SESSION['statement56'] = $_POST['statement56'];
		$_SESSION['statement57'] = $_POST['statement57'];
		$_SESSION['statement58'] = $_POST['statement58'];

} else {
	
	$_SESSION['error_post6'] = "Mandatory field(s) are missing, Please fill it again";
	header("location: post6_form.php");

}
header("Location: post_final_form.php");

?>