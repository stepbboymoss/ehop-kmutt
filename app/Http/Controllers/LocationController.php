<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Route;
use App\route_location;
use App\Building;
use App\Bus;
use App\image;

use Google\Cloud\Vision\VisionClient;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Illuminate\Support\Str;
use Google\Cloud\Core\ServiceBuilder;

use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations=Location::all()->toArray();
        $routes=Route::all()->toArray();
        $route_locations=route_location::all()->toArray();
        $buildings=Building::all()->toArray();

        return view('ebus',compact('locations','routes','route_locations','buildings'));
    }

    public function countimg()
    {
        $images=Image::all()->toArray();

        $cloud = new ServiceBuilder([
            'keyFilePath' => base_path('TEST-bd4de805b533.json'),
            'projectId' => 'sublime-elixir-259815'
        ]);
        $vision = $cloud->vision();

        foreach ($images as $image) {
            $test=$image['image'];
        }

        $test = str_replace('data:image/jpeg;base64,', '', $test);
        $test = str_replace(' ', '+', $test);
        $imageName = "faceapi" . '.jpg';

        Storage::disk('public')->put($imageName, base64_decode($test));
        // dd($test);

        $output = imagecreatefromjpeg(public_path('storage/faceapi.jpg'));
        $image = $vision->image(file_get_contents(public_path('storage/faceapi.jpg'))
            , ['FACE_DETECTION']);

        $results = $vision->annotate($image);

        $counter = 0;
        foreach ($results->faces() as $face) {
            $counter++;
//            $face[number];
                $vertices = $face->boundingPoly()['vertices'];
                $x1 = $vertices[0]['x'];
                $y1 = $vertices[0]['y'];
                $x2 = $vertices[2]['x'];
                $y2 = $vertices[2]['y'];
                imagerectangle($output, $x1, $y1, $x2, $y2, 0x00ff00);
        }
        header('Content-Type: image/jpeg');
        $faces=$counter;
        return $this->responseRequestSuccess($faces);
    }

    public function savecount()
    {
        $images=Image::all()->toArray();

        $cloud = new ServiceBuilder([
            'keyFilePath' => base_path('TEST-bd4de805b533.json'),
            'projectId' => 'sublime-elixir-259815'
        ]);
        $vision = $cloud->vision();

        foreach ($images as $image) {
            $test=$image['image'];
        }

        $test = str_replace('data:image/jpeg;base64,', '', $test);
        $test = str_replace(' ', '+', $test);
        $imageName = "faceapi" . '.jpg';

        Storage::disk('public')->put($imageName, base64_decode($test));
        // dd($test);

        $output = imagecreatefromjpeg(public_path('storage/faceapi.jpg'));
        $image = $vision->image(file_get_contents(public_path('storage/faceapi.jpg'))
            , ['FACE_DETECTION']);

        $results = $vision->annotate($image);

        $counter = 0;
        foreach ($results->faces() as $face) {
            $counter++;
//            $face[number];
                $vertices = $face->boundingPoly()['vertices'];
                $x1 = $vertices[0]['x'];
                $y1 = $vertices[0]['y'];
                $x2 = $vertices[2]['x'];
                $y2 = $vertices[2]['y'];
                imagerectangle($output, $x1, $y1, $x2, $y2, 0x00ff00);
        }
        header('Content-Type: image/jpeg');
        $faces=$counter;
        $bus = new Bus([
            'num' => $faces
        ]);
        $bus -> save();
        // return $this->responseRequestSuccess($faces);
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
