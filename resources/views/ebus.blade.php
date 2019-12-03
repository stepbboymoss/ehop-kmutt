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

    <body data-spy="scroll" data-offset="70" data-terget="#home" style="font-family: 'Kanit', sans-serif;" >

        <!-- Preloader start -->
        <div class="site-preloader-wrap">
            <div class="sk-cube-grid">
            <!-- <div class="container"> -->
                <!-- <img class="scale-img" src="{{ URL::asset('assets/img/load.png') }}" ></a> -->
                <!-- <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div> -->
                
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
							<a class="nav-link smooths" href="https://docs.google.com/forms/d/e/1FAIpQLSd7W-2JxoJH5FANUmd7SWss2wmcUNq_vpd7oLbLK5UUxOjr0w/viewform" target="_blank">Questionnaire</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
        <!-- End Main Header -->

        <!-- Start video area -->
        <div id="home" class="home-video-area" >
        <iframe id="map" type="text/html" frameborder="0" height="245" width="100%" src="http://127.0.0.1:8000/map" style="position: relative"></iframe> 
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link smooths" href="#stations">
                        <div id="scrolldown">
                            <section id="section03" class="demo">
                                <a href="#stations" ><span></span></a>
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
                                                <!-- <li><a data-toggle="modal" data-target="#exampleModal">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าโรงเรียนดรุณสิกขาลัย (จุดจอดที่ 2)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารเรียนรวม 3 (จุดจอดที่ 4)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารอเนกประสงค์ (จุดจอดที่ 5)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์ (จุดจอดที่ 7)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</a></li> -->
                                                @foreach($route_locations as $route_location)
                                                    @if($route_location['route_id']==1)
                                                    @foreach($locations as $location)
                                                        @if($location['order']==$route_location['location_id'])
                                                            <li><a data-toggle="modal" data-target="#exampleModal" data-whatever="{{$location['id']}}" data-route="1">{{$location['location_name']}}</a></li>
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                @endforeach
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
                                                <!-- <li><a data-toggle="modal" data-target="#exampleModal">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์ (จุดจอดที่ 7)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าสถาบันวิทยาการหุ่นยนต์ภาคสนาม (จุดจอดที่ 8)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารสำนักหอสมุด (จุดจอดที่ 6)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารอเนกประสงค์ (จุดจอดที่ 5)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ด้านหน้าอาคารเรียนรวม 3 (จุดจอดที่ 4)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าโรงเรียนดรุณสิกขาลัย (จุดจอดที่ 2)</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</a></li> -->
                                                <!-- <div id="distance1150"> -->
                                                @foreach($route_locations as $route_location)
                                                    @if($route_location['route_id']==2)
                                                    @foreach($locations as $location)
                                                        @if($location['order']==$route_location['location_id'])
                                                            <li><a data-toggle="modal" data-target="#exampleModal" data-whatever="{{$location['id']}}" data-route="2">{{$location['location_name']}}</a></li>
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                @endforeach
                                                <!-- </div> -->
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
                            <p>เป็นเว็บไซต์สำหรับบริการรถรับส่งที่สร้างขึ้นมาเพื่อความสะดวกสบายของผู้ใช้บริการ e-Bus ในการทราบเส้นทางและเวลาการเดินทางไปยังจุดต่างๆ ภายในมหาวิทยาลัย</p>
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
                            <h3>ตำแหน่งรถ e-Bus</h3>
                            <p>ช่วยในการตรวจสอบหรือหาตำแหน่งปัจจุบันของรถ e-Bus ว่าอยู่ส่วนตำแหน่งไหนด้วยระบบ GPS</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="service-item">
                            <div class="glyph">
                                <i class="glyph-icon flaticon-024-user"></i>
                            </div>
                            <h3>ที่นั่งว่างบนรถ e-Bus</h3>
                            <p>ผู้ใช้งานสามารถทราบจำนวนที่นั่งว่างบนรถ<br>e-Bus ได้แบบ Realtime</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="service-item">
                            <div class="glyph">
                                <i class="glyph-icon flaticon-031-laptop-1"></i>
                            </div>
                            <h3>คำนวณเส้นทางรถ e-Bus</h3>
                            <p>ด้วยการคำนวณเวลาและค้นหาเส้นทางที่ใช้งานรถ e-Bus ไปยังเป้าหมายด้วยเส้นทางที่รวดเร็วที่สุด</p>
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
        <section id="support" class="contact-area ptb-100our-team ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h2>How to use</h2>
                            <!-- <p>Let's get to know a bit about what the Web App for KMUTT e-Bus shuttle service can do.</p> -->
                            <p>มาทำความรู้จักกันสักนิดว่าWeb App for KMUTT e-Bus ทำอะไรได้บ้าง</p>
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
                            <img src="{{ URL::asset('assets/img/support2.png') }}" alt="Image Description">
                        </div>

                        <div class="team-box">
                            <img src="{{ URL::asset('assets/img/support3.png') }}" alt="Image Description">
                        </div>

                        <div class="team-box">
                            <img src="{{ URL::asset('assets/img/support4.png') }}" alt="Image Description">
                        </div>

                        <div class="team-box">
                            <img src="{{ URL::asset('assets/img/support5.png') }}" alt="Image Description">
                        </div>

                        <div class="team-box">
                            <img src="{{ URL::asset('assets/img/support6.png') }}" alt="Image Description">
                        </div>
                    </div>
                </div>
              </div>
        </section>
        <!-- End Support Area -->

        <!-- Start Contact Area -->
        <section id="contact" class="services ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h2>Frequntly Ask & Questions</h2>
                            <p>หากคุณมีคำถามเพิ่มเติมส่งข้อความถึงเราแล้วเราจะตอบคุณโดยเร็วที่สุด</p>
                            <!-- <p>If you have more questions, send us a message and we will answer you as soon as possible.</p> -->
                            <span class="section-title-bg">Contact</span>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-4">
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
                    </div> -->
                    <div class="col-lg-12 col-md-12">
                        <div class="contact-form">
                            <form id="contatc_form" method="POST" action="{{ URL::asset('assets/include/sendmail.php') }}" name="myform">
                                <div class="row">   
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact_name" name="name" placeholder="เรื่อง" required="" data-parsley-minlength="255">
                                        </div>
                                    </div>                              
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <!-- <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary" type="button">ประเภท</button>
                                            </div> -->
                                            <select class="custom-select" id="inputGroupSelect03">
                                                <option selected>ประเภท...</option>
                                                <option value="1">ทรัพย์สินสูญหาย</option>
                                                <option value="2">ขับรถไม่สุภาพ</option>
                                                <option value="3">ข้อเสนอแนะ</option>
                                                <option value="4">ปัญหาอื่นๆ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact_name" name="name" placeholder="ชื่อ-สกุล" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="contact_email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact_phone" name="phone" placeholder="เบอร์" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="contact_message" name="message" rows="7" placeholder="ข้อความ" required="" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 character comment.." data-parsley-validation-threshold="10"></textarea>
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

        <a href="#top" class="scrolltop" >Top</a>

        <!-- Start Footer Area -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <p class="copyright">2019 &copy; Copyright by Kmutt e-Bus</p>
                    </div>
                    <div class="col-md-7">
                        <div class="social-icons bottom">
                            <ul class="list-inline">
                                <li>Follow Us On: </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="addess">
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
                    </div> -->
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        
        <!-- Start Modal Area -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">---</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 col-lg-12">
                            <div class="blog-item">
                                <div class="image-modal" style="background-image:url('assets/img/stop1.jpg')">
                                </div>
                                <div class="blog-info">     
                                    <div class="date-box">
                                        <span class="month">จุดจอด</span> 
                                        <div class="modal-order">
                                            ---
                                        </div>
                                    </div>
                                    <div class="title-meta">
                                        <h3 class="modal-name">---</h3>
                                    </div>
                                </div>
                                <div class="post-content modal-detail">
                                    <p style="margin-top: 20px; max-height: 150px; overflow-y: scroll;">สถานที่ใกล้เคียง:</p> 
                                    <!-- border: 1px solid #ced4da; -->
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
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); 
                var recipient = button.data('whatever');
                var route = button.data('route');
                var modal = $(this);
                var building_name=[];
                building_name[recipient]="สถานที่ใกล้เคียง: ";

                @foreach($buildings as $building)
                    if("{{$building['location_id']}}"==recipient){
                        building_name[recipient] = building_name[recipient] + "<br>&emsp;&emsp;-{{$building['building']}}";
                    }
                @endforeach

                @foreach($locations as $location)
                    if("{{$location['order']}}"==recipient){
                        modal.find('.modal-title').text("Route "+route);
                        modal.find('.image-modal').css("background-image","url('{{$location['image']}}')");
                        modal.find('.modal-name').text("{{$location['location_name']}}");
                        modal.find('.modal-order').text("{{$location['order']}}");
                    }
                @endforeach

                modal.find('.modal-detail p').html(building_name[recipient]);
                building_name=[];
            })

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