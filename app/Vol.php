<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    protected $primaryKey='idv';
    protected $fillable = [
        'aller','retour','nom', 'ville_dep','ville_arr','type','image','adulte','enfant'
    ];

    public function Reservation()
    {
        return $this->hasMany('App\Reservation');

    }

}
