<?php

namespace App\Http\Controllers\Admin;

use App\Vol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VolController extends Controller
{
    protected $vols;
    public function __construct(Vol $vols)
    {
        $this->vols = $vols;

        //parent::__construct();
    }
    public function index()
    {
        $vols = $this->vols;

        return view('admin.vols.index', compact('vols'));

    }
    public function create(Vol  $vols)
    {
        return view('admin.vols.add', compact('vols'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Vol = new Vol ();
        $this->validate($request, [
            'date_dep' => 'required',
            'ville_dep' => 'required',
            'ville_arr' => 'required',
            'type' => 'required',
        ]);

        $Vol ->date_dep = $request->date_dep;
        $Vol ->ville_dep = $request->ville_dep;
        $Vol ->ville_arr= $request->ville_arr;
        $Vol ->type= $request->type;
        $Vol ->image= $request->image;
        $Vol ->save();

        return redirect(route('admin.hotels.index'))->with('message','vol a été ajouté avec succès');
    }

    public function show($idv,Request $request)
    {
        $Vol = Vol::findOrFail($idv);
        if($request->hasFile('image')) {
            $Vol = $request->file('image');
            $filename = time() . '.' . getClientOriginalExtension();
            Image::make($Vol)->resize(50,50)->save(public_path('/images/' . $filename));
            $Vol  = new Vol();
            $Vol ->image = $filename;
            $Vol ->save();
        }


        return view('admin.vols.show', compact('Vol'));

    }

    public function edit($idv)
    {
        $Vol  = Vol ::findOrFail($idv);
        $vols = $this->vols->get();
        return view('admin.vols.edit', compact('Vol','vols'));
    }
    public function update(Request $request, $idv)
    {
        $this->validate($request, [
            'date_dep' => 'required',
            'ville_dep' => 'required',
            'ville_arr' => 'required',
            'type' => 'required',
        ]);
        $Vol = Vol::findOrFail($idv);
        $Vol->fill($request->only('date_dep','ville_dep','ville_arr','type'))->save();


        return redirect(route('admin.hotels.index'))->with('message','Vol a été modifié avec succès');
    }
    public function destroy($idv)
    {
        Vol::where('idv','=', $idv)->delete();
        return redirect(route('admin.vols.index'))->with('message','Vol a été suppimé avec succès!');
    }
}
