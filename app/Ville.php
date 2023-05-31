<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $primaryKey='idVille';
    protected $fillable = ['nom'];
    public function Hotel()
{
    return $this->belongsTo('App\Hotel', 'idh');
}
}
