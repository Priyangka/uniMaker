<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
      public $incrementing = false;
    protected $table = 'student';
	protected $fillable = [
        'id',
        'student_name',
        'course_id',
        'course_status',
        'user_id'
              
    ];
}
