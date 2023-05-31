<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;
use App\User;
use App\Reservation;
use Illuminate\Support\Facades\Input;
use DB;
use App\Quotation;
use Session;

class TourController extends Controller
{
    protected $tours;
    public function __construct(Tour $tours)
    {
        $this->tours = $tours;
    }
    public function index()
    {
        $tours = $this->tours->paginate(8);

        return view('tours.list',compact('tours'));
    }
    public function Recherche()
    {
        $depart = Input::get('keyword1');
        $destination = Input::get('keyword2');
        $de = Input::get('keyword3');
        $duree = Input::get('keyword4');
        $type = Input::get('keyword5');
        $budget = Input::get('keyword6');

        $tours = $this->tours
            ->where('depart', '=', $depart)
            ->where('destination', '=', $destination)
            ->where('de', '=', $de)
            ->where('duree', '=', $duree)
            ->where('type', '=', $type)
            ->where('budget', '<=', $budget)
            ->paginate(8);
        $count=count($tours);


        return view('tours.recherche',compact('tours','type','count','depart','destination','de','duree','budget'));
    }
    public function croissant(Request $request)
    {
        $val=$request->val;
        if($val=='asc') {
            $tours = $this->tours->OrderBy('budget', 'asc')->paginate(8);
        }else
            $tours = $this->tours->OrderBy('budget', 'desc')->paginate(8);
        $count=count($tours);
        return view('tours.recherche',compact('tours','count'));
    }

    public function show($idt)
    {
        $tour = Tour::findOrFail($idt);
        $type = DB::table('tours')->select('type')->where('idt', '=', $idt)->get();
        
        Session::put('frontSession','tour');
        return view('tours.detail',compact('tour','type'));
    }
    public function reserve($idt)
    {
        $tour = Tour::findOrFail($idt);


        return view('tours.reserve',compact('tour'));
    }

    public function checkout($idt)
    {
        $reservation = new Reservation ();
        $tour = Tour::findOrFail($idt);
        $reservation ->idt = $idt;
        $reservation ->id = '1';
        $reservation ->save();

        return redirect(route('tour'))->with('message','Réservation enregistré avec succès');
    }

    


    protected function create(Request $request)
    {
       
         User::create([
            'nom' =>  $request['nom'],
            'prenom' =>  $request['prenom'],
            'tel' =>  $request['tel'],
            'email' =>  $request['email'],
            'password' => $request['password'],
        ]);
         return back()->with('message','Enregistré avec succés');
    }

public function confirme($idt)
    {
        $tour = Tour::findOrFail($idt);

        return view('tours.checkout',compact('tour'));
    }


}
