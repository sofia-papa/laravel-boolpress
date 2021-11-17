<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Category(){
       return $this->belongsTo('App\Models\Category');
    }
}
