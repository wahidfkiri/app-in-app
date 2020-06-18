<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function category()
    {
    	return $this->belongsTo('App\Categorie');
    }
    public function note()
    {
       return $this->hasMany('App\Note');
    }
    public function produit()
    {
       return $this->hasMany('App\Produit');
    }
     public function theme()
    {
        return $this->belongsTo('App\Theme');
    }
}
