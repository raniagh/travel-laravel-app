<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $primaryKey='idt';
    protected $fillable = [
        'depart','destination','de','duree','type','budget','image',
    ];
    public function Reservation()
    {
        return $this->hasMany('App\Reservation');

    }

}
