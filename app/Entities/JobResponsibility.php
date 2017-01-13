<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class JobResponsibility extends Model
{
    protected $table = 'job_responsibilities';

    protected $fillable = [
        'job_experience_id',
        'responsibility'
    ];

    public function jobResponsibility() {
        return $this->hasOne(JobExperience::class, 'id', 'job_experience_id');
    }
}
