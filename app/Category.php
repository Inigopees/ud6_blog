<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function categorias(){
        return $this->hasMany('App\Post');
    }
}
