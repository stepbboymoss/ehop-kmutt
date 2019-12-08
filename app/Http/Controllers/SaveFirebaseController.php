<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveFirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth'); 
    }

    public function index($bus,$lat,$long,$speed){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/laravelfirebase-47dc3-firebase-adminsdk-fjufv-e18dc2835c.json');
        // laravelfirebase-9d875-firebase-adminsdk-wltre-a1b8486a6c
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://laravelfirebase-47dc3.firebaseio.com/')
            ->create();
        $database = $firebase->getDatabase();
        $ref = $database->getReference("location/$bus");

        $newLocation = $database
            ->getReference("location/$bus")
            ->update([
                'lat' => $lat,
                'long' => $long,
                'speed' => $speed
            ]);

        $location = $ref->getvalue();
        $data = [];
        $data['lat'] = $location['lat'];
        $data['long'] = $location['long'];
        $data['speed'] = $location['speed'];

        return $this->responseRequestSuccess($data);
    }

    public function indexpeople($bus,$old){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/laravelfirebase-47dc3-firebase-adminsdk-fjufv-e18dc2835c.json');
        // laravelfirebase-9d875-firebase-adminsdk-wltre-a1b8486a6c
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://laravelfirebase-47dc3.firebaseio.com/')
            ->create();
        $database = $firebase->getDatabase();
        $ref = $database->getReference("location/$bus");

        $newLocation = $database
            ->getReference("location/$bus")
            ->update([
                'old' => $old
            ]);

        $location = $ref->getvalue();
        $data = [];
        $data['old'] = $location['old'];

        return $this->responseRequestSuccess($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
