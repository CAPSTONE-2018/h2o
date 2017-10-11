<?php

namespace Evaluation;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
  public function getConfig()
  {
    return include __DIR__ . '/../config/module.config.php';
  }

  public function getServiceConfig()
  {
    return [
      'factories' => [
          Model\SurveyTable::class => function($container) {
            $tableGateway = $container->get(Model\SurveyTableGateway::class);
            return new Model\SurveyTable($tableGateway);
          },
          Model\UserTable::class => function($container) {
            $tableGateway = $container->get(Model\UserTableGateway::class);
            return new Model\UserTable($tableGateway);
          },
          Model\SurveyTableGateway::class => function ($container) {
            $dbAdapter = $container->get(AdapterInterface::class);
            $resultSetPrototype = new ResultSet();
            $resultSetPrototype->setArrayObjectPrototype(new Model\Survey());
            return new TableGateway('survey', $dbAdapter, null, $resultSetPrototype);
          },
          Model\UserTableGateway::class => function ($container) {
            $dbAdapter = $container->get(AdapterInterface::class);
            $resultSetPrototype = new ResultSet();
            $resultSetPrototype->setArrayObjectPrototype(new Model\User());
            return new TableGateway('user', $dbAdapter, null, $resultSetPrototype);
          },
      ],
    ];
  }

  // Add this method:
  public function getControllerConfig()
  {
    return [
      'factories' => [
        Controller\EvaulationController::class => function($container) {
          return new Controller\EvaluationController(
            $container->get(Model\SurveyTable::class),
            $container->get(Model\UserTable::class)
          );
        },
      ],
    ];
  }
}
