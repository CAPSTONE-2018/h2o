<?PHP 

include ('../class/db.php');
$db = new Database();

$users = $db->sp_get_all_users('user');


function getCategoricalAverages($ans){
	//Communication
	$avg = 0;
	for ($x = 0; $x < 5; $x++) {
		$avg += $ans[$x];
	} 
	$local->a1 = $avg/5;
	
	//Cooperation
	$avg = 0;
	for ($x = 6; $x < 12; $x++) {
		$avg += $ans[$x];
	} 
	$local->a2 = $avg/6;
	
	//Cost Consciousness
	$avg = 0;
	for ($x = 13; $x < 17; $x++) {
		$avg += $ans[$x];
	} 
	$local->a3 = $avg/4;
	
	//Dependability
	$avg = 0;
	for ($x = 18; $x < 24; $x++) {
		$avg += $ans[$x];
	} 
	$local->a4 = $avg/6;
	
	//Initiative
	$avg = 0;
	for ($x = 25; $x < 31; $x++) {
		$avg += $ans[$x];
	} 
	$local->a5 = $avg/6;
	
	//Job Knowledge
	$avg = 0;
	for ($x = 32; $x < 38; $x++) {
		$avg += $ans[$x];
	} 
	$local->a6 = $avg/6;
	
	//Judgement
	$avg = 0;
	for ($x = 39; $x < 44; $x++) {
		$avg += $ans[$x];
	} 
	$local->a7 = $avg/5;
	
	//Planning & Organization
	$avg = 0;
	for ($x = 45; $x < 51; $x++) {
		$avg += $ans[$x];
	} 
	$local->a8 = $avg/6;
	
	//Problem Solving
	$avg = 0;
	for ($x = 52; $x < 57; $x++) {
		$avg += $ans[$x];
	} 
	$local->a9 = $avg/5;
	
	//Quality
	$avg = 0;
	for ($x = 58; $x < 63; $x++) {
		$avg += $ans[$x];
	} 
	$local->a10 = $avg/5;
	
	//Quantity
	$avg = 0;
	for ($x = 64; $x < 69; $x++) {
		$avg += $ans[$x];
	} 
	$local->a11 = $avg/5;
	
	//Use of Tech
	$avg = 0;
	for ($x = 70; $x < 75; $x++) {
		$avg += $ans[$x];
	} 
	$local->a12 = $avg/5;
	return $local;
}

$uavg = array();
$aavg = array();

foreach($users as $i=>$u){
	//Count user surveys & add all answer averages to array
	if ($db->sp_survey_complete($u['username'], 'user') == 1){
		$local->Selfs++;
		$user_ans = explode('`', $db->sp_get_survey($u['username'], 'user')['answers']);
		array_push($uavg, getCategoricalAverages($user_ans));
	}
	//Count admin eval surveys & add all answer averages to array
	if ($db->sp_survey_complete($u['username'], 'admin') == 1){
		$local->Evals++;
		$admin_ans = explode('`', $db->sp_get_survey($u['username'], 'admin')['answers']);
		array_push($aavg, getCategoricalAverages($admin_ans));
	}
}

foreach($uavg as $i=>$u){
	$local->uavg->avg1 += $u->a1;
	$local->uavg->avg2 += $u->a2;
	$local->uavg->avg3 += $u->a3;
	$local->uavg->avg4 += $u->a4;
	$local->uavg->avg5 += $u->a5;
	$local->uavg->avg6 += $u->a6;
	$local->uavg->avg7 += $u->a7;
	$local->uavg->avg8 += $u->a8;
	$local->uavg->avg9 += $u->a9;
	$local->uavg->avg10 += $u->a10;
	$local->uavg->avg11 += $u->a11;
	$local->uavg->avg12 += $u->a12;
}

$local->uavg->avg1 /= $local->Selfs;
$local->uavg->avg2 /= $local->Selfs;
$local->uavg->avg3 /= $local->Selfs;
$local->uavg->avg4 /= $local->Selfs;
$local->uavg->avg5 /= $local->Selfs;
$local->uavg->avg6 /= $local->Selfs;
$local->uavg->avg7 /= $local->Selfs;
$local->uavg->avg8 /= $local->Selfs;
$local->uavg->avg9 /= $local->Selfs;
$local->uavg->avg10 /= $local->Selfs;
$local->uavg->avg11 /= $local->Selfs;
$local->uavg->avg12 /= $local->Selfs;

foreach($aavg as $i=>$a){
	$local->aavg->avg1 += $a->a1;
	$local->aavg->avg2 += $a->a2;
	$local->aavg->avg3 += $a->a3;
	$local->aavg->avg4 += $a->a4;
	$local->aavg->avg5 += $a->a5;
	$local->aavg->avg6 += $a->a6;
	$local->aavg->avg7 += $a->a7;
	$local->aavg->avg8 += $a->a8;
	$local->aavg->avg9 += $a->a9;
	$local->aavg->avg10 += $a->a10;
	$local->aavg->avg11 += $a->a11;
	$local->aavg->avg12 += $a->a12;
}

$local->aavg->avg1 /= $local->Evals;
$local->aavg->avg2 /= $local->Evals;
$local->aavg->avg3 /= $local->Evals;
$local->aavg->avg4 /= $local->Evals;
$local->aavg->avg5 /= $local->Evals;
$local->aavg->avg6 /= $local->Evals;
$local->aavg->avg7 /= $local->Evals;
$local->aavg->avg8 /= $local->Evals;
$local->aavg->avg9 /= $local->Evals;
$local->aavg->avg10 /= $local->Evals;
$local->aavg->avg11 /= $local->Evals;
$local->aavg->avg12 /= $local->Evals;


echo json_encode($local);

?>