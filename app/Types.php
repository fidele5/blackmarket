<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    //

    protected $fillable = [
        'libelle', 'pourcentage', 'priorite'
    ];

    public function articles()
    {
        return $this->hasMany('App\Articles');
    }
}
