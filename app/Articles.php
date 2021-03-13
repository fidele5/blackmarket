<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //

    protected $fillable = [
        'nom',
        'etat',
        'photo',
        'prix',
        'duree',
        'types_id',
        'user_id',
        'priorite_id',
        'description',
        'user_id',
        'commune_id'
    ];

    
    public function type()
    {
        return $this->belongsTo('App\Types', 'types_id', 'id');
    }
    
    
    
}
