<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //    public $incrementing = false;
    protected $table = 'team';
	protected $fillable = [
        'name',
        'phone',
        'email',
        'uni',
        'team_name',
        'super_name'
              
    ];
}
