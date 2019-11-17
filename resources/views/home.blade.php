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
                height: 100%;
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
  
    <body data-spy="scroll" data-offset="70" data-terget="#home" style="font-family: 'Kanit', sans-serif;" onload="init('','','','1'); myStartFunction();">
  
        <!-- Preloader start -->
        <div class="site-preloader-wrap">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
        <!-- Preloader end -->
        
        <!-- Start Main Header -->
		<nav class="navbar navbar-expand-md navbar-light">
			<div class="container">
				<a class="navbar-brand logo" href="home"><img class="scale-img" src="{{ URL::asset('assets/img/logo1.png') }}" alt="Logo"></a>
				<a class="navbar-brand logo-2" href="home"><img class="img-responsive" src="{{ URL::asset('assets/img/logo2.png') }}" alt="Logo"></a>  
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link smooths" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link smooths" href="#stations">Stations</a>
						</li>
						<li class="nav-item">
							<a class="nav-link smooths" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link smooths" href="#support">Support</a>
						</li>
						<li class="nav-item">
							<a class="nav-link smooths" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
							<a class="nav-link smooths" href="https://docs.google.com/forms/d/e/1FAIpQLScjeiSwpTOus_BckMqa_ewQ-JjAJb_O-novbopVNx10eoT1vg/viewform?fbclid=IwAR2fMwAScsRNFuZFBZbePOBP-yUgjKnob0VY00X9Rrki1faEiFg46X3zrBc" target="_blank">Questionnaire</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
        <!-- End Main Header -->
        
        <!-- Start video area -->
        <div id="home" class="home-video-area" style="position: relative">
            <div id="map" style="position: relative;">
                </div>
                <div class="text-box">
                    <span id="form-toggle" class="d-block d-xl-none heading-form-mobile"> <i class="fa fa-search"></i> ไปไหนดี?</span>
                    <span class="d-none d-xl-block heading-form heading-form-mobile"> <i class="fa fa-search"></i> ไปไหนดี?</span>
                    <!-- <p id="demo"></p>

                    <button onclick="myStopFunction()">Stop time</button> -->

                    <div class="form-toggle">
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
                                จุดเริ่มต้น
                            </label>
                            <select name="input1" id="list-distance1">
                                <option value="">เริ่มจากที่ไหน...</option>
                                <option value="3" id="distance1-val3">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</option>
                                <option value="4" id="distance1-val4">ประตูทางเข้าโรงเรียนดรุณสิกขาลัย (จุดจอดที่ 2)</option>
                                <option value="5" id="distance1-val5">ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3)</option>
                                <option value="6" id="distance1-val6">ด้านหน้าอาคารเรียนรวม 3 (จุดจอดที่ 4)</option>
                                <option value="7" id="distance1-val7">ด้านหน้าอาคารอเนกประสงค์ (จุดจอดที่ 5)</option>
                                <option value="8" id="distance1-val8">ด้านหน้าอาคารสำนักหอสมุด (จุดจอดที่ 6)</option>
                                <option value="9" id="distance1-val9">ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์ (จุดจอดที่ 7)</option>
                                <option value="10" id="distance1-val10">ประตูทางเข้าสถาบันวิทยาการหุ่นยนต์ภาคสนาม (จุดจอดที่ 8)</option>

                                <option value="1" id="distance1-val1">รถรับส่งเส้นทางที่1</option>
                                <option value="2" id="distance1-val2">รถรับส่งเส้นทางที่2</option>
                            </select>
                            <label for="">
                                เป้าหมาย
                            </label>
                            <select name="input2" id="list-distance2">
                                <option value="">ไปที่ไหนดี...</option>
                                <option value="3" id="distance2-val3">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</option>
                                <option value="4" id="distance2-val4">ประตูทางเข้าโรงเรียนดรุณสิกขาลัย (จุดจอดที่ 2)</option>
                                <option value="5" id="distance2-val5">ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3)</option>
                                <option value="6" id="distance2-val6">ด้านหน้าอาคารเรียนรวม 3 (จุดจอดที่ 4)</option>
                                <option value="7" id="distance2-val7">ด้านหน้าอาคารอเนกประสงค์ (จุดจอดที่ 5)</option>
                                <option value="8" id="distance2-val8">ด้านหน้าอาคารสำนักหอสมุด (จุดจอดที่ 6)</option>
                                <option value="9" id="distance2-val9">ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์ (จุดจอดที่ 7)</option>
                                <option value="10" id="distance2-val10">ประตูทางเข้าสถาบันวิทยาการหุ่นยนต์ภาคสนาม (จุดจอดที่ 8)</option>
                            </select>
                            
                            <div id="list-route">
                                <label for="">
                                    เส้นทาง
                                </label>
                                <select name="input3" id="list-distance3">
                                    <option value="">ไปเส้นทางไหนดี...</option>
                                    <option value="1" id="distance3-val1">Route1</option>
                                    <option value="2" id="distance3-val2">Route2</option>
                                </select>
                            </div>
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
                                เส้นทาง: 
                            </label>
                            <br>
                            <span class="d-block style-route" >
                                <div id="sol_data3">
                                    ---
                                </div>
                            </span>
                            <label class="form-toggle-name">
                                จุดเริ่มต้น:
                            </label> 
                            <br>
                            <span class="d-block style-route" >
                                <div id="sol_data1">
                                    ---
                                </div>
                            </span>
                            <label class="form-toggle-name">
                                เป้าหมาย:
                            </label>
                            <br>
                            <span class="d-block style-route" >
                                <div id="sol_data2">
                                    ---
                                </div>
                            </span>
                            <div id="cal-time">
                                <span class="d-block val-time" >
                                    <div id="value-time">
                                        - min
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
                
                <!-- <div id="result"></div> -->
            <!-- </body> -->
            

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link smooths" href="#stations">
                        <div id="scrolldown">
                            <section id="section03" class="demo">
                                <a href="#stations" onclick="myStopFunction()"><span></span></a>
                            </section>
                        </div>
                    </a>
                </li>
            </ul>
        </div>    
        <!-- End video area -->

        <!-- Start bus-stop Area -->
        <section id="stations" class="testimonials ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h2>KMUTT E-BUS ROUTE </h2>
                            <!-- <span id="distance"></span> -->
                            <p>ให้บริการภายในมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี (วิทยาเขตบางมด) โดยแบ่งเป็น 2 เส้นทาง คือ</p>
                            <span class="section-title-bg">Stations</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-lg-7">
                        <div class="blog-item">
                            <a class="blog-img"><img src="{{ URL::asset('assets/img/map.png') }}" alt="map"></a>
                        </div>
                    </div>
                    <div id="accordion" class="col-md-5 col-lg-5">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            ROUTE 1 : เส้นทางวนซ้าย
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul class="unordered-lists" >
                                            <h5>เส้นสีเหลือง</h5>
                                            <h6>
                                                <li><a data-toggle="modal" data-target="#exampleModal">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าโรงเรียนดรุณสิกขาลัย (จุดจอดที่ 2)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารเรียนรวม 3 (จุดจอดที่ 4)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารอเนกประสงค์ (จุดจอดที่ 5)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์ (จุดจอดที่ 7)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</a></li>
                                                <!-- @foreach($places as $place)
                                                    <li><a class="view_data" data-toggle="modal" data-target="#show" id="<?php echo $place['id'];?>">{{$place['name']}}</a></li> 
                                                @endforeach -->
                                            </h6>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a role="button"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                                            ROUTE 2 : เส้นทางวนขวา
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul class="unordered-lists" >
                                            <h5>เส้นสีแสด</h5>
                                            <h6>
                                                <li><a data-toggle="modal" data-target="#exampleModal">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์ (จุดจอดที่ 7)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าสถาบันวิทยาการหุ่นยนต์ภาคสนาม (จุดจอดที่ 8)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารสำนักหอสมุด (จุดจอดที่ 6)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารอเนกประสงค์ (จุดจอดที่ 5)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารเรียนรวม 3 (จุดจอดที่ 4)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</a></li>
                                            </h6>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <p>* หมายเหตุ KMUTT e-Bus ให้บริการในวัน จันทร์ - ศุกร์ เวลา 07.30 น. - 18.30 น.สถานะ : เว็บไซต์ยังไม่เปิดให้บริการ</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End bus-stop Area -->

        <!-- Start About Area -->
        <section id="about" class="cta-area cta-bg-img">
            <div class="diplay-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-7">
                                <div class="cta-info">
                                    <h2 style="color:white">ABOUT KMUTT E-BUS</h2>
                                    <p style="color:white">บริการถไฟฟ้ารับส่งภายในมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี (วิทยาเขตบางมด)
                                        KMUTT e-Bus เปิดให้บริการในปี 2559 โดยใช้รถไฟฟ้าในการให้บริการซึ่งเป็นมิตรกับสิ่งแวดล้อมและประหยัดพลังงาน
                                        อีกทั้งยังช่วยลดการใช้รถส่วนบุคคลและช่วยลดการจราจรภายในมหาวิทยาลัย</p>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-5 cta-img">
                                <img class="img-fluid" src="{{ URL::asset('assets/img/video-bg.jpg') }}" alt="video-bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start About-WebApp Area -->
        <section class="services ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h2>Web App for KMUTT e-Bus Shuttle Service</h2>
                            <p>เพื่อความสะดวกสบายของผู้ใช้บริการ KMUTT e-Bus</p>
                            <span class="section-title-bg">About</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="service-item">
                            <div class="glyph">
                                <i class="glyph-icon flaticon-032-target"></i>
                            </div>
                            <h3>Display car realtime</h3>
                            <p>ตรวจสอบตำแหน่งปัจจุบันของรถ KMUTT e-Bus ลดเวลาในการรอคอย</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="service-item">
                            <div class="glyph">
                                <i class="glyph-icon flaticon-024-user"></i>
                            </div>
                            <h3>Report service problems</h3>
                            <p>แจ้งปัญหาในการใช้บริการหรือแจ้งสิ่งของที่ลืมไว้บนรถ KMUTT e-Bus</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="service-item">
                            <div class="glyph">
                                <i class="glyph-icon flaticon-031-laptop-1"></i>
                            </div>
                            <h3>Support all systems</h3>
                            <p>สามารถใช้งานได้ทุกอุปกรณ์ ทุกระบบปฏิบัติการ และทุกขนาดหน้าจอ</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About-WebApp Area -->

        <!-- Start About-Video Area -->
        <!-- <section class="video-area video-bg">
            <div class="diplay-table">
                <div class="display-table-cell">
                    <div class="video-inner-content">
                    <div class="button__holder" data-parallax='{"z": -400}'>
                            <a href="https://vimeo.com/90691438" class="plus popup-youtube"></a>
                        </div>
                        <h2 data-parallax='{"z": -400}'>Watch Video</h2>
                        <p data-parallax='{"z": -200}'>ตรวจสอบตำแหน่งของรถ KMUTT e-Bus แบบ realtime เพื่อการรอคอยอย่างมีจุดหมาย</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End About-Video Area -->

        <!-- Start Support Area -->
        <section id="support" class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h2>How to use</h2>
                            <p>Let's get to know a bit about what the Web App for KMUTT e-Bus shuttle service can do.</p>
                            <!-- <p>มาทำความรู้จักกันสักนิดว่าWeb App for KMUTT e-Bus shuttle Serviceทำอะไรได้บ้าง</p> -->
                            <span class="section-title-bg">Support</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-slides">
                        <div class="team-box">
                            <img src="{{ URL::asset('assets/img/support1.png') }}" alt="Image Description">
                        </div>

                        <div class="team-box">
                            <img src="{{ URL::asset('assets/img/support1.png') }}" alt="Image Description">
                        </div>

                        <div class="team-box">
                            <img src="{{ URL::asset('assets/img/support1.png') }}" alt="Image Description">
                        </div>

                        <div class="team-box">
                            <img src="{{ URL::asset('assets/img/support1.png') }}" alt="Image Description">
                        </div>
                    </div>
                </div>
                <!-- <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fiphone-4.png?alt=media&token=5bf9b7bd-749d-454f-ad56-23c7f8b38ab3" class="mobile" alt="Mobile" title="Mobile"> -->
            </div>
        </section>
        <!-- End Support Area -->

        <!-- Start Contact Area -->
        <section id="contact" class="our-team ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h2>Frequntly Ask & Questions</h2>
                            <p>If you have more questions, send us a message and we will answer you as soon as possible.</p>
                            <span class="section-title-bg">Contact</span>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="address-area text-center">
                            <div class="addess">
                                <h4>Address</h4>
                                <p>สำนักงานอาคารและสถานที่</p>
                            </div>
                            <div class="email">
                                <h4>Email</h4>
                                <p>KMUTT_e-Bus@mail.kmutt.ac.th</p>
                            </div>
                            <div class="phone">
                                <h4>Phone</h4>
                                <p>+66 2 345 678</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="contact-form">
                            <form id="contatc_form" method="POST" action="{{ URL::asset('assets/include/sendmail.php') }}" name="myform">
                                <div class="row">                                 
                                    <div class="col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary" type="button">Subject</button>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect03">
                                                <option selected>Choose...</option>
                                                <option value="1">ทรัพย์สินสูญหาย</option>
                                                <option value="2">ขับรถไม่สุภาพ</option>
                                                <option value="3">ข้อเสนอแนะ</option>
                                                <option value="4">ปัญหาอื่นๆ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact_name" name="name" placeholder="Name" required="" data-parsley-minlength="4">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="contact_email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact_phone" name="phone" placeholder="Phone" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="contact_message" name="message" rows="7" placeholder="Message" required="" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 character comment.." data-parsley-validation-threshold="10"></textarea>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-12"> 
                                        <div id="contact_send_status"></div>
                                    </div>
                                </div>
                                <div class="center-wrap">
                                    <div class="button">
                                        <button type="submit">Submit <i class="fa fa-long-arrow-right"></i></button>
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->














        <a href="#top" class="scrolltop" onclick="myStartFunction()">Top</a>

        <!-- Start Footer Area -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <p class="copyright">2019 &copy; All Rights Reserved.</p>
                    </div>
                    <div class="col-md-7">
                        <div class="social-icons bottom">
                            <ul class="list-inline">
                                <li>Follow Us On: </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        
        <!-- Start Modal Area -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Route 1</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 col-lg-12">
                            <div class="blog-item">
                                <div class="image-modal" style="background-image:url('assets/img/stop2.jpg') ">
                                </div>
                                <div class="blog-info">
                                    <div class="date-box">
                                        <span class="month">จุดจอด</span> 03
                                    </div>
                                    <div class="title-meta">
                                        <h3>ประตูทางเข้าอาคารหอพักนักศึกษาหญิง</h3>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>สถานที่ใกล้เคียง:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Area -->

        
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
            var val="";
            var one="";
            var two="";
            var three="";
            $('#send_data1').submit(function(event){
                val = 1;
                one = $("#list-distance1").val();
                two = $("#list-distance2").val();
                three = $("#list-distance3").val();
                $("#fail").css("opacity","1");
                $("#success").css("opacity","1");
                $("#fail").css("display","none");
                $("#success").css("display","none");
                $("#cal-time").css("display","none");
                if(one == ""){//ช่อง 1 ว่าง
                    // alert('Please input value');
                    $("#fail").css("display","block");
                }else if(two == ""){//ช่อง 2 ว่าง
                    // alert('Please input value'); 
                    $("#fail").css("display","block"); 
                }else if(three == ""){//ช่อง 3 ว่าง วิ่งแบบพี่ตูน
                    if(one == "1" || one == "2"){
                        $("#cal-time").css("display","block");
                        $("#success").css("display","block");
                        val = 2;
                    }else{
                        // alert('Please input value');
                        $("#fail").css("display","block");
                    }
                }else if(one == two){//ช่อง 1=2
                    // alert('จุดขึ้นลงเป็นค่าเดียวกัน'); 
                    $("#fail").css("display","block");
                }else if(three == "1"){//Route1 ทางไม่ผ่าน
                    if(one-2 == "6" || one-2 == "8" || two-2 == "6" || two-2 == "8"){
                        // alert('ไม่ผ่านทางนี้');  
                        $("#fail").css("display","block");
                    }else{
                        $("#cal-time").css("display","block");
                        $("#success").css("display","block");
                        val = 2;
                    }
                }else if(three == "2"){//Route2 ทางไม่ผ่าน
                    if(two == "" ){
                        // alert('ไม่ผ่านทางนี้');
                        $("#fail").css("display","block");
                    }else{
                        $("#cal-time").css("display","block");
                        $("#success").css("display","block");
                        val = 2;
                    }
                }
                if(val==2){
                    init(one,two,three,val);
                }
                return false;
            });
            
            $('#send_data2').submit(function(event){
                val = 1;
                one = "";
                two = "";
                three = "";
                return false;
            });

            // setInterval(function(){
            //     init(one,two,three,val);
            // },5000);

            var myVar;
            function myStartFunction() {
                myVar = setInterval(function(){
                            init(one,two,three,val);
                        },5000);
            }
            
            function myStopFunction() {
                clearInterval(myVar);
            }
           
            
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
        </script>

        <script>
            // setInterval(function(){
            //     init("","","");
            // },100000);
        </script>

        <script>
            var route1=[6,8];
            var route2=[];
            var val1;
            var val2;
            var val3;
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

                $("#list-distance3").change(function () {//เลือกช่อง3
                    start_list();
                    val3 = $(this).val();
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

                if (val3 == "1" ) {//ปิดจุดลงเส้นทางที่ไม่ผ่าน route1
                    for (var i = 0; i < route1.length; ++i) {
                        $("#distance1-val"+(route1[i]+2)).css("display","none");
                        $("#distance2-val"+(route1[i]+2)).css("display","none");
                    }
                    $("#distance1-val1").css("display","none");
                }else if (val3 == "2" ) {//ปิดจุดลงเส้นทางที่ไม่ผ่าน route2
                    for (var i = 0; i < route2.length; ++i) {
                        $("#distance1-val"+(route2[i]+2)).css("display","none");
                        $("#distance2-val"+(route2[i]+2)).css("display","none");
                    }
                    $("#distance1-val2").css("display","none");
                }

                for (var i = 0; i < route1.length; ++i) {//ปิดเส้นทางที่ไม่ผ่าน route1
                    if (val1 == route1[i]+2 ) {
                        $("#distance3-val1").css("display","none");
                    }
                    if (val2 == route1[i]+2 ) {
                        $("#distance3-val1").css("display","none");
                        $("#distance1-val1").css("display","none");
                    }
                }

                for (var i = 0; i < route2.length; ++i) {//ปิดเส้นทางที่ไม่ผ่าน route2
                    if (val1 == route2[i]+2 ) {
                        $("#distance3-val2").css("display","none");
                    }
                    if (val2 == route2[i]+2 ) {
                        $("#distance3-val2").css("display","none");
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

                $("#distance3-val1").css("display","block");
                $("#distance3-val2").css("display","block");

                $("#list-route").css("display","block");
            }
        </script>

        <script type="text/javascript">
            var map
            var displacementResult;
            var MarkerCar1;
            var MarkerCar2;
            var poly1=[];
            var poly2=[];
            var dest=0;
            var bus_stop=[];
            var bus_track=[];
            var speed;
            var route_dest=[];
            var bus_now=[];
            var result=[];
            var name_station=[  "รถรับส่งเส้นทางที่1",
                                "รถรับส่งเส้นทางที่1",
                                "จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)",
                                "ประตูทางเข้าโรงเรียนดรุณสิกขาลัย (จุดจอดที่ 2)",
                                "ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3)",
                                "ด้านหน้าอาคารเรียนรวม 3 (จุดจอดที่ 4)",
                                "ด้านหน้าอาคารอเนกประสงค์ (จุดจอดที่ 5)",
                                "ด้านหน้าอาคารสำนักหอสมุด (จุดจอดที่ 6)",
                                "ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์ (จุดจอดที่ 7)",
                                "ประตูทางเข้าสถาบันวิทยาการหุ่นยนต์ภาคสนาม (จุดจอดที่ 8)"	];
            var name_route=[    "Route1",
                                "Route2"];
            
            function init(one, two, three, val) {
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

                // map.zoom(true, true);//Zoom in
                // map.zoom(false, true);//Zoom out
                
                // map.Ui.Mouse.enableClick(false);//none click mouse
                // map.Layers.add(longdo.Layers.TRAFFIC);
                iconbusstop(100.495324, 13.651941, "bus-stop 1" );//icon bus-stop
                iconbusstop(100.495041, 13.650136, "bus-stop 2" );//icon bus-stop
                iconbusstop(100.494177, 13.649396, "bus-stop 3" );//icon bus-stop
                iconbusstop(100.491991, 13.650224, "bus-stop 4" );//icon bus-stop
                iconbusstop(100.493092, 13.652134, "bus-stop 5" );//icon bus-stop
                iconbusstop(100.493964, 13.652368, "bus-stop 6" );//icon bus-stop
                iconbusstop(100.494790, 13.653657, "bus-stop 7" );//icon bus-stop
                iconbusstop(100.494535, 13.654025, "bus-stop 8" );//icon bus-stop
                
                var position_start = one;
                var station = two-2;
                var route = three;

                dest1 = iconbus(100.495594703481, 13.6514385748562, "E-Hop", "'<div class='bus-map'><img src='{{ URL::asset('assets/img/icon_bus.png') }}' alt='map'></div>'" );//icon bus  
                iconnow(100.493493, 13.651804 );//icon now  
                value_route_bus();
                if (position_start == 1 ){
                    dest = distance(poly1, bus_track[0], station, 1);  
                }else if (position_start == 2){
                    dest = distance(poly2, bus_track[0], station, 2);  
                }
                else{
                    if (route == 1 ){
                        dest = distance(poly1, bus_stop[position_start-3], station, 1);  
                    }else if (route == 2){
                        dest = distance(poly2, bus_stop[position_start-3], station, 2);  
                    }
                }
                $('#distance').text(dest);
                $("#value-time").html("รถจะมาถึงภายใน: "+Math.ceil(dest)+" min");
                dest = 0;
                // Math.ceil(4.4);
                if(val == 2){
                    $("#send_data1").css("display","none");
                    $("#send_data2").css("display","block");
                    if(three==""){
                        three=one;
                    }
                    $("#sol_data1").html("   " + name_station[one-1] );
                    $("#sol_data2").html("   " + name_station[two-1] );
                    $("#sol_data3").html("   " + name_route[three-1] );
                    
                }else{
                    $("#send_data1").css("display","block");
                    $("#send_data2").css("display","none");
                    Route1();//map route1
                    Route2();//map route2
                }
                // Route1();//map route1
                // Route2();//map route2
            }

            function distance(poly, bus_track, point_stop, route) {
                var point_start;
                var dest_old=100000;
                for (var i = 0; i < poly.length; ++i) {//คำนวนจุดรถถึงจุดในเส้น
                    MarkerCar1 = new longdo.Marker(poly[i], {draggable: false});
                    MarkerCar2 = new longdo.Marker(bus_track, {draggable: false});
                    cal_distance();
                    var dest_new = displacementResult;
                    if (dest_old > dest_new){
                        dest_old = dest_new;
                        point_start = i;
                    }
                }
                route_dest.push(bus_track);

                for (var i = point_start+1; i <= poly.length; ++i) {//คำนวนจุดในเส้นถึงเป้าหมาย
                    if (poly[i]==bus_stop[point_stop-1]){
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
                route_dest.push(poly[i]);
                // map.Overlays.add(MarkerCar2);
                map.Overlays.bounce(MarkerCar2);
                dest = (60*(dest+dest_old))/(speed*1000);
                line(route_dest);
                route_dest=[];
                bus_track=[];
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
                    // detail: 'Route1: ' + dest + 'เส้นทาง <br> Route2: ' + dest + 'เส้นทาง' ,
                    detail: ' ',
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
                    lineWidth: 5,
                    lineColor: 'rgba(0, 0, 255, 1.0)',
                    lineStyle: longdo.LineStyle.Dashed
                });
                map.Overlays.add(route_dest); // add geometry object
            }

            function value_route_bus(){//วาดเส้นทางวนรถของเส้นทางที่1และ2
                speed=20;
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