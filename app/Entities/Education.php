<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';

    protected $fillable = [
        'user_id',
        'school_name',
        'course_name',
        'start_date',
        'end_date'
    ];

    public function userEducation() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
