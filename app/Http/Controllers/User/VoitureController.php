<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Voiture;

class VoitureController extends Controller
{
    protected $voitures;
    public function __construct(Voiture $voitures)
    {
        $this->voitures = $voitures;
    }
    public function index()
    {
        $voitures = $this->voitures->get();

        return view('voitures.list',compact('voitures'));
    }

}
