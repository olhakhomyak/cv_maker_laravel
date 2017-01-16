<?php

namespace App\Repositories;

use App\Entities\JobExperience;
use App\Entities\User;
use App\Entities\Education;


class MainRepository
{
    private $model;
    private $educationModel;
    private $jobExperienceModel;

    public function __construct(User $user, Education $education, JobExperience $jobExperience)
    {
        $this->model = $user;
        $this->educationModel = $education;
        $this->jobExperienceModel = $jobExperience;
    }

    public function getUser($id)
    {
        return $this->model->with('jobExperience.jobResponsibility', 'Education')->find($id);
    }

    public function create(array $attributes = [])
    {
        return $this->educationModel->create($attributes);
    }

    public function addJob(array $attributes = [])
    {
        return $this->jobExperienceModel->create($attributes);
    }

    public function removeJob($id) {
        return $this->jobExperienceModel->destroy($id);
    }

    public function removeSchool($id) {
        return $this->educationModel->destroy($id);
    }
}
