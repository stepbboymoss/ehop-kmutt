<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="EnvyTheme">
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
        <!-- <meta charset="UTF-8">
        <title>Create Map Sample | Longdo Map</title>
        <style type="text/css">
        html {
        height: 100%;
        }
        body {
        margin: 0px;
        height: 100%;
        }
        #map {
        height: 100%;
        }
        </style>
        -->

    </head>
  
    <body data-spy="scroll" data-offset="70" data-terget="#home" style="font-family: 'Kanit', sans-serif;">
  
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
				<a class="navbar-brand logo" href="home"><img src="{{ URL::asset('assets/img/logo.png') }}" alt="Logo"></a>
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

        
            <video autoplay="autoplay" loop="loop" id="bgvid">
                <source src="{{ URL::asset('assets/img/promo-video.mp4') }}" type="video/mp4">
            </video> 


            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link smooths" href="#stations">
                        <div id="scrolldown">
                            <section id="section03" class="demo">
                                <a href="#stations"><span></span></a>
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
                            <h2>KMUTT E-BUS ROUTE</h2>
                            <p>ให้บริการภายในมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี (วิทยาเขตบางมด) โดยแบ่งเป็น 2 เส้นทาง คือ</p>
                            <p>* หมายเหตุ KMUTT e-Bus ให้บริการในวัน จันทร์ - ศุกร์ เวลา 07.30 น. - 18.30 น.
                                สถานะ : เว็บไซต์ยังไม่เปิดให้บริการ</p>
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
                                        <a role="button"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            ROUTE 1 : เส้นทางวนซ้าย
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
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
                                            </h6>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a role="button"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
                                                <li><a data-toggle="modal" data-target="#exampleModal">ประตูทางเข้าอาคารหอพักนักศึกษาหญิง (จุดจอดที่ 3))</a></li>
                                                <li><a data-toggle="modal" data-target="#exampleModal">จุดจอดท่ารถ มจธ. (จุดจอดที่ 1)</a></li>
                                            </h6>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <h2>KMUTT E-BUS ROUTE</h2>
                            <p>ตรวจสอบตำแหน่งของรถ KMUTT e-Bus แบบ realtime เพื่อการรอคอยอย่างมีจุดหมาย</p>
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
        <section class="video-area video-bg">
            <div class="diplay-table">
                <div class="display-table-cell">
                    <div class="video-inner-content">
                    <div class="button__holder" data-parallax='{"z": -400}'>
                            <a href="https://vimeo.com/90691438" class="plus popup-youtube"></a>
                        </div>
                        <h2 data-parallax='{"z": -400}'>Watch Video</h2>
                        <p data-parallax='{"z": -200}'>muda muda muda muda muda muda muda muda muda</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About-Video Area -->

        <!-- Start Support Area -->
        <section id="support" class="our-team ptb-100">
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
        <section id="contact" class="contact-area ptb-100">
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














        <a href="#top" class="scrolltop">Top</a>

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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <div class="image-modal" style="background-image:url('assets/img/stop1.jpg') ">
                                </div>
                                <div class="blog-info">
                                    <div class="date-box">
                                        <span class="month">จุดจอด</span> 01 
                                    </div>
                                    <div class="title-meta">
                                        <h3>จุดจอดท่ารถ มจธ.</h3>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum sagittis nulla, non vehicula mauris rutrum vitae. Sed non consequat dolor. Cras in odio augue.</p>
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

        <!-- <script type="text/javascript" src="https://api.longdo.com/map/?key=adc629c890170f8bbd6067da48b59a37"></script>
        <script>
            var map
            function init() {
                map = new longdo.Map({
                    placeholder: document.getElementById('map')
                });
                map.Tags.add(function(tile, zoom) {
                    var bound = longdo.Util.boundOfTile(map.projection(), tile);
                    mockAjaxFromServer(bound, function(locationList) {
                        for (var i = 0; i < locationList.length; ++i) {
                            
                            map.Overlays.add(new longdo.Marker(locationList[i], { visibleRange: { min: zoom, max: zoom } }));
                            // map.Overlays.bounce(MARKER);
                        }
                    });
                });
                map.zoom(17, true);
                map.location({ lon:100.494824, lat:13.651064 }, true);
            }
            function dropMarker() {
                map.Overlays.bounce(MARKER);
            }
            function mockAjaxFromServer(bound, callback) {
                var locationList = [];
                locationList.push({ lon:100.494824, lat:13.651064 });
                locationList.push({ lon:100.494824, lat:13.652064 });
                locationList.push({ lon:100.494824, lat:13.650064 });
                locationList.push({ lon:100.495824, lat:13.651064 });
                locationList.push({ lon:100.495824, lat:13.652064 });
                locationList.push({ lon:100.495824, lat:13.650064 });
                locationList.push({ lon:100.493824, lat:13.651064 });
                locationList.push({ lon:100.493824, lat:13.652064 });
                locationList.push({ lon:100.493824, lat:13.650064 });
                callback(locationList);
            }
        </script>  -->
    </body>
</html>