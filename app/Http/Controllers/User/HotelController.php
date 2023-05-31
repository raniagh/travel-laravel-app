<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;
use App\Ville;

class HotelController extends Controller
{
    protected $hotels;
    public function __construct(Hotel $hotels)
    {
       
        $this->hotels = $hotels;
    }
    public function index()
    {
        $villes= Ville::All(); 
        $hotels=$this->hotels->get();
        if (request()->etoile) {
        $hotels = $this->hotels->where('etoile','=',request()->etoile)->get();
        }
        if (request()->ville){
            $hotels = $this->hotels->where('idVille','=',request()->ville)->get();
            
        }
        if (request()->wifi){
            $hotels = $this->hotels->where('facilitie', 'like','%'.request()->wifi.'%')->get();
        }
        if (request()->restaurant){
            $hotels = $this->hotels->where('facilitie', 'like','%'.request()->restaurant.'%')->get();
        }
        if (request()->cafe){
            $hotels = $this->hotels->where('facilitie', 'like','%'.request()->cafe.'%')->get();
        }
        if (request()->bar){
            $hotels = $this->hotels->where('facilitie', 'like','%'.request()->bar.'%')->get();
        }
        if (request()->cher =='moins'){
            $hotels = $this->hotels->orderBy('prix')->get();
        }
        if (request()->cher =='plus'){
            $hotels = $this->hotels->orderBy('prix','desc')->get();
        }
        if (request()->star =='bas'){
            $hotels = $this->hotels->orderBy('etoile')->get();
        }
        if (request()->star =='haut'){
            $hotels = $this->hotels->orderBy('etoile','desc')->get();
        }
        
       
        return view('hotels.list',compact('hotels','villes'));
    }
}
