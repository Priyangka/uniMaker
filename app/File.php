<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
      public $incrementing = false;
    protected $table = 'file';
	protected $fillable = [
        'title',
        'description',
        'course_id',
        'path'
    ];
}
