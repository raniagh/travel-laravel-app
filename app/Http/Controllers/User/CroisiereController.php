<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;

class CroisiereController extends Controller
{
    protected $croisieres;
    public function __construct(Tour $croisieres)
    {
        $this->croisieres = $croisieres;
    }
    public function index()
    {
        $croisieres = $this->croisieres->get();

        return view('croisieres.list',compact('croisieres'));
    }
}
