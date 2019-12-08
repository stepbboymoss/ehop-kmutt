<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_location(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/laravelfirebase-47dc3-firebase-adminsdk-fjufv-e18dc2835c.json');
        // laravelfirebase-9d875-firebase-adminsdk-wltre-a1b8486a6c
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://laravelfirebase-47dc3.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();
        $ref = $database->getReference('location/bus1');
        $location = $ref->getvalue();
        $data = [];
        $data['bus1']['lat'] = $location['lat'];
        $data['bus1']['long'] = $location['long'];
        $data['bus1']['speed'] = $location['speed'];
        $ref = $database->getReference('location/bus2');
        $location = $ref->getvalue();
        $data['bus2']['lat'] = $location['lat'];
        $data['bus2']['long'] = $location['long'];
        $data['bus2']['speed'] = $location['speed'];

        return $this->responseRequestSuccess($data);
    }

    public function get_people(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/laravelfirebase-47dc3-firebase-adminsdk-fjufv-e18dc2835c.json');
        // laravelfirebase-9d875-firebase-adminsdk-wltre-a1b8486a6c
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://laravelfirebase-47dc3.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();
        $ref = $database->getReference('location/bus1');
        $location = $ref->getvalue();
        $data = [];
        $data['bus1']['old'] = $location['old'];
        $ref = $database->getReference('location/bus2');
        $location = $ref->getvalue();
        $data['bus2']['old'] = $location['old'];

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

    /*
    |--------------------------------------------------------------------------
    | response เมื่อข้อมูลส่งถูกต้อง
    |--------------------------------------------------------------------------
     */
    protected function responseRequestSuccess($ret)
    {
        return response()->json(['status' => 'success', 'data' => $ret], 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
    /*
    |--------------------------------------------------------------------------
    | response เมื่อข้อมูลมีการผิดพลาด
    |--------------------------------------------------------------------------
     */
    protected function responseRequestError($status = '', $ret = '', $message = 'Bad request', $statusCode = 200)
    {
        return response()->json(['status' => $status, 'data' => $ret, 'error' => $message], $statusCode)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }

}
