<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communes extends Model
{
    protected $fillable = [
        'nom', 'etat', 'villes_id'
    ];

    public function ville(){
        return $this->belongsTo('App\Villes');
    }
}
