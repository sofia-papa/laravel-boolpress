<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'description', 'url', 'category_id'];

    public function Category(){
       return $this->belongsTo('App\Models\Category');
    }
}
