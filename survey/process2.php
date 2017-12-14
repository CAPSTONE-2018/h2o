<?php
session_start();

	$filename = 'data' . $_POST['page_remove'] . '.txt';
	$pname = 'datap' . $_POST['page_remove'] . '.txt';

	
	$DELETE = $_POST['remove'];
	$delete2 = "";
	
	$data = file($filename);
	$data2 = file($pname);
	
	foreach($data as $line){
		$state = explode(":", trim($line));
		if ($state[0] == $_POST['remove']){
			$delete2 = $state[1];
		}
	}
	$out = array();
	$out2 = array();
	
	foreach($data as $line){
		$state = explode(":", trim($line));
		if($state[0] != $DELETE){
			$out[] = $line;
		}
	}


	$handle = fopen($filename, "w+");
	$phandle = fopen($pname, "w+");
	
	
	flock($handle, LOCK_EX);
	foreach($out as $line){
		fwrite($handle, $line);
	}
	flock($handle, LOCK_UN);
	fclose($handle);
	
	
	foreach($data2 as $line){
		if(trim($line) != $delete2){
			$out2[] = $line;
		}
	}
	
	flock($phandle, LOCK_EX);
	foreach($out2 as $line){
		fwrite($phandle, $line);
	}
	flock($phandle, LOCK_UN);
	fclose($phandle);
	
header("Location: Main.php");
?>