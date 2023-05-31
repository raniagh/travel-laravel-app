<?php

namespace App\Http\Controllers\Admin;

use App\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{

    protected $tours;
    public function __construct(Tour $tours)
    {
        $this->tours = $tours;

        //parent::__construct();
    }
    public function index()
    {
        $tours = $this->tours;

        return view('admin.tours.index', compact('tours'));

    }
    public function create(Tour  $tours)
    {
        return view('admin.tours.add', compact('tours'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Tour = new Tour ();
        $this->validate($request, [
            'region' => 'required',
            'style' => 'required',
            'pays' => 'required',
        ]);

        $Tour ->region = $request->region;
        $Tour ->style = $request->style;
        $Tour ->pays= $request->pays;

        $Tour ->save();

        return redirect(route('admin.tours.index'))->with('message','Tour a été ajouté avec succès');
    }

    public function show($idv,Request $request)
    {
        $Tour = Tour::findOrFail($idv);
        if($request->hasFile('image')) {
            $Tour = $request->file('image');
            $filename = time() . '.' . getClientOriginalExtension();
            Image::make($Tour)->resize(50,50)->save(public_path('/images/' . $filename));
            $Tour  = new Tour();
            $Tour ->image = $filename;
            $Tour ->save();
        }


        return view('admin.tours.show', compact('Tour'));

    }

    public function edit($idt)
    {
        $Tour  = Tour ::findOrFail($idt);
        $tours = $this->tours->get();
        return view('admin.tours.edit', compact('Tour','tours'));
    }
    public function update(Request $request, $idt)
    {
        $this->validate($request, [
            'region' => 'required',
            'style' => 'required',
            'pays' => 'required',
        ]);
        $Tour = Tour::findOrFail($idt);
        $Tour->fill($request->only('region','style','pays'))->save();


        return redirect(route('admin.tours.index'))->with('message','Tour a été modifié avec succès');
    }
    public function destroy($idt)
    {
        Tour::where('idt','=', $idt)->delete();
        return redirect(route('admin.tours.index'))->with('message','Tour a été suppimé avec succès!');
    }
}
