<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Villes extends Model
{
    protected $fillable = [
        "nom", "province", "etat"
    ];

    public function communes(){
        return $this->hasMany('App\Villes');
    }
}
