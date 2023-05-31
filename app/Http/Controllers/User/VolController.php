<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vol;

class VolController extends Controller
{
    protected $vols;
    public function __construct(Vol $vols)
    {
        $this->vols = $vols;
    }
    public function index()
    {
        $vols = $this->vols->get();

        return view('vols.list',compact('vols'));
    }
}
