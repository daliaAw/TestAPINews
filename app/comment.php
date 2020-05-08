<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable= [
        'context', 'date_writen','user_id',
        'post_id'
    ];
}
