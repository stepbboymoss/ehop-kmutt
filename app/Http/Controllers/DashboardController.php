<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // public function __construct(){
    //     $this->people_bus;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $day_s = ["00","01","02","03","04","05","06","07","08","09","10",
                "11","12","13","14","15","16","17","18","19","20",
                "21","22","23","24","25","26","27","28","29","30","31"];
        $month_s = ["00","31","28","31","30","31",
                    "30","31","31","30","31","30","31"];  
        $to_id = DB::table('dashboards')->max('id');
        $from_id = $to_id - 30;
        
        $year=date("Y", time());
        $month=date("m", time());
        for($i = 1; $i <= $month_s[(int)$month]; $i++){
            $dates[$i]=date('Y-m-d', strtotime("$year-$month-$i"));
            $peoples[$i] = Dashboard::select('people')
                ->where('created_at', 'LIKE','%-'.$month.'-%')
                ->Where('created_at', 'LIKE','%'.$year.'%')
                ->Where('created_at', 'LIKE','%-'."$day_s[$i]".' %')
                ->sum('people');
        }
        $barchart = $this->barhighchart($peoples,$dates);
        $month="0";
        $year="0";
        
        return view('dashboard',compact('month','year'))
            ->withChartarray ($barchart) ;
    }

    public function highchartsearch(Request $request)
    {
        $day_s = ["00","01","02","03","04","05","06","07","08","09","10",
                "11","12","13","14","15","16","17","18","19","20",
                "21","22","23","24","25","26","27","28","29","30","31"];
        $month_s = ["00","31","28","31","30","31",
            "30","31","31","30","31","30","31"]; 

        $this->validate($request, [ 
            'month'  => 'required',
            'year'  => 'required'  ]);

        $month = $request->get('month');
        $year = $request->get('year');

        for($i = 1; $i <= $month_s[(int)$month]; $i++){
            $dates[$i]=date('Y-m-d', strtotime("$year-$month-$i"));
            $peoples[$i] = Dashboard::select('people')
                ->where('created_at', 'LIKE','%-'.$month.'-%')
                ->Where('created_at', 'LIKE','%'.$year.'%')
                ->Where('created_at', 'LIKE','%-'."$day_s[$i]".' %')
                ->sum('people');
        }

        // dd($dates);

        // $peoples = Dashboard::select('people')
        //     ->where('created_at', 'LIKE','%-'.$month.'-%')
        //     ->Where('created_at', 'LIKE','%'.$year.'%')
        //     ->get();

        // $dates = Dashboard::select('created_at')
        //     ->where('created_at', 'LIKE','%-'.$month.'-%')
        //     ->Where('created_at', 'LIKE','%'.$year.'%')
        //     ->get();
            
        $barchart = $this->barhighchart($peoples,$dates);

        if($peoples != "[]" || $dates != "[]"){
            return view('dashboard',compact('month','year'))
            ->withChartarray ($barchart)->with('success', 'เสร็จสมบรูณ์');
        }else{
            return view('dashboard',compact('month','year'))
            ->withChartarray ($barchart)->with('success', 'ไม่สำเสร็จ');
        }
    }
    
    public function barhighchart($peoples,$dates){
        //Highcharts
        $chartArray ["chart"] = array(
            "zoomType" => "xy"
        );

        $chartArray ["title"] = array("text" => "");
        $chartArray ["credits"] = array("enabled" => false);

        $people_bus = [];
        $date_at = [];
        $dataArray = [];

        foreach ($dates as $date){
            array_push($date_at,date('d-M-Y', strtotime($date)));
        }

        foreach ($peoples as $people){
            array_push($people_bus, (int)$people);
        }

        array_push($dataArray, $date_at, $people_bus);

        $chartArray ["xAxis"] = array(
            "categories" => $date_at,
            "crosshair" => true
        );

        $chartArray ["yAxis"] = array(
            array(
                "labels" => array(
                    "format" => ""
                ),
                "title" => array(
                    "text" => "จำนวนคน"
                ),
                "min" => "0",
                "max" => "200",
            )
        );

        $chartArray ["tooltip"] = array(
            "shared" => true
        );

        $chartArray ["legend"] = array(
            "layout" => "vertical",
            "align" => "center",
            "x" => 380,
            "verticalAlign" => "top",
            "y" => -18,
            "floating" => "true"
        );

        $chartArray ["series"] = array(
            array(
                "name" => "จำนวนคนที่ใช้บริการ",
                "type" => "bar",
                "data" => $people_bus,
                "color" => "#FF6600",
                "tooltip" => array(
                    "valueSuffix" => "คน"
                )
            )
        );
        return $chartArray;
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
