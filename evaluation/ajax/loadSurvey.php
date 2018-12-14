<?PHP
	if (isset($_GET['survFor']) && isset($_GET['survType'])){
		include ('../class/db.php');
		$db = new Database();
		$ans = $db->sp_get_survey($_GET['survFor'], $_GET['survType'])['answers'];
		echo $ans;
	}else{
		echo 'INTERNAL SERVER ERROR';
	}
?>