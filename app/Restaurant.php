<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{



    protected $fillable = [
        'name', 'category', 'location', 'user_id', 'img'
    ];

    public function menus(){
        return $this->hasMany(\App\Menu::class,'res_id');
    }

    
}
