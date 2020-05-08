<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable =[
        'title' , 'date_writen','contant',
        'featured_image', 'vote_up', 'vote_down',
        'user_id', 'category_id'



        ];
}
