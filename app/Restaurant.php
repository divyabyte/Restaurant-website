<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{


    protected $fillable = [
        'name', 'category', 'location', 'user_id', 'img'
    ];

    
}
