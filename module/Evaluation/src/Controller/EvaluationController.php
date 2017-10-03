<?php

namespace Evaluation\Controller;

use Evaluation\Model\SurveyTable;
use Evaluation\Model\UserTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EvaluationController extends AbstractActionController
  implements ServiceLocatorAwareInterface
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
      $surveys = $this->surveyTable->fetchAll();
      $surveyCount = count($surveys);
      //last survey
			$user1Survey = Survey::load($surveys[surveyCount - 1]->id);
			//Query for the second to last created survey
			$user2Survey = Survey::load($surveys[surveyCount - 2]->id);
			//Averages Categories and Pulls names
			$u1S = $user1Survey->getCategoryRanks();
			$u2S = $user2Survey->getCategoryRanks();
			$u1N = $this->userTable->getUsername($user1Survey->surveyFor);
			$u2N = $this->userTable->getUsername($user2Survey->surveyFor);

      $userCount = $dbAdapter->query('SELECT COUNT(*) FROM h2_users');

      return new ViewModel([
        'u1S' => $u1S,
        'u2S' => $u2S,
        'u1N' => $u1N,
        'u2N' => $u2N,
        'last' => $last,
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
