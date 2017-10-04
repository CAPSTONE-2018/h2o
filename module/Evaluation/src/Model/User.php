<?php

namespace Evaluation\Model;

class Album
{
    public $id;
    public $username;
    public $key;
    public $role;
    public $userSurvey;
    public $adminSurvey;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->username = !empty($data['username']) ? $data['username'] : null;
        $this->key  = !empty($data['key']) ? $data['key'] : null;
        $this->role  = !empty($data['role']) ? $data['role'] : null;
        $this->userSurvey  = !empty($data['userSurvey']) ? $data['userSurvey'] : null;
        $this->adminSurvey  = !empty($data['adminSurvey']) ? $data['adminSurvey'] : null;
    }
}
