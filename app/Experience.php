<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'id','duration', 'company_name', 'position','message',
    ];
}
