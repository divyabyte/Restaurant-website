<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'category', 'res_id', 'type', 'price'
    ];

}
