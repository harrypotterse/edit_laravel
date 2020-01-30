<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> {{ config('app.name', 'Laravel') }} </title>
      <link href="{{ asset('website/css/bootstrap.min.css ') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
      <link href="{{ asset('website/fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
      <link href="{{ asset('website/fontello/css/fontello.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('website/wedding-icon-font/flaticon.css') }}">
      <link href="{{ asset('website/css/owl.carousel.css') }}" type="text/css" rel="stylesheet">
      <link href="{{ asset('website/css/owl.theme.default.css') }}" type="text/css" rel="stylesheet">
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('website/css/dzsparallaxer.css') }}">
      <link href="{{ asset('website/css/summernote-bs4.css') }}" rel="stylesheet">
      <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('website/css/rtl.css') }}" rel="stylesheet">
      <link href="{{ asset('website/css/offcanvas.css') }}" rel="stylesheet">


</head>

<body class="body-bg">
     <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="{{ route('vendor.')}}"><img src="{{ asset('images/logo.png') }}" alt="Weddings "|"Weddings "></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <nav class="navbar navbar-expand-lg float-right db-nav-list">
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropleft notification ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="notification-icon"> <i class="fas fa-bell"></i></span><span class="user-vendor-name"></span></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                        <li>
                                            <div class="notification-title"> الأشعارات</div>
                                            <div class="notification-list">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action active">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">تقدسم عرض سعر</span>بشان منتج.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">تقدسم عرض سعر</span>بشان منتج.
                                                                <div class="notification-date">2 days ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">تقدسم عرض سعر</span>بشان منتج.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar offcanvas-collapse">
            <div class="vendor-user-profile">
                <div class="vendor-profile-img">
                    <img src="{{ asset('images/' . Auth::user()->avatar) }}" alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name">{{ Auth::user()->name }}</h3>

            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li class="active"><a href="{{ route('vendor.')}}"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>لوحه التحكم</a></li>
                    <li><a href="{{ route('vendor.service.index')}}"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> الاضافات للشركة </a>
                        <li><a href=""><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>اسعار الاشتراكات</a></li>
                        <li><a href="{{ route('vendor.order.index')}}"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>طلب عرض السعر</a></li>
                        <li><a href=""><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>التقسمات </a></li>
                        <li><a href="{{ route('vendor.profile.index')}}"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>الملف الشخصي</a></li>
                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                         <i class="fa fa-power-off"></i>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>

                       تسجيل الخروج</a></li>
                </ul>
            </div>
        </div>


        @yield('content')
    </div>

    <script src="{{ asset('website/js/jquery.min.js ') }}"></script>
    <script src="{{ asset('website/js/menumaker.min.js ') }}"></script>
    <script src="{{ asset('website/js/fastclick.js') }}"></script>
    <script src="{{ asset('website/js/jquery.slimscroll.js ') }}"></script>
    <script src="{{ asset('website/js/bootstrap.bundle.min.js ') }}"></script>
    <script src="{{ asset('website/js/offcanvas.js ') }}"></script>
    <script src="{{ asset('website/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('website/js/summernote-bs4.js') }}"></script>
    <script src="{{ asset('website/js/custom-script.js ') }}"></script>

</body>


</html>
