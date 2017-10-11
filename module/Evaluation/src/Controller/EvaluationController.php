<?php

namespace Evaluation\Controller;

use Evaluation\Model\SurveyTable;
use Evaluation\Model\UserTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EvaluationController extends AbstractActionController
{
    private $surveyTable;
    private $userTable;

    public function __construct(SurveyTable $stable, UserTable $utable)
    {
        $this->surveyTable = $stable;
        $this->userTable = $utable;
    }

    public function indexAction()
    {
      $surveysResultSet = $this->surveyTable->fetchAll();
      $surveyCount = $surveysResultSet->count();
      //last survey
			$user1Survey = Survey::load($surveysResultSet[surveyCount-1]->id);
			//Query for the second to last created survey
			$user2Survey = Survey::load($survesResultSet[surveyCount-2]->id);
			//Averages Categories and Pulls names
			$u1S = $user1Survey->getCategoryRanks();
			$u2S = $user2Survey->getCategoryRanks();
			$u1N = $this->userTable->getUsername($user1Survey->surveyFor);
			$u2N = $this->userTable->getUsername($user2Survey->surveyFor);

      $userCount = $userTable->fetchAll()->count();

      return new ViewModel([
        'u1S' => $u1S,
        'u2S' => $u2S,
        'u1N' => $u1N,
        'u2N' => $u2N,
        'last' => $user1Survey->id,
        'userCount' => $userCount
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
