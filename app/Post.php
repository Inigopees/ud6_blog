<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function usuario(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function categoria(){
        return $this->belongsTo('App\Category', 'category_id');
    }
}
