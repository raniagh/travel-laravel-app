<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $primaryKey='matricule';
    protected $fillable = [
        'caracteristique', 'etat','image',
    ];
    public function Reservation()
    {
        return $this->hasMany('App\Reservation');

    }

}
