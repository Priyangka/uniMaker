<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public $incrementing = false;
    protected $table = 'course';
	protected $fillable = [
        'id',
        
        'course_name',
        'desc'
    ];
}
