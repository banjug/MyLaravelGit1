<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'age',
        'salary',
        'week_hours',
        'hiring_date'
    ]
}
