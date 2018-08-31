<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets-member/css/images/favicon.png')}}">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    @yield('css')
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
    <link href="{{asset('assets-member/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets-member/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets-member/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets-member/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets-member/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('assets-member/css/style.css')}}" rel="stylesheet">
    @yield('style')
    <!-- HTML5 Shim and Respond.js')}}')}} IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}}')}} doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets-member/https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}')}}"></script>
    <script src="{{asset('assets-member/https:**oss.maxcdn.com/libs/respond.js')}}')}}/1.4.2/respond.min.js')}}')}}"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css')}}')}} -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="{{asset('assets-member/images/logo.png')}}" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="{{asset('assets-member/images/logo-text.png')}}" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
              								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
              							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
              								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
              							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('assets-member/images/users/5.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets-member/images/users/5.jpg')}}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="" href="{{url('admin/dashboard')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                        <li class="nav-label">Features</li>
                        <li> <a class="" href="{{url('admin/cars')}}" aria-expanded="false"><i class="fa fa-car"></i><span class="hide-menu">Cars-list </span></a>
                        <li> <a class="" href="{{url('admin/orders')}}" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="hide-menu">Orders-list </span></a>
                        <li> <a class="" href="{{url('admin/places')}}" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="hide-menu">Place-list </span></a>
                        <li> <a class="" href="#" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="hide-menu">Payments </span></a>
                        <li> <a class="" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Users </span></a>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        @yield('content')
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{asset('assets-member/js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets-member/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets-member/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets-member/js/jquery.slimscroll.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets-member/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets-member/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>

    <script src="{{asset('assets-member/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('assets-member/js/lib/weather/weather-init.js')}}"></script>
    <script src="{{asset('assets-member/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets-member/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>

    <!-- Amchart -->
    @yield('script')

    <!--Custom JavaScript -->
    <script src="{{asset('assets-member/js/custom.min.js')}}"></script>
</body>

</html>
