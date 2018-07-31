<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralInfo extends Model
{
    protected $fillable = [
        'date_of_birth','address', 'email','phone',
    ];
}
