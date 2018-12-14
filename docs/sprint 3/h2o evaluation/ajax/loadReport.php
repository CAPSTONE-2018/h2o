<?PHP
$Question = array(               #creates an Array for the questions
     #Communications  [1 - 5]  #6 comments
     "Expresses Ideas and Thoughts Verbally",
     "Expresses Ideas and Thoughts in Written Form",
     "Exhibits Good Listening and Comprehension",
     "Keeps Others Adequately Informed",
     "Uses Appropriate Communication Methods",
       "Comments",
      #Cooperation  [7- 12]  13 comments
	 "Establishes and Maintains Effective Relations",
     "Exhibits Tact and Consideration",
     "Displays Positive Outlook and Plesent Manner",
     "Offers Assistance and Support to Coworkers",
     "Works Cooperatively in Group Situations",
     "Works Actively to Resolve Conflicts",
        "Comments",
      #Cost Consciousness [14 - 17] 18 comments
     "Works Within Approved Budget",
     "Conserves Organizational Resources",
     "Develops and Implements Cost-saving Measures",
     "Contributes to Profits and Revenue",
        "Comments",
     #Dependability  [19 - 24] 25 comments
     "Responds to Requests for Service and Assistance",
     "Follows Instructions, Responds to Management Directions",
     "Takes Responsibility for Own Actions",
     "Commits to Doing Best Job Possible",
     "Keeps Commitments",
     "Meets Attendance and Punctuality Guidelines",    
       "Comments",
     #Initiative  [26 - 31] 32 comments
     "Volunteers Readily",
     "Undertakes Self-Development Activities",
     "Seeks Increased Responsibilities",
     "Takes Independant Actions and Calculated Risks",
     "Looks for and Takes Advantages of Opportunities",
     "Asks for Help When Needed",
       "Comments",
     #Job Knowledge [33-38] 39
     "Competent in Required Job Skills and Knowledge",
     "Exhibits Ability to Learn and Apply New Skills",
     "Keeps Abreast of Current Developments",
     "Requires Minimal Supervision",
     "Displays Understanding of How Job Relates to Others",
     "Uses Resources Effectively",
        "Comments",
     #Judgement [40 - 44] 45
     "Displays Willingness to Make Decisions",
     "Exhibits Sound and Accurate Judgement",
     "Supports and Explains Reasoning for Decisions",
     "Includes Appropriate People in Decision-Making Process",
     "Makes Timely Decisions",
        "Comments",
     #Planning and Organization [46-51] 52
     "Prioritizes and Plans Work Activities",
     "Uses Time Efficiently",
     "Plans for Additional Resources",
     "Integrates Changes Smoothly",
     "Sets Goals and Objectives",
     "Works in an Organized Manner",
       "Comments",
     #Problem Solving   [53 - 57] 58
     "Identifies Problems in a Timely Manner",
     "Gathers and analyzes Information Skillfully",
     "Develops Alternative Solutions",
     "Resolves Problems in Early Stages",
     "Works Well in Group Problem-Solving Situations",
       "Comments",
     #Quality [59 - 63]64
     "Demonstrates Accuracy and Thoroughness",
     "Displays Commitment to Excellence",
     "Looks for Ways to Improve and Promote Quality",
     "Applies Feedback to Improve Preformance",
     "Monitors Own Work to Ensure Quality",
     "Comments",
     #Quantity[65 - 69] 70
     "Meets Productivity Standards",
     "Completes Work in a Timely Manner",
     "Strives to Increase Productivity",
     "Works Quickly",
     "Achieves Established Goals",
     "Comments",
     #Use of Technology [71- 75]
     "Demonstrates Required Skills",
     "Adapts to New Technologies",
     "Troubleshoots Problems",
     "Uses Technology to Increase Productivity",
     "Keeps Technical Skills up to Date",
	);                                                          #end of array

function drawDots($num){
	$html = '';
	switch($num){
		case 0:
			return '<span style="color:red;font-weight:bold;">--</span>';
			break;
		case 1:
			$color = '#cc3300';
			break;
		case 2:
			$color = '#ff9900';
			break;
		case 3:
			$color = '#e6e600';
			break;
		case 4:
			$color = '#ccff33';
			break;
		case 5:
			$color = '#99ff33';
			break;
	}
	for ($i = 0; $i < $num; $i++){
		
		$html .= '<span style="background-color:'. $color .';" class="dot"></span>';
	}
	return $html;
}

if (isset($_GET['survFor'])){
	include ('../class/db.php');
	$db = new Database();
	$user_ans = explode('`', $db->sp_get_survey($_GET['survFor'], 'user')['answers']);
	$admin_ans = explode('`', $db->sp_get_survey($_GET['survFor'], 'admin')['answers']);
	
	for ($i = 0; $i <= 75; $i++) {                            #iterates through all questions
	$isComment = false;
	switch($i){
		case 0:
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-volume-up"></i>';
			echo '<h3>Communication</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 6:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-user"></i>';
			echo '<h3>Cooperation</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 13:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-shopping-cart"></i>';
			echo '<h3>Cost Consciousness</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 18:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-thumbs-up"></i>';
			echo '<h3>Dependability</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 25:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-gift"></i>';
			echo '<h3>Initiative</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 32:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-paperclip"></i>';
			echo '<h3>Job Knowledge</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 39:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-eye-open"></i>';
			echo '<h3>Judgement</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 45:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-exclamation-sign"></i>';
			echo '<h3>Planning and Organization</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 52:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-wrench"></i>';
			echo '<h3>Problem Solving</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 58:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-ok-circle"></i>';
			echo '<h3>Quality</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 64:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-fire"></i>';
			echo '<h3>Quantity</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		case 70:
			echo '</div>';
			echo '</div>';
			echo '<div class="widget">';
			echo '<div class="widget-header" style="padding-top:10px;height:30px;"> <i class="icon-plane"></i>';
			echo '<h3>Use of Technology</h3>';
			echo '</div>';
			echo '<div class="widget-content">';
			break;
		
		}
		
		if ($i == 5 || $i == 12  || $i == 17 || $i == 24 || $i == 31 || $i == 38 || $i == 44 || $i == 51 || $i == 57 || $i == 63 || $i == 69){
			$isComment = true;
		}
		
		echo "<b>" . $Question[$i] . "</b> <br />";
		echo "Self-Evaluation Score: ";
		
		if (!$isComment)
			echo drawDots($user_ans[$i]);
		else
			echo $user_ans[$i];
		echo "<br /> Evaluator Score: ";
		if (!$isComment)
			echo drawDots($admin_ans[$i]);
		else
			echo $admin_ans[$i];

		
		echo "<hr />";
	}
	echo "</div></div><br />";
	
}else{
	echo 'INTERNAL SERVER ERROR';
}


?>