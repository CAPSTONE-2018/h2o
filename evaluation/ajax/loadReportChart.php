<?PHP 
if (isset($_GET['survFor'])){
	include ('../class/db.php');
	$db = new Database();
	$user_ans = explode('`', $db->sp_get_survey($_GET['survFor'], 'user')['answers']);
	$admin_ans = explode('`', $db->sp_get_survey($_GET['survFor'], 'admin')['answers']);
	
	//Communication
	$uavg = 0;
	$aavg = 0;
	for ($x = 0; $x < 5; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u1 = $uavg/5;
	$local->a1 = $aavg/5;
	
	//Cooperation
	$uavg = 0;
	$aavg = 0;
	for ($x = 6; $x < 12; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u2 = $uavg/6;
	$local->a2 = $aavg/6;
	
	//Cost Consciousness
	$uavg = 0;
	$aavg = 0;
	for ($x = 13; $x < 17; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u3 = $uavg/4;
	$local->a3 = $aavg/4;
	
	//Dependability
	$uavg = 0;
	$aavg = 0;
	for ($x = 18; $x < 24; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u4 = $uavg/6;
	$local->a4 = $aavg/6;
	
	//Initiative
	$uavg = 0;
	$aavg = 0;
	for ($x = 25; $x < 31; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u5 = $uavg/6;
	$local->a5 = $aavg/6;
	
	//Job Knowledge
	$uavg = 0;
	$aavg = 0;
	for ($x = 32; $x < 38; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u6 = $uavg/6;
	$local->a6 = $aavg/6;
	
	//Judgement
	$uavg = 0;
	$aavg = 0;
	for ($x = 39; $x < 43; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u7 = $uavg/5;
	$local->a7 = $aavg/5;
	
	//Planning & Organization
	$uavg = 0;
	$aavg = 0;
	for ($x = 45; $x < 51; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u8 = $uavg/6;
	$local->a8 = $aavg/6;
	
	//Problem Solving
	$uavg = 0;
	$aavg = 0;
	for ($x = 52; $x < 57; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u9 = $uavg/5;
	$local->a9 = $aavg/5;
	
	//Quality
	$uavg = 0;
	$aavg = 0;
	for ($x = 58; $x < 63; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u10 = $uavg/5;
	$local->a10 = $aavg/5;
	
	//Quantity
	$uavg = 0;
	$aavg = 0;
	for ($x = 64; $x < 69; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u11 = $uavg/5;
	$local->a11 = $aavg/5;
	
	//Use of Tech
	$uavg = 0;
	$aavg = 0;
	for ($x = 70; $x < 75; $x++) {
		$uavg += $user_ans[$x];
		$aavg += $admin_ans[$x];
	} 
	$local->u12 = $uavg/5;
	$local->a12 = $aavg/5;
	
	echo json_encode($local);		
}

?>