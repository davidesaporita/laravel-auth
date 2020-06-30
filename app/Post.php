<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Mass assign
    protected $fillable = [
        'user_id', 
        'title',
        'slug',
        'body',
        'image'
    ];

}
