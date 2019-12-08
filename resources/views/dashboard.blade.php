<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href="{{ URL::asset('dashboard/css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{ URL::asset('dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ URL::asset('dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ URL::asset('dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{ URL::asset('dashboard/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="{{ URL::asset('dashboard/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ URL::asset('dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ URL::asset('dashboard/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{ URL::asset('dashboard/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ URL::asset('dashboard/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{ URL::asset('dashboard/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ URL::asset('dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{ URL::asset('dashboard/css/theme.css')}}" rel="stylesheet" media="all">
        <link rel="icon" type="image/png" href="{{ URL::asset('assets/img/bus-and-wifi-signal.png') }}">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.html">
                                <img src="{{ URL::asset('dashboard/images/icon/EHOP.png')}}" alt="CoolAdmin" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li class="has-sub">
                                <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list"></ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="dashboard_ebus">
                    <br><br><img src="{{ URL::asset('dashboard/images/icon/EHOP.png')}}" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="{{url('/dashboard_ebus')}}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <br>
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <nav id="breadcrumbs">
                                    <!-- @if(count($errors) > 0)
                                        <div class="alert alert-danger">
                                            กรุณาใส่ข้อมูลให้ครบทุกช่อง <br>
                                        </div>
                                    @endif
                                    @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif -->

                                    <form class="form-header" action="/search" method="get">
                                        <div class="col-md-12">
                                            <select class="form-control" name="month" id="list-month">
                                                <option value="">กรุณาเลือกเดือน</option>
                                                <option value="1">มกราคม</option>
                                                <option value="2">กุมภาพันธ์ </option>
                                                <option value="3">มีนาคม </option>
                                                <option value="4">เมษายน</option>
                                                <option value="5">พฤษภาคม</option>
                                                <option value="6">มิถุนายน</option>
                                                <option value="7">กรกฎาคม </option>
                                                <option value="8">สิงหาคม</option>
                                                <option value="9">กันยายน</option>
                                                <option value="10">ตุลาคม</option>
                                                <option value="11">พฤศจิกายน</option>
                                                <option value="12">ธันวาคม</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <select class="form-control" name="year" id="list-year">
                                                <option value="">กรุณาเลือกปี</option>
                                                <option value="2017">2560</option>
                                                <option value="2018">2561 </option>
                                                <option value="2019">2562 </option>
                                            </select>
                                        </div>
                                        <span class = "input-group-prepend">
                                            <button type = "submit" href="{{url('/search')}}" class = "au-btn--submit">
                                                <i class="zmdi zmdi-search"></i></button>
                                        </span>
                                    </form>
                                </nav>

                                <div class="header-button">
                                    <div class="noti-wrap">
                                        <div class="account-wrap">
                                            <div class="account-item clearfix js-item-menu">
                                                <div class="image">
                                                    <img src="{{ URL::asset('dashboard/images/pumin.png')}}" alt="John Doe" />
                                                </div>
                                                <div class="content">
                                                    <a class="js-acc-btn" href="#">{{ Auth::user()->name }} </a>
                                                </div>
                                                <div class="account-dropdown js-dropdown">
                                                    <div class="info clearfix">
                                                        <div class="image">
                                                            <img src="{{ URL::asset('dashboard/images/pumin.png')}}" alt="John Doe" />
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="name">
                                                                <a href="#">Admin</a>
                                                            </h5>
                                                            <span class="email">{{ Auth::user()->email }} </span>
                                                        </div>
                                                    </div>
                                                    <div class="account-dropdown__footer">
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            <i class="zmdi zmdi-power"></i>Logout</a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">overview</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="au-card recent-report">
                                        <div class="au-card-inner">
                                            <h3 class="title-2">จำนวนคนที่ใช้บริการ</h3> <br>
                                            <div id="container1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="au-card recent-report">
                                        <div class="au-card-inner">
                                            <h3 class="title-2">จำนวนคนที่ใช้บริการRoute1</h3> <br>
                                            <div id="container2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="au-card recent-report">
                                        <div class="au-card-inner">
                                            <h3 class="title-2">จำนวนคนที่ใช้บริการRoute2</h3> <br>
                                            <div id="container3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="au-card chart-percent-card">
                                        <div class="au-card-inner">
                                            <h3 class="title-2 tm-b-5">char by %</h3>
                                            <div class="row no-gutters">
                                                <div class="col-xl-6">
                                                    <div class="chart-note-wrap">
                                                        <div class="chart-note mr-0 d-block">
                                                            <span class="dot dot--blue"></span>
                                                            <span>products</span>
                                                        </div>
                                                        <div class="chart-note mr-0 d-block">
                                                            <span class="dot dot--red"></span>
                                                            <span>services</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="percent-chart">
                                                        <canvas id="percent-chart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="{{ URL::asset('dashboard/vendor/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap JS-->
        <script src="{{ URL::asset('dashboard/vendor/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{ URL::asset('dashboard/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <!-- Vendor JS       -->
        <script src="{{ URL::asset('dashboard/vendor/slick/slick.min.js')}}">
        </script>
        <script src="{{ URL::asset('dashboard/vendor/wow/wow.min.js')}}"></script>
        <script src="{{ URL::asset('dashboard/vendor/animsition/animsition.min.js')}}"></script>
        <script src="{{ URL::asset('dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
        </script>
        <script src="{{ URL::asset('dashboard/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{ URL::asset('dashboard/vendor/counter-up/jquery.counterup.min.js')}}">
        </script>
        <script src="{{ URL::asset('dashboard/vendor/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{ URL::asset('dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{ URL::asset('dashboard/vendor/highchart/highchart.js')}}"></script>
        <script src="{{ URL::asset('dashboard/vendor/select2/select2.min.js')}}">
        </script>

        <!-- Main JS-->
        <script src="{{ URL::asset('dashboard/js/main.js')}}"></script>
        <script type="text/javascript">
            var month = {{$month}};
            var year = {{$year}};
            $("#list-month").val(month);
            $("#list-year").val(year);
            $.get( "chartbus?month={{$month}}&year={{$year}}", function( result ) {
                $('#container1').highcharts( result['data'])
            });

            $.get( "chartbus1?month={{$month}}&year={{$year}}", function( result ) {
                $('#container2').highcharts( result['data'])
                console.log(result['data']);
            });

            $.get( "chartbus2?month={{$month}}&year={{$year}}", function( result ) {
                $('#container3').highcharts( result['data'])
                console.log(result['data']);
            });

        </script>
    </body>
</html>
<!-- end document-->
