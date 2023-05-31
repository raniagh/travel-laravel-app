<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoitureController extends Controller
{
    protected $voitures;
    public function __construct(Voiture $voitures)
    {
        $this->voitures = $voitures;

        //parent::__construct();
    }
    public function index()
    {
        $voitures = $this->voitures;

        return view('admin.voitures.index', compact('voitures'));

    }
    public function create(Voiture  $voitures)
    {
        return view('admin.voitures.add', compact('voitures'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Voiture = new Voiture ();
        $this->validate($request, [
            'caracteristique' => 'required',
            'etat' => 'required',

        ]);

        $Voiture ->caracteristique = $request->caracteristique;
        $Voiture ->etat = $request->etat;
        $Voiture ->image= $request->image;

        $Voiture ->save();

        return redirect(route('admin.voitures.index'))->with('message','Voiture a été ajouté avec succès');
    }

    public function show($maricule,Request $request)
    {
        $Voiture = Voiture::findOrFail($maricule);
        if($request->hasFile('image')) {
            $Voiture = $request->file('image');
            $filename = time() . '.' . getClientOriginalExtension();
            Image::make($Voiture)->resize(50,50)->save(public_path('/images/' . $filename));
            $Voiture  = new Voiture();
            $Voiture ->image = $filename;
            $Voiture ->save();
        }


        return view('admin.voitures.show', compact('Voiture'));

    }

    public function edit($maricule)
    {
        $Voiture  = Voiture ::findOrFail($maricule);
        $voitures= $this->voitures->get();
        return view('admin.voitures.edit', compact('Voiture','voitures'));
    }
    public function update(Request $request, $maricule)
    {
        $this->validate($request, [
            'caracteristique' => 'required',
            'etat' => 'required',

        ]);

        $Voiture = Voiture::findOrFail($maricule);
        $Voiture->fill($request->only('caracteristique','etat'))->save();


        return redirect(route('admin.voitures.index'))->with('message','Voiture a été modifié avec succès');
    }
    public function destroy($maricule)
    {
        Voiture::where('maricule','=', $maricule)->delete();
        return redirect(route('admin.voitures.index'))->with('message','Voiture a été suppimé avec succès!');
    }
}
