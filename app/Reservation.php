<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $primaryKey='idres';
    protected $fillable = [
        'id','idt'
    ];
   
    public function Tour()
    {
        return $this->belongsTo(\App\Hotel::class);
    }
    
    public function User()
    {
        return $this->belongsTo(\App\User::class);
    }


}
