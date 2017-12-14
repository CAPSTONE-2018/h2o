<?php

namespace Evaluation\Controller;

use Evaluation\Model\Survey;
use Evaluation\Model\User;
use Evaluation\Model\SurveyTable;
use Evaluation\Model\UserTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EvaluationController extends AbstractActionController
{
    private $surveyTable;
    private $userTable;

    public function __construct(
        SurveyTable $surveyTable,
        UserTable $userTable
    ) {
        $this->surveyTable = $surveyTable;
        $this->userTable = $userTable;
    }
  
    public function indexAction()
    {
        $surveysResultSet = $this->surveyTable->fetchAll();
        
        $user1Survey = NULL;
        $user2Survey = NULL;
        foreach($surveysResultSet as $survey) {
            $user2Survey = $user1Survey;
            $user1Survey = $survey;
        }

        $surveyCount = $surveysResultSet->count();
        
	      //Averages Categories and Pulls names
		    $u1S = $user1Survey->getCategoryRanks();
		    $u2S = $user2Survey->getCategoryRanks();
		    $u1N = $this->userTable->getUsername($user1Survey->surveyFor);
		    $u2N = $this->userTable->getUsername($user2Survey->surveyFor);

        $userCount = $this->userTable->fetchAll()->count();
        
        return new ViewModel([
            'u1S' => $u1S,
            'u2S' => $u2S,
            'u1N' => $u1N,
            'u2N' => $u2N,
            'last' => $user1Survey->id,
            'userCount' => $userCount,
        ]);
    }
      
    public function loginAction()
    {
    }

    public function logoutAction()
    {
    }

    public function surveyAction()
    {
    }

    public function chartAction()
    {
    }

    public function adduserAction()
    {
    }
}