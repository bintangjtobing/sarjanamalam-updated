<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admindbs extends Model
{
    protected $table = 'admindbs';
    protected $fillable = [
        'username',
        'password',
        'unpass',
        'fullname',
        'role',
        'birthdate',
        'status',
    ];
}
