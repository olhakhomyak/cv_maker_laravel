<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class JobExperience extends Model
{
    protected $table = 'job_experiences';

    protected $fillable = [
        'user_id',
        'job_title',
        'company_name',
        'start_date',
        'end_date'
    ];

    public function jobResponsibility() {
        return $this->hasMany(JobResponsibility::class,'job_experience_id', 'id');
    }
}
