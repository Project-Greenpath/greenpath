<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'collegeid',
        'full_name',
        'department',
        'yog',
        'phone',
        'email'
    ];

}