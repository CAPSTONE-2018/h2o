<?PHP

include ('../class/db.php');

$db = new Database();

$users = $db->sp_get_all_users('user');
$admins = $db->sp_get_all_users('admin');

$html = '';

$html .= '<table style="width:100%;">';
$html .= '<tr>';
$html .= '<td>';
$html .= '<h4>';
$html .= '<span style="background-color:#dfedfe;" class="dot"></span> Staff ';
$html .= '<br />';
$html .= '<span style="background-color:#e7fdec;" class="dot"></span> Employee';
$html .= '</h4>';
$html .= '</td>';

$html .= '<td>';
$html .= '<h4 style="float:right;">';
$html .= '<span style="background-color:red;" class="dot2"></span> Haven\'t completed survey';
$html .= '<br />';
$html .= '<span style="background-color:yellow;" class="dot2"></span> Need to be evaluated';
$html .= '</h4>';
$html .= '</td>';
$html .= '</tr>';
$html .= '</table>';

$html .= '<div style="text-align:left;margin-top:-5px;">';


$html .= '</div>';
$html .= '<hr />';
$html .= '<div style="">';

foreach($admins as $a){
	$html .= '<a href="javascript:;" class="shortcut" style="width:125px;background-color:#dfedfe;border:solid 1px lightgray;text-align:center;"><i class="shortcut-icon icon-user"></i><span class="shortcut-label">'. $a['fullname'] .'</span></a>';
	
}

foreach($users as $i=>$u){
	$nonCompleteHTML = '';
	$needEvalHTML = '';
	if ($db->sp_survey_complete($u['username'], 'user') == 0){
		$nonCompleteHTML = '<span style="background-color:red;position:absolute;margin-top:-60px;margin-left:-50px;" class="dot2"></span>';
	}
	if ($db->sp_survey_complete($u['username'], 'admin') == 0){
		$needEvalHTML = '<span style="background-color:yellow;position:absolute;margin-top:-40px;margin-left:-50px;" class="dot2"></span>';
	}
	$html .= '<a href="javascript:;" class="shortcut" style="width:125px;background-color:#e7fdec;border:solid 1px lightgray;text-align:center;">'.'<i class="shortcut-icon icon-user"></i>';
	$html .= '<span class="shortcut-label">'. $u['fullname'] .'</span>'. $nonCompleteHTML . $needEvalHTML ;
	$html .= '</a>';
}

$html .= '</div>';
/*




<a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-user"></i><span class="shortcut-label">Users - <?php echo $class->getCount("h2o_users")?></span></a>

	*/
echo json_encode($html);

?>