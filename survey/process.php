<?php
session_start();


	
	$myfile = 'data' . $_POST['page'] . '.txt';
	$pfile = 'datap' . $_POST['page'] . '.txt';
	$handle = fopen($myfile, 'a');
	$phandle = fopen($pfile, 'a');
	
	$id_handle = fopen('idnum.txt', 'r+');
	
	
	$id = fread($id_handle, filesize('idnum.txt'));
	$q = $_POST['question'] . ':statement' . $id;
	$p = 'statement' . $id;
	
	
	
	$id_handle = fopen('idnum.txt', 'w') or die('Cannot open file: idnum.txt');
	
	// Update the question ID number	
	$id++;
	fwrite($id_handle, $id);
	fclose($id_handle);
	
	// Update data file
	fwrite($handle, "\r\n");
	fwrite($handle, $q);
	fclose($handle);

	// Update datap file
	fwrite($phandle, "\r\n");
	fwrite($phandle, $p);
	fclose($phandle);


header("Location: Main.php");
?>