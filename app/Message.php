<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $fillable = [
        'id','name', 'email', 'subject','message',
    ];
}
