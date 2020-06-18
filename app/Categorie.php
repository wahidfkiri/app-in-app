<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function application()
    {
       return $this->hasMany('App\Application');
    }
}
