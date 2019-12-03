<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="EnvyTheme">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KMUTT e-Bus | Web App for KMUTT e-Bus shuttle Service</title>
        <!-- Bootstrap CSS -->
        <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font-Awesome CSS -->
        <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link href="{{ URL::asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
        <!-- Magnific PopUp CSS -->
        <link href="{{ URL::asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="{{ URL::asset('assets/css/animate.css') }}" rel="stylesheet">
        <!-- Flaticon CSS -->
        <link href="{{ URL::asset('assets/css/flaticon.css') }}" rel="stylesheet">
                <!-- Font-flaticon CSS -->
                <link href="{{ URL::asset('assets/fonts/flaticon/flaticon.css') }}" rel="stylesheet">
        <!-- Style CSS -->
        <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet">
        <!-- Default Color CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/color/color-default.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ URL::asset('assets/img/bus-and-wifi-signal.png') }}">
        <title>Create Map Sample | Longdo Map</title>
        <style type="text/css">
            html {
                height: 100%;
            }
            #map {
                height: 100vh;
            }
            #result {
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                width: 1px;
                height: 80%;
                margin: auto;
                border: 4px solid #dddddd;
                background: #ffffff;
                overflow: auto;
                z-index: 2;
            }
        </style>
       

    </head>
  
    <body data-spy="scroll" data-offset="70" data-terget="#home" style="font-family: 'Kanit', sans-serif;" onload="init('','','','1');">
        
        <!-- Start video area -->
        <div id="home" class="home-video-area" style="position: relative">
            <div id="map" style="position: relative;"></div>
            <div class="text-box">
                <span id="form-toggle" class="d-block d-xl-none heading-form-mobile rotate"> <i class="fa fa-search"></i> ไปไหนดี ? <i class="fa fa-chevron-right" id="changeText"></i></span>
                <span class="d-none d-xl-block heading-form heading-form-mobile"> <i class="fa fa-search"></i> ไปไหนดี ? </span>
                <div class="form-toggle">
                <hr>
                    <form id="send_data1" name="form1_test" method="post" >
                        <!-- <div id="success" class="alert success">
                            <span class="closebtn">&times;</span>  
                            <strong>Success!</strong>
                        </div>
                        <div id="fail" class="alert">
                            <span class="closebtn">&times;</span>  
                            <strong>Fail!</strong>
                        </div> -->
                        <label for="">
                            <i class="flaticon-map"></i> จุดเริ่มต้น
                        </label>
                        <select name="input1" id="list-distance1">
                            <option value="">เริ่มจากที่ไหน...</option>
                            @foreach($locations as $location)
                                <option value="{{$location['id']+2}}" id="distance1-val{{$location['id']+2}}">{{$location['location_name']}}</option>
                            @endforeach
                            <!-- <option value="3" id="distance1-val3">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</option>
                            <option value="4" id="distance1-val4">ประตูทางเข้าโรงเรียนดรุณสิกขาลัย (จุดจอดที่ 2)</option>
                            <option value="5" id="distance1-val5">ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3)</option>
                            <option value="6" id="distance1-val6">ด้านหน้าอาคารเรียนรวม 3 (จุดจอดที่ 4)</option>
                            <option value="7" id="distance1-val7">ด้านหน้าอาคารอเนกประสงค์ (จุดจอดที่ 5)</option>
                            <option value="8" id="distance1-val8">ด้านหน้าอาคารสำนักหอสมุด (จุดจอดที่ 6)</option>
                            <option value="9" id="distance1-val9">ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์ (จุดจอดที่ 7)</option>
                            <option value="10" id="distance1-val10">ประตูทางเข้าสถาบันวิทยาการหุ่นยนต์ภาคสนาม (จุดจอดที่ 8)</option> -->
                            
                            <option value="1" id="distance1-val1">รถรับส่งสีเหลือง(Route1)</option>
                            <option value="2" id="distance1-val2">รถรับส่งสีแสด(Route2)</option>
                        </select>
                        <label class="label-choose2" for="">
                            <i class="flaticon-map"></i> เป้าหมาย
                        </label>
                        <select name="input2" id="list-distance2">
                            <option value="">ไปที่ไหนดี...</option>
                            <!-- <option value="3" id="distance2-val3">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</option>
                            <option value="4" id="distance2-val4">ประตูทางเข้าโรงเรียนดรุณสิกขาลัย (จุดจอดที่ 2)</option>
                            <option value="5" id="distance2-val5">ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3)</option>
                            <option value="6" id="distance2-val6">ด้านหน้าอาคารเรียนรวม 3 (จุดจอดที่ 4)</option>
                            <option value="7" id="distance2-val7">ด้านหน้าอาคารอเนกประสงค์ (จุดจอดที่ 5)</option>
                            <option value="8" id="distance2-val8">ด้านหน้าอาคารสำนักหอสมุด (จุดจอดที่ 6)</option>
                            <option value="9" id="distance2-val9">ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์ (จุดจอดที่ 7)</option>
                            <option value="10" id="distance2-val10">ประตูทางเข้าสถาบันวิทยาการหุ่นยนต์ภาคสนาม (จุดจอดที่ 8)</option> -->
                            @foreach($locations as $location)
                                <option value="{{$location['id']+2}}" id="distance2-val{{$location['id']+2}}">{{$location['location_name']}}</option>
                            @endforeach
                        </select>
                        
                        <!-- <div id="list-route">
                            <label for="">
                                เส้นทาง
                            </label>
                            <select name="input3" id="list-distance3">
                                <option value="">ไปเส้นทางไหนดี...</option>
                                <option value="1" id="distance3-val1">Route1</option>
                                <option value="2" id="distance3-val2">Route2</option>
                            </select>
                        </div> -->
                        <div class="center-wrap mt-4">
                            <div class="button">
                                <div class="button_submit">
                                    <button type="submit">ค้นหาเส้นทาง <i class="fa fa-long-arrow-right"></i></button>
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- 222222222222222222222222222222222222222222222222 -->
                    <form class= "class_send_data2" id="send_data2" name="form2_test" method="post" >
                        <label class="form-toggle-name">
                            <i class="flaticon-bus"></i> เส้นทาง: 
                        </label>
                        <br>
                        <span class="d-block style-route" >
                            <div id="sol_data3">
                                ---
                            </div>
                        </span>
                        <label class="form-toggle-name">
                            <i class="flaticon-map"></i> จุดเริ่มต้น:
                        </label> 
                        <br>
                        <span class="d-block style-route" >
                            <div id="sol_data1">
                                ---
                            </div>
                        </span>
                        <label class="form-toggle-name">
                            <i class="flaticon-map"></i> เป้าหมาย:
                        </label>
                        <br>
                        <span class="d-block style-route" >
                            <div id="sol_data2">
                                ---
                            </div>
                        </span>
                        <hr>
                        <div id="cal-sit">
                            <span class="d-block val-sit" >
                                <div id="value-sit">
                                    -
                                </div>
                            </span>
                        </div>
                        <div id="cal-time">
                            <span class="d-block val-time" >
                                <div id="value-time">
                                    -
                                </div>
                            </span>
                        </div>
                        <!-- <h1>01 min</h1> -->
                        <!-- <div class="date-box">
                            01 min
                        </div> -->
                        <div class="center-wrap mt-4">
                            <div class="button">
                                <div class="button_submit">
                                    <button type="submit">ค้นหาเส้นทางอีกครั้ง <i class="fa fa-long-arrow-right"></i></button>
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
        <!-- End video area -->

        <!-- jQuery (JavaScript plugins) -->
        <script src="{{ URL::asset('assets/js/jquery-1.12.4.min.js') }}"></script>
        <!-- Popper JS -->
        <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- Owl Carousel Thumbs JS -->
        <script src="{{ URL::asset('assets/js/owl.carousel2.thumbs.min.js') }}"></script>
        <!-- Magnific PopUp JS -->
        <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Parallax Scroll JS -->
        <script src="{{ URL::asset('assets/js/jquery.parallax-scroll.js') }}"></script>
        <!-- Isotope.pkgd JS -->
        <script src="{{ URL::asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <!-- Scroll Reveal JS -->
        <script src="{{ URL::asset('assets/js/scrollreveal.min.js') }}"></script>
        <!-- Wow JS -->
        <script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
        <!-- Counter JS -->
        <script src="{{ URL::asset('assets/js/jquery.counterup.min.js') }}"></script>
        <!-- Waypoints JS -->
        <script src="{{ URL::asset('assets/js/waypoints.min.js') }}"></script>
        <!-- Active JS -->
        <script src="{{ URL::asset('assets/js/active.js') }}"></script>
        <script type="text/javascript" src="https://api.longdo.com/map/?key=adc629c890170f8bbd6067da48b59a37"></script>
        
        <script>

        // WITH BUTTONS
            $(".scrolldown").click(function() {
                $('html, body').animate({
                    scrollTop: $("#go2").offset().top
                }, 1000);
            });
        // WITH LINKS 
            $(window).on("load", function() {
                $(".go").click(function(e) {
                    e.preventDefault();
                    scrollToElement($(this).attr("href"), 1000);
                });

                var scrollToElement = function(el, ms) {
                    var speed = ms ? ms : 600;
                    $("html,body").animate({
                        scrollTop: $(el).offset().top},
                        speed
                    );
                };
            });
        </script>

        <style>
            ul.unordered-lists {
                list-style-type: square;
            }
        </style>

        <script>
            $('#form-toggle').click(function(){
                $('.form-toggle').slideToggle('fast');
            });

            $(".rotate").click(function () {
                $('#changeText').toggleClass("down");
            })
        </script>

        <script>
            var route1=[6,8];
            var route2=[];
            var val1;
            var val2;
            $(document).ready(function () {
                $("#list-distance1").change(function () {//เลือกช่อง1
                    start_list();
                    val1 = $(this).val();
                    filter_data();
                });
                
                $("#list-distance2").change(function () {//เลือกช่อง2
                    start_list();
                    val2 = $(this).val();
                    filter_data();
                });

            });

            function filter_data(){
                if (val1 == "1" ) {//ปิดจุดลงเส้นทางที่ไม่ผ่าน route1
                    $("#list-route").css("display","none");
                    for (var i = 0; i < route1.length; ++i) {
                        $("#distance1-val"+(route1[i]+2)).css("display","none");
                        $("#distance2-val"+(route1[i]+2)).css("display","none");
                    }
                }else if (val1 == "2" ) {//ปิดจุดลงเส้นทางที่ไม่ผ่าน route2
                    $("#list-route").css("display","none");
                    for (var i = 0; i < route2.length; ++i) {
                        $("#distance1-val"+(route2[i]+2)).css("display","none");
                        $("#distance2-val"+(route2[i]+2)).css("display","none");
                    }
                }

                for (var i = 0; i < route1.length; ++i) {//ปิดเส้นทางที่ไม่ผ่าน route1
                    if (val1 == route1[i]+2 ) {
                        
                    }
                    if (val2 == route1[i]+2 ) {
                        $("#distance1-val1").css("display","none");
                    }
                }

                for (var i = 0; i < route2.length; ++i) {//ปิดเส้นทางที่ไม่ผ่าน route2
                    if (val1 == route2[i]+2 ) {

                    }
                    if (val2 == route2[i]+2 ) {
                        $("#distance1-val2").css("display","none");
                    }
                }

                $("#distance1-val"+val1).css("display","none");//ตัดตัวซ้ำ
                $("#distance2-val"+val1).css("display","none");//ตัดตัวซ้ำ
                $("#distance1-val"+val2).css("display","none");//ตัดตัวซ้ำ
                $("#distance2-val"+val2).css("display","none");//ตัดตัวซ้ำ
            }

            function start_list(){
                $("#distance1-val1").css("display","block");
                $("#distance1-val2").css("display","block");
                $("#distance1-val3").css("display","block");//1
                $("#distance1-val4").css("display","block");//2
                $("#distance1-val5").css("display","block");//3
                $("#distance1-val6").css("display","block");//4
                $("#distance1-val7").css("display","block");//5
                $("#distance1-val8").css("display","block");//6
                $("#distance1-val9").css("display","block");//7
                $("#distance1-val10").css("display","block");//8

                $("#distance2-val3").css("display","block");//1
                $("#distance2-val4").css("display","block");//2
                $("#distance2-val5").css("display","block");//3
                $("#distance2-val6").css("display","block");//4
                $("#distance2-val7").css("display","block");//5
                $("#distance2-val8").css("display","block");//6
                $("#distance2-val9").css("display","block");//7
                $("#distance2-val10").css("display","block");//8

                $("#list-route").css("display","block");
            }
        </script>

        <script type="text/javascript">
            var map;
            var displacementResult;
            var MarkerCar1;
            var MarkerCar2;
            var poly1=[];
            var poly2=[];
            var dest=0;
            var bus_stop=[];
            var bus_track=[];
            var speed;
            var speed1;
            var speed2;
            var route_dest=[];
            var bus_now=[];
            var result=[];
            var route1=[6,8];
            var route2=[];
            var round;
            var name_station=[  "รถรับส่งสีเหลือง(Route1)",
                                "รถรับส่งสีแสด(Route2)"];
            var val_map="";
            var one_map="";
            var two_map="";
            var route_map="";
            var m=2;
            var save_people=0;

            @foreach($locations as $location)
                name_station[m] = "{{$location['location_name']}}";
                m=m+1;
            @endforeach

            $('#send_data1').submit(function(event){
                val_map = 2;
                one_map = $("#list-distance1").val();
                two_map = $("#list-distance2").val();
                route_map = "";

                $("#fail").css("opacity","1");
                $("#success").css("opacity","1");
                $("#fail").css("display","none");
                $("#success").css("display","none");
                if(one_map == ""){//ช่อง 1 ว่าง
                    // alert('Please input value');
                    $("#fail").css("display","block");
                    val_map = 1;
                }else if(two_map == ""){//ช่อง 2 ว่าง
                    // alert('Please input value'); 
                    $("#fail").css("display","block"); 
                    val_map = 1;
                }else if(one_map == two_map){//ช่อง 1=2
                    // alert('จุดขึ้นลงเป็นค่าเดียวกัน'); 
                    $("#fail").css("display","block");
                    val_map = 1;
                }
                
                
                if(val_map==2){
                    var dest1;
                    var dest2;
                    var cal=3;
                    position_start = one_map;
                    station = two_map-3;
                    for (var i = 0; i < route1.length; ++i) {
                        if(route1[i] == position_start-2 || route1[i] == station+1 ){
                            cal=2;
                        }
                    }

                    for (var i = 0; i < route2.length; ++i) {
                        if(route2[i] == position_start-2 || route2[i] == station+1 ){
                            cal=1;
                        }
                    }

                    if(position_start == 1){
                        cal=1;
                    }else if(position_start == 2){
                        cal=2;
                    }

                    position_start = one_map-3;

                    if(cal == 3){
                        dest1 = distance(poly1, bus_stop[position_start], bus_stop[station], 1, 2) + distance(poly1, bus_track[0], bus_stop[position_start], 1, 2);
                        dest2 = distance(poly2, bus_stop[position_start], bus_stop[station], 2, 2) + distance(poly2, bus_track[1], bus_stop[position_start], 2, 2);
                        if(dest1 >= dest2){
                            route_map = 2;
                        }else if(dest1 <= dest2){
                            route_map = 1;
                        }
                    }else if(cal == 1){
                        route_map = 1;
                    }else if(cal == 2){
                        route_map = 2;
                    }
                    init(one_map, two_map, route_map, val_map, 1);
                }
                return false;
            });
            
            $('#send_data2').submit(function(event){
                val_map = 1;
                one_map = "";
                two_map = "";
                route_map = "";
                start_list();
                $("#list-distance1").val("");
                $("#list-distance2").val("");
                init(one_map, two_map, route_map, val_map, 1);
                return false;
            });

            setInterval(function(){
                var round_bus;

                round_bus = distance(poly1, bus_track[0], bus_stop[i], 1, 2);
                for (var i = 0; i < 8; ++i) {
                    if(route1[i] == i+1 ){
                        continue;
                    }
                    round_bus = distance(poly1, bus_track[0], bus_stop[i], 1, 2);
                    if(round_bus <= 0.002 && speed <= 5 && save_people == 0){
                        $.get( "savecount", function( result ) {
                        });
                        save_people=1;
                    }
                    if(round_bus >= 0.002 && speed >= 5 && save_people == 1){
                        save_people=0;
                    }
                }
                for (var i = 0; i < 8; ++i) {
                    if(route2[i] == i+1 ){
                        continue;
                    }
                    round_bus = distance(poly2, bus_track[1], bus_stop[i], 2, 2);
                    if(round_bus <= 0.002 && speed <= 5 && save_people == 0){
                        $.get( "savecount", function( result ) {
                        });
                        save_people=1;
                    }
                    if(round_bus >= 0.002 && speed >= 5 && save_people == 1){
                        save_people=0;
                    }
                }
            },5000);
            
            setInterval(function(){
                init(one_map, two_map, route_map, val_map, 1);
            },10000);
            
            function init(one, two, route, val, cal) {
                map = new longdo.Map({
                    placeholder: document.getElementById('map')
                });

                var result1 = map.location();//ตำแหน่งตรงกลางของแมพใช้ตอนเพิ่มจุด
                var result2 = map.location(longdo.LocationMode.Pointer);//ตำแหน่งเม้าของแมพใช้ตอนเพิ่มจุด

                map.zoom(17, true);//set zoom start
                // result = map.location();//ตำแหน่งตรงกลางของแมพใช้ตอนเพิ่มจุด
                result.push ({ lon: 100.493493, lat: 13.651804 });
                map.location( result[0] , true);//set lon, lat start
                result=[];
                map.Layers.setBase(longdo.Layers.LONGDO_OSM);//change map
                map.zoomRange({ min:15, max: 19});//limit zoom
                map.Ui.Crosshair.visible(false);

                @foreach($locations as $location)
                    iconbusstop("{{$location['lat']}}", "{{$location['lon']}}", "bus-stop "+"{{$location['order']}}" );
                @endforeach

                var position_start = one;
                var station = two-3;
                var cal_round;
                var m=0;
                
                $.get( "firebase/getlocation", function( result ) {
                    if(route != 2){
                        iconbus(result['data']['bus1']['lat'], result['data']['bus1']['long'], "E-Hop", "'<div class='bus-map'><img src='{{ URL::asset("assets/img/icon_bus1.png") }}' alt='map'></div>'" );//icon bus  
                        speed1 = result['data']['bus1']['speed'];
                    }
                    if(route != 1){
                        iconbus(result['data']['bus2']['lat'], result['data']['bus2']['long'], "E-Hop", "'<div class='bus-map'><img src='{{ URL::asset("assets/img/icon_bus2.png") }}' alt='map'></div>'" );//icon bus  
                        speed2 = result['data']['bus2']['speed'];
                    }
                });

                // iconnow(100.493493, 13.651804 );//icon now
                value_route_bus();
                // Math.ceil(4.4);
                
                if(val == 2){
                    if (position_start == 1 ){
                        dest = distance(poly1, bus_track[0], bus_stop[station], 1, 1);
                        route = 1;
                    }else if (position_start == 2){
                        dest = distance(poly2, bus_track[1], bus_stop[station], 2, 1);
                        route = 2;
                    }
                    else{

                        if(route == 1){
                            cal_round = distance(poly1, bus_track[0], bus_stop[position_start-3], 1, 2);
                        }else if(route == 2){
                            cal_round = distance(poly2, bus_track[1], bus_stop[position_start-3], 2, 2);
                        }

                        if(cal_round >=0.002){
                            round=1;
                        }else{
                            round=2;
                        }

                        if(round==1){
                            if(route == 1){
                                dest = distance(poly1, bus_stop[position_start-3], bus_stop[station], 1, 1) + distance(poly1, bus_track[0], bus_stop[position_start-3], 1, 1);
                            }else if(route == 2){
                                dest = distance(poly2, bus_stop[position_start-3], bus_stop[station], 2, 1) + distance(poly2, bus_track[1], bus_stop[position_start-3], 2, 1);
                            }
                        }else if(round==2){
                            if(route == 1){
                                dest = distance(poly1, bus_track[0], bus_stop[station], 1, 1);
                            }else if(route == 2){
                                dest = distance(poly2, bus_track[1], bus_stop[station], 2, 1);
                            }
                        }
                    }
                    $("#value-time").html("รถจะมาถึงภายใน: "+Math.ceil(dest)+" นาที");
                    $.get( "countimage", function( result ) {
                        $("#value-sit").html("จำนวนที่ว่างบนรถ: "+result['data']+" ที่นั่ง");
                    });

                    dest = 0;

                    $("#send_data1").css("display","none");
                    $("#send_data2").css("display","block");

                    $("#sol_data1").html("   " + name_station[one-1] );
                    $("#sol_data2").html("   " + name_station[two-1] );
                    $("#sol_data3").html("   " + name_station[route-1] );
                    
                }else{
                    $("#send_data1").css("display","block");
                    $("#send_data2").css("display","none");
                    Route1();//map route1
                    Route2();//map route2
                }
            }

            function distance(poly, point_start, point_stop, route, cal) {
                var p;
                var dest_old=100000;
                
                for (var i = 0; i < poly.length; ++i) {//คำนวนจุดรถถึงจุดในเส้น
                    MarkerCar1 = new longdo.Marker(poly[i], {draggable: false});
                    MarkerCar2 = new longdo.Marker(point_start, {draggable: false});
                    cal_distance();
                    var dest_new = displacementResult;
                    if (dest_old > dest_new){
                        dest_old = dest_new;
                        p = i;
                    }
                }
                route_dest.push(point_start);

                for (var i = p+1; i <= poly.length; ++i) {//คำนวนจุดในเส้นถึงเป้าหมาย
                    if (poly[i]==point_stop){
                        break;
                    }
                    if (i>=50){
                        if (route==1){
                            i=0;
                        }
                    }
                    if (i>=71){
                        if (route==2){
                            i=0;
                        }   
                    }
                    MarkerCar1 = new longdo.Marker(poly[i], {draggable: false});
                    if (i>=50){
                        if (route==1){
                            i=0;
                        }
                    }
                    if (i>=71){
                        if (route==2){
                            i=0;
                        }   
                    }

                    MarkerCar2 = new longdo.Marker(poly[i+1], {draggable: false});
                    // map.Overlays.add(MarkerCar1);
                    // map.Overlays.add(MarkerCar2);
                    cal_distance();
                    dest = dest + displacementResult;
                    route_dest.push(poly[i]);
                    
                }
                if(route == 1){
                    speed=speed1;
                }else if(route == 2){
                    speed=speed2;
                }
                route_dest.push(poly[i]);
                dest = (60*(dest+dest_old))/(speed);

                if(cal==1){
                    map.Overlays.add(MarkerCar2);
                    // map.Overlays.bounce(MarkerCar2);
                    line(route_dest);
                }
                
                route_dest=[];
                point_start=[];
                return dest;
            }

            function cal_distance() {
                displacementResult = longdo.Util.distance([
                    MarkerCar1.location(),
                    MarkerCar2.location()
                ]);
            }

            function iconbusstop(lon, lat, title) {//icon bus stop
                bus_stop.push ({ lon: lon, lat: lat });//เก็บค่าตำแหน่งของbus-stop
                var bus = new longdo.Marker({ lon:lon, lat:lat },
                {
                    title: title,
                    icon: {
                        html: '<div class="bus-map"><img src="{{ URL::asset('assets/img/icon_bus-stop.png') }}" alt="map"></div>',
                        offset: { x: 18, y: 21 }
                    },
                    detail: ' '
                    // detail: 'Route1: ' + dest + 'เส้นทาง <br> Route2: ' + dest + 'เส้นทาง' 
                });
                map.Overlays.add(bus);//set icon bus
            }

            function iconbus(lon, lat, title, iconbus) {//icon bus
                bus_track.push({ lon: lon, lat: lat });///เก็บค่าตำแหน่งของbus
                var bus = new longdo.Marker({ lon:lon, lat:lat },
                {
                    title: title,
                    icon: {
                        html: iconbus,
                        offset: { x: 18, y: 21 }
                    },
                    detail: ' '
                });
                map.Overlays.add(bus);//set icon bus
            }

            function iconnow(lon, lat) {//icon bus stop
                bus_now.push({ lon: lon, lat: lat });//เก็บค่าตำแหน่งของคน
                var now = new longdo.Marker({ lon:lon, lat:lat },
                {
                    icon: {
                        html: '<div class="bus-map"><img src="{{ URL::asset('assets/img/icon_bus-stop.png') }}" alt="map"></div>',
                        offset: { x: 18, y: 21 }
                    },
                });
                map.Overlays.add(now);//set icon bus
            }

            function line(route_dest) {//เส้นปะไปยังเป้าหมาย
                var route_dest = new longdo.Polyline(route_dest, {
                    lineWidth: 3,
                    lineColor: 'rgba(255, 100, 50, 0.9)',
                    lineStyle: longdo.LineStyle.Dashed
                });
                map.Overlays.add(route_dest); // add geometry object
            }

            function value_route_bus(){//วาดเส้นทางวนรถของเส้นทางที่1และ2
                //route 1
                poly1.push({ lon: 100.495339035987, lat: 13.6520494455359 });
                poly1.push( bus_stop[0]);
                poly1.push({ lon: 100.495396703481, lat: 13.6510485748562 });
                poly1.push({ lon: 100.495365858078, lat: 13.6505377121433 });
                poly1.push({ lon: 100.495179444551, lat: 13.6502718545795 });
                poly1.push( bus_stop[1]);
                poly1.push({ lon: 100.494900494813, lat: 13.6500620354083 });
                poly1.push({ lon: 100.494382828474, lat: 13.6496997385120 });
                poly1.push({ lon: 100.494193732738, lat: 13.6494482155194 });
                poly1.push( bus_stop[2]);
                poly1.push({ lon: 100.494121313095, lat: 13.6493661121011 });
                poly1.push({ lon: 100.494119971990, lat: 13.6493661121011 });
                poly1.push({ lon: 100.493150353431, lat: 13.6493348346009 });
                poly1.push({ lon: 100.492485165596, lat: 13.6493270152252 });
                poly1.push({ lon: 100.492451637983, lat: 13.6493152861612 });
                poly1.push({ lon: 100.492416769266, lat: 13.6492800989656 });
                poly1.push({ lon: 100.491858869791, lat: 13.6496358803683 });
                poly1.push({ lon: 100.491315722465, lat: 13.6500007838139 });
                poly1.push({ lon: 100.491427034139, lat: 13.6501350160108 });
                poly1.push({ lon: 100.491498112678, lat: 13.6502796739239 });
                poly1.push({ lon: 100.491551756858, lat: 13.6503135577466 });
                poly1.push({ lon: 100.491988956928, lat: 13.6503291964323 });
                poly1.push( bus_stop[3]);
                poly1.push({ lon: 100.492049306631, lat: 13.6502079965906 });
                poly1.push({ lon: 100.492135137319, lat: 13.6501076482875 });
                poly1.push({ lon: 100.492258518934, lat: 13.6500203321968 });
                poly1.push({ lon: 100.492414087057, lat: 13.6499577773657 });
                poly1.push({ lon: 100.492743998765, lat: 13.6499682031720 });
                poly1.push({ lon: 100.492974668741, lat: 13.6499942676859 });
                poly1.push({ lon: 100.492961257696, lat: 13.6516558744992 });
                poly1.push({ lon: 100.492966622114, lat: 13.6517796800285 });
                poly1.push({ lon: 100.492993444204, lat: 13.6519438851567 });
                poly1.push({ lon: 100.493081957101, lat: 13.6520742066057 });
                poly1.push( bus_stop[4]);
                poly1.push({ lon: 100.493222773075, lat: 13.6521862829942 });
                poly1.push({ lon: 100.493218749761, lat: 13.6522097408362 });
                poly1.push({ lon: 100.493183881044, lat: 13.6522866304131 });
                poly1.push({ lon: 100.493181198835, lat: 13.6523713392400 });
                poly1.push({ lon: 100.493327379226, lat: 13.6527740315551 });
                poly1.push({ lon: 100.493976473808, lat: 13.6536471808153 });
                poly1.push( bus_stop[6]);
                poly1.push({ lon: 100.494786500930, lat: 13.6536393615825 });
                poly1.push({ lon: 100.494829416275, lat: 13.6535976590034 });
                poly1.push({ lon: 100.494829416275, lat: 13.6534803704601 });
                poly1.push({ lon: 100.494880378246, lat: 13.6533161664015 });
                poly1.push({ lon: 100.494880378246, lat: 13.6529199910594 });
                poly1.push({ lon: 100.494893789291, lat: 13.6528522241579 });
                poly1.push({ lon: 100.494936704635, lat: 13.6527844572369 });
                poly1.push({ lon: 100.495510697364, lat: 13.6523465782015 });
                poly1.push({ lon: 100.495306849479, lat: 13.6521224255235 });
                poly1.push({ lon: 100.495339035987, lat: 13.6520494455359 });

                //route 2
                poly2.push({ lon: 100.495343059301, lat: 13.6520481423216 });                
                poly2.push({ lon: 100.495310872793, lat: 13.6521224255235 });                
                poly2.push({ lon: 100.495514720678, lat: 13.6523374557129 });                
                poly2.push({ lon: 100.494938045740, lat: 13.6527805476063 });                
                poly2.push({ lon: 100.494895130395, lat: 13.6528496177382 });                
                poly2.push({ lon: 100.494881719350, lat: 13.6529186878499 });                
                poly2.push({ lon: 100.494881719350, lat: 13.6533148631943 });                
                poly2.push({ lon: 100.494830757379, lat: 13.6534777640474 });                
                poly2.push({ lon: 100.494830757379, lat: 13.6534777640474 });                
                poly2.push({ lon: 100.494830757379, lat: 13.6535976590034 });
                poly2.push({ lon: 100.494787842035, lat: 13.6536380583770 });
                poly2.push(bus_stop[6]);
                poly2.push({ lon: 100.493980497121, lat: 13.6536458776098 });
                poly2.push({ lon: 100.494240671396, lat: 13.6540081684457 });
                poly2.push(bus_stop[7]);
                poly2.push({ lon: 100.495037287473, lat: 13.6539951364108 });
                poly2.push({ lon: 100.495348423719, lat: 13.6538035654161 });
                poly2.push({ lon: 100.495375245809, lat: 13.6533943588246 });
                poly2.push({ lon: 100.495251864194, lat: 13.6532197290440 });
                poly2.push({ lon: 100.494971573352, lat: 13.6528743787240 });
                poly2.push({ lon: 100.494895130395, lat: 13.6528496177382 });
                poly2.push({ lon: 100.494938045740, lat: 13.6527805476063 });
                poly2.push({ lon: 100.495514720678, lat: 13.6523374557129 });
                poly2.push({ lon: 100.495310872793, lat: 13.6521224255235 });
                poly2.push({ lon: 100.495085567235, lat: 13.6522397147420 });
                poly2.push({ lon: 100.494917929172, lat: 13.6522749014962 });
                poly2.push({ lon: 100.494144111871, lat: 13.6522579597263 });
                poly2.push({ lon: 100.494055598974, lat: 13.6523622167524 });
                poly2.push(bus_stop[5]);
                poly2.push({ lon: 100.493873208761, lat: 13.6523583071148 });
                poly2.push({ lon: 100.493724346160, lat: 13.6522566565132 });
                poly2.push({ lon: 100.493453443050, lat: 13.6522501404475 });
                poly2.push({ lon: 100.493327379226, lat: 13.6522318954626 });
                poly2.push({ lon: 100.493228137493, lat: 13.6521901926347 });
                poly2.push(bus_stop[4]);
                poly2.push({ lon: 100.493081957101, lat: 13.6520742066057 });
                poly2.push({ lon: 100.492993444204, lat: 13.6519438851567 });
                poly2.push({ lon: 100.492966622114, lat: 13.6517783768128 });
                poly2.push({ lon: 100.492961257696, lat: 13.6516558744992 });
                poly2.push({ lon: 100.492808371782, lat: 13.6516676034468 });
                poly2.push({ lon: 100.492407381534, lat: 13.6516806356102 });
                poly2.push({ lon: 100.492296069860, lat: 13.6516493584169 });
                poly2.push({ lon: 100.492176711559, lat: 13.6515868040177 });
                poly2.push({ lon: 100.492080152034, lat: 13.6514877595184 });
                poly2.push({ lon: 100.492011755704, lat: 13.6513978375028 });
                poly2.push({ lon: 100.491991639137, lat: 13.6513118251080 });
                poly2.push({ lon: 100.491988956928, lat: 13.6503265899848 });
                poly2.push(bus_stop[3]);
                poly2.push({ lon: 100.492049306631, lat: 13.6502066933662 });
                poly2.push({ lon: 100.492135137319, lat: 13.6501089515125 });
                poly2.push({ lon: 100.492258518934, lat: 13.6500216354223 });
                poly2.push({ lon: 100.492414087057, lat: 13.6499590805915 });
                poly2.push({ lon: 100.492743998765, lat: 13.6499695063978 });
                poly2.push({ lon: 100.492974668741, lat: 13.6499942676859 });
                poly2.push({ lon: 100.492970645427, lat: 13.6506367570414 });
                poly2.push({ lon: 100.493599623441, lat: 13.6506289377088 });
                poly2.push({ lon: 100.493704229593, lat: 13.6506224215982 });
                poly2.push({ lon: 100.493765920400, lat: 13.6505846281528 });
                poly2.push({ lon: 100.493790060281, lat: 13.6504920993472 });
                poly2.push({ lon: 100.493818223476, lat: 13.6493595959556 });
                poly2.push({ lon: 100.494115948677, lat: 13.6493674153302 });
                poly2.push(bus_stop[2]);
                poly2.push({ lon: 100.494193732738, lat: 13.6494469122908 });
                poly2.push({ lon: 100.494382828474, lat: 13.6496997385120 });
                poly2.push({ lon: 100.494900494813, lat: 13.6500607321831 });
                poly2.push(bus_stop[1]);
                poly2.push({ lon: 100.495179444551, lat: 13.6502705513554 });
                poly2.push({ lon: 100.495369881391, lat: 13.6505324992527 });
                poly2.push({ lon: 100.495396703481, lat: 13.6510485748562 });
                poly2.push({ lon: 100.495381834764, lat: 13.6513378894734 });
                poly2.push(bus_stop[0]);  
                poly2.push({ lon: 100.495343059301, lat: 13.6520481423216 });
            }

            function Route1() {//วาดเส้นRoute1
                var polyline1 = new longdo.Polyline([
                    { lon: 100.495339035987, lat: 13.6520494455359 },
                    // bus_stop[0],
                    { lon: 100.495396703481, lat: 13.6510485748562 },
                    { lon: 100.495365858078, lat: 13.6505377121433 },
                    { lon: 100.495179444551, lat: 13.6502718545795 },
                    // bus_stop[1],
                    { lon: 100.494900494813, lat: 13.6500620354083 },
                    { lon: 100.494382828474, lat: 13.6496997385120 },
                    { lon: 100.494193732738, lat: 13.6494482155194 },
                    // bus_stop[2],
                    { lon: 100.494121313095, lat: 13.6493661121011 },
                    { lon: 100.494119971990, lat: 13.6493661121011 },
                    { lon: 100.493150353431, lat: 13.6493348346009 },
                    { lon: 100.492485165596, lat: 13.6493270152252 },
                    { lon: 100.492451637983, lat: 13.6493152861612 },
                    { lon: 100.492416769266, lat: 13.6492800989656 },
                    { lon: 100.491858869791, lat: 13.6496358803683 },
                    { lon: 100.491315722465, lat: 13.6500007838139 },
                    { lon: 100.491427034139, lat: 13.6501350160108 },
                    { lon: 100.491498112678, lat: 13.6502796739239 },
                    { lon: 100.491551756858, lat: 13.6503135577466 },
                    { lon: 100.491988956928, lat: 13.6503291964323 },
                    // bus_stop[3],
                    { lon: 100.492049306631, lat: 13.6502079965906 },
                    { lon: 100.492135137319, lat: 13.6501076482875 },
                    { lon: 100.492258518934, lat: 13.6500203321968 },
                    { lon: 100.492414087057, lat: 13.6499577773657 },
                    { lon: 100.492743998765, lat: 13.6499682031720 },
                    { lon: 100.492974668741, lat: 13.6499942676859 },
                    { lon: 100.492961257696, lat: 13.6516558744992 },
                    { lon: 100.492966622114, lat: 13.6517796800285 },
                    { lon: 100.492993444204, lat: 13.6519438851567 },
                    { lon: 100.493081957101, lat: 13.6520742066057 },
                    // bus_stop[4],
                    { lon: 100.493222773075, lat: 13.6521862829942 },
                    { lon: 100.493218749761, lat: 13.6522097408362 },
                    { lon: 100.493183881044, lat: 13.6522866304131 },
                    { lon: 100.493181198835, lat: 13.6523713392400 },
                    { lon: 100.493327379226, lat: 13.6527740315551 },
                    { lon: 100.493976473808, lat: 13.6536471808153 },
                    // bus_stop[6],
                    { lon: 100.494786500930, lat: 13.6536393615825 },
                    { lon: 100.494829416275, lat: 13.6535976590034 },
                    { lon: 100.494829416275, lat: 13.6534803704601 },
                    { lon: 100.494880378246, lat: 13.6533161664015 },
                    { lon: 100.494880378246, lat: 13.6529199910594 },
                    { lon: 100.494893789291, lat: 13.6528522241579 },
                    { lon: 100.494936704635, lat: 13.6527844572369 },
                    { lon: 100.495510697364, lat: 13.6523465782015 },
                    { lon: 100.495306849479, lat: 13.6521224255235 },
                    { lon: 100.495339035987, lat: 13.6520494455359 },
                ], {
                    title: 'Route1',
                    detail: '-',
                    lineWidth: 3,
                    lineColor: 'rgba(255, 130, 0, 1.0)'//สีส้ม
                });
                map.Overlays.add(polyline1); // add geometry object
            }

            function Route2() {//วาดเส้นRoute2
                var polyline2 = new longdo.Polyline([
                    { lon: 100.495343059301, lat: 13.6520481423216 },
                    { lon: 100.495310872793, lat: 13.6521224255235 },
                    { lon: 100.495514720678, lat: 13.6523374557129 },
                    { lon: 100.494938045740, lat: 13.6527805476063 },
                    { lon: 100.494895130395, lat: 13.6528496177382 },
                    { lon: 100.494881719350, lat: 13.6529186878499 },
                    { lon: 100.494881719350, lat: 13.6533148631943 },
                    { lon: 100.494830757379, lat: 13.6534777640474 },
                    { lon: 100.494830757379, lat: 13.6535976590034 },
                    { lon: 100.494787842035, lat: 13.6536380583770 },
                    // bus_stop[6],
                    { lon: 100.493980497121, lat: 13.6536458776098 },
                    { lon: 100.494240671396, lat: 13.6540081684457 },
                    // bus_stop[7],
                    { lon: 100.495037287473, lat: 13.6539951364108 },
                    { lon: 100.495348423719, lat: 13.6538035654161 },
                    { lon: 100.495375245809, lat: 13.6533943588246 },
                    { lon: 100.495251864194, lat: 13.6532197290440 },
                    { lon: 100.494971573352, lat: 13.6528743787240 },
                    { lon: 100.494895130395, lat: 13.6528496177382 },
                    { lon: 100.494938045740, lat: 13.6527805476063 },
                    { lon: 100.495514720678, lat: 13.6523374557129 },
                    { lon: 100.495310872793, lat: 13.6521224255235 },
                    { lon: 100.495085567235, lat: 13.6522397147420 },
                    { lon: 100.494917929172, lat: 13.6522749014962 },
                    { lon: 100.494144111871, lat: 13.6522579597263 },
                    { lon: 100.494055598974, lat: 13.6523622167524 },
                    // bus_stop[5],
                    { lon: 100.493873208761, lat: 13.6523583071148 },
                    { lon: 100.493724346160, lat: 13.6522566565132 },
                    { lon: 100.493453443050, lat: 13.6522501404475 },
                    { lon: 100.493327379226, lat: 13.6522318954626 },
                    { lon: 100.493228137493, lat: 13.6521901926347 },
                    // bus_stop[4],
                    { lon: 100.493081957101, lat: 13.6520742066057 },
                    { lon: 100.492993444204, lat: 13.6519438851567 },
                    { lon: 100.492966622114, lat: 13.6517783768128 },
                    { lon: 100.492961257696, lat: 13.6516558744992 },
                    { lon: 100.492808371782, lat: 13.6516676034468 },
                    { lon: 100.492407381534, lat: 13.6516806356102 },
                    { lon: 100.492296069860, lat: 13.6516493584169 },
                    { lon: 100.492176711559, lat: 13.6515868040177 },
                    { lon: 100.492080152034, lat: 13.6514877595184 },
                    { lon: 100.492011755704, lat: 13.6513978375028 },
                    { lon: 100.491991639137, lat: 13.6513118251080 },
                    { lon: 100.491988956928, lat: 13.6503265899848 },
                    // bus_stop[3],
                    { lon: 100.492049306631, lat: 13.6502066933662 },
                    { lon: 100.492135137319, lat: 13.6501089515125 },
                    { lon: 100.492258518934, lat: 13.6500216354223 },
                    { lon: 100.492414087057, lat: 13.6499590805915 },
                    { lon: 100.492743998765, lat: 13.6499695063978 },
                    { lon: 100.492974668741, lat: 13.6499942676859 },
                    { lon: 100.492970645427, lat: 13.6506367570414 },
                    { lon: 100.493599623441, lat: 13.6506289377088 },
                    { lon: 100.493704229593, lat: 13.6506224215982 },
                    { lon: 100.493765920400, lat: 13.6505846281528 },
                    { lon: 100.493790060281, lat: 13.6504920993472 },
                    { lon: 100.493818223476, lat: 13.6493595959556 },
                    { lon: 100.494115948677, lat: 13.6493674153302 },
                    // bus_stop[2],
                    { lon: 100.494193732738, lat: 13.6494469122908 },
                    { lon: 100.494382828474, lat: 13.6496997385120 },
                    { lon: 100.494900494813, lat: 13.6500607321831 },
                    // bus_stop[1],
                    { lon: 100.495179444551, lat: 13.6502705513554 },
                    { lon: 100.495369881391, lat: 13.6505324992527 },
                    { lon: 100.495396703481, lat: 13.6510485748562 },
                    { lon: 100.495381834764, lat: 13.6513378894734 },
                    // bus_stop[0],
                    { lon: 100.495343059301, lat: 13.6520481423216 },
                ], {
                    title: 'Route2',
                    detail: '-',
                    lineWidth: 6,
                    lineColor: 'rgba(255, 210, 30, 1.0)'//สีเหลือง
                });
                map.Overlays.add(polyline2); // add geometry object
            }
            
        </script>

        <script>
            var close = document.getElementsByClassName("closebtn");
            var i;

            for (i = 0; i < close.length; i++) {
                close[i].onclick = function(){
                    var div = this.parentElement;
                    div.style.opacity = "0";
                    setTimeout(function(){ div.style.display = "none"; }, 600);
                }
            }
        </script>
    </body>  
</html>