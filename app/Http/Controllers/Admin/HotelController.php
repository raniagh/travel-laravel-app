<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;
use App\Image;


class HotelController extends Controller
{
    protected $hotels;
    public function __construct(Hotel $hotels)
    {
        $this->hotels = $hotels;

        //parent::__construct();
    }
    public function index()
    {
        $hotels = $this->hotels;

        return view('admin.hotels.index', compact('hotels'));

    }
    public function create(Hotel $hotels)
    {
        return view('admin.hotels.add', compact('hotels'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Hotel = new Hotel();
        $this->validate($request, [
            'nom' => 'required',
            'type' => 'required',
            'ville' => 'required',
            'pays' => 'required',
        ]);

        $Hotel->nom = $request->nom;
        $Hotel->type = $request->type;
        $Hotel->ville= $request->ville;
        $Hotel->pays= $request->pays;
        $Hotel->image= $request->image;
        $Hotel->save();

        return redirect(route('admin.hotels.index'))->with('message','' .$Hotel->nom . ' a été ajouté avec succès');
    }

    public function show($id_activite,Request $request)
    {
        $Hotel = Hotel::findOrFail($id_activite);
        if($request->hasFile('image')) {
            $Hotel = $request->file('avatar');
            $filename = time() . '.' . getClientOriginalExtension();
            Image::make($Hotel)->resize(50,50)->save(public_path('/images/' . $filename));
            $Hotel = new Hotel();
            $Hotel->avatar = $filename;
            $Hotel->save();
        }
        $hotels = $this->hotels->get();

        return view('admin.hotels.show', compact('Hotel'));

    }

    public function edit($idh)
    {
        $Hotel = Hotel::findOrFail($idh);
        $hotels = $this->hotels->get();
        return view('admin.hotels.edit', compact('Hotel','hotels'));
    }
    public function update(Request $request, $idh)
    {
        $this->validate($request, [
            'nom' => 'required',
            'type' => 'required',
            'ville' => 'required',
            'pays' => 'required',
        ]);
        $Hotel = Hotel::findOrFail($idh);
        $Hotel->fill($request->only('nom','type','ville','pays'))->save();


        return redirect(route('admin.hotels.index'))->with('message','Hotel' .$Hotel->nom . ' a été modifié avec succès');
    }
    public function destroy($idh)
    {
        Hotel::where('idh','=', $idh)->delete();
        return redirect(route('admin.hotels.index'))->with('message','Hotel a été suppimé avec succès!');
    }

}
