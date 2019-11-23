<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Route;
use App\route_location;
use App\Bus;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $locations=Location::all()->toArray();
        $routes=Route::all()->toArray();
        $route_locations=route_location::all()->toArray();
        $buses=Bus::all()->toArray();
        return view('map',compact('locations','routes','route_locations','buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['order'=>'required', 'name'=>'required', 'detail'=>'required', 'lat'=>'required', 'lon'=>'required']);
        $place = new Place([
            'order' => $request ->get('order'),
            'name' => $request ->get('name'),
            'detail' => $request ->get('detail'),
            'lat' => $request ->get('lat'),
            'lon' => $request ->get('lon')
        ]);
        $place -> save();
        return redirect()->route('place.create')->with('success','บันทึกสำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $place = Place::find($id);
        return view('place.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Place::find($id);
        $place->delete();
        return redirect()->route('place.index')->with('success','ลบข้อมูลสำเร็จ');
    }
}
