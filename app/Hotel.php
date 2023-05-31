<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $primaryKey='idh';
    protected $fillable = [
        'nom', 'prix','description','facilitie','etoile','type','ville','pays','image',
    ];
    public function Reservation()
    {
        return $this->hasMany('App\Reservation');

    }
    public function ville()
    {
        return $this->hasMany('App\Ville', 'idVille','idVille');
    }


}
