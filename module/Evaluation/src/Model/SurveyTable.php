<?php

namespace Evaluation\Model;

use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

class SurveyTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getSurvey($id)
    {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' => $id]);
        $row = $rowset->current();
        if (! $row) {
            throw new RuntimeException(sprintf(
                'Could not find row with identifier %d',
                $id
            ));
        }

        return $row;
    }
    
    public function saveSurvey(Survey $survey)
    {
        $data = [
            'surveyby_u_id'  => $survey->surveyBy,
            'surveyfor_u_id' => $survey->surveyFor,
            'sur_type' => $survey->surveyType,
            'answers' => $survey->answers,
            'date_taken' => $survey->dateTaken,
        ];

        $id = (int) $survey->id;

        if ($id === 0) {
            $this->tableGateway->insert($data);
            return;
        }

        if (! $this->getSurvey($id)) {
            throw new RuntimeException(sprintf(
                'Cannot update album with identifier %d; does not exist',
                $id
            ));
        }

        $this->tableGateway->update($data, ['id' => $id]);
    }

}
