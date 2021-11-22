<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'user_id', 'post_content', "post_date", "image_url", "category_id"];

    // Se $column = "ciaone"
    public function getFormattedDate($column, $format = 'd-m-Y H:i:s' )
    {
        // Accede alla proprietà "ciaone" dell'istanza di oggetto Post
        return Carbon::create($this->$column)->format($format);
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    // Questa funzione che si chiama user mi restituisce l'utente a cui è collegato il singol post
    public function user(){
        return $this->belongsTo('App\User');
    }
}
