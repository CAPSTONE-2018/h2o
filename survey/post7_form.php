<?php
session_start();

//pre7_form.php
$myFilep6 = "datap6.txt";
$linesp6 = file($myFilep6);

$poster = 1;

foreach($linesp6 as $line)
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
	header("location: post6_form.php"); // Redirecting to sixth page

}
header("Location: post_final_form.php");

?>