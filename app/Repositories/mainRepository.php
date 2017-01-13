<?php

namespace App\Repositories;

use App\Entities\User;


class MainRepository
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getUser()
    {
        return $this->model->with('jobExperience.jobResponsibility')->find();
    }

}
