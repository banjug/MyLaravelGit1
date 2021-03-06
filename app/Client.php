<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'company',
        'representative_name',
        'address',
        'phone_number',
        'email'
    ]
}
