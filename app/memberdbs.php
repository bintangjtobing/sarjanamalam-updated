<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memberdbs extends Model
{
    protected $table = 'memberdbs';
    protected $fillable = [
        'profilepicture',
        'username',
        'password',
        'unpass',
        'fullname',
        'role',
        'birthdate',
        'status',
        'gender',
    ];
}
