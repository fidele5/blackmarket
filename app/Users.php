<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $fillable = [
        'nom',
        'prenom',
        'username',
        'telephone1',
        'telephone2',
        'email',
        'password',
        'photo',
        'type'
    ];

    
    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
