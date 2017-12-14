<?php
session_start();

require 'DB.php';

$sql = "INSERT INTO pretest
		(first,
		middle,
		last
		) VALUES (
		'{$_SESSION['first']}',
		'{$_SESSION['middle']}',
		'{$_SESSION['last']}'";
		
$stmt = $conn->prepare($sql);		
$stmt->execute();		

//First Section
foreach($linesp1 as $line)
{
	$sql = "INSERT INTO pretest
			(" . $line . ") VALUES (
			'{$_SESSION[$line]}')";
			
	$stmt = $conn->prepare($sql);		
	$stmt->execute();	
}

//Second Section
foreach($linesp2 as $line)
{
	$sql = "INSERT INTO pretest
			(" . $line . ") VALUES (
			'{$_SESSION[$line]}')";
			
	$stmt = $conn->prepare($sql);		
	$stmt->execute();	
}


//Third Section
foreach($linesp3 as $line)
{
	$sql = "INSERT INTO pretest
			(" . $line . ") VALUES (
			'{$_SESSION[$line]}')";
			
	$stmt = $conn->prepare($sql);		
	$stmt->execute();	
}

//Fourth Section
foreach($linesp4 as $line)
{
	$sql = "INSERT INTO pretest
			(" . $line . ") VALUES (
			'{$_SESSION[$line]}')";
			
	$stmt = $conn->prepare($sql);		
	$stmt->execute();	
}


//Fifth Section
foreach($linesp5 as $line)
{
	$sql = "INSERT INTO pretest
			(" . $line . ") VALUES (
			'{$_SESSION[$line]}')";
			
	$stmt = $conn->prepare($sql);		
	$stmt->execute();	
}


//Sixth Section
foreach($linesp6 as $line)
{
	$sql = "INSERT INTO pretest
			(" . $line . ") VALUES (
			'{$_SESSION[$line]}')";
			
	$stmt = $conn->prepare($sql);		
	$stmt->execute();	
}


header("Location: Main.php");
?>