<?php
//Establish connection
$server = 'localhost';
$username = 'h2o_user';
$password = 'dbuser';
$database = 'h2o_survey';

try{
	$conn = new PDO("mysql:host=$server; dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}


