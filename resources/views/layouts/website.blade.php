<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ config('app.name', 'Laravel') }} </title>
    <!-- Bootstrap -->
    <link href="{{ asset('website/css/bootstrap.min.css ') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('website/fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{ asset('website/fontello/css/fontello.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/wedding-icon-font/flaticon.css') }}">
    <!-- OwlCarosuel CSS -->
    <link href="{{ asset('website/css/owl.carousel.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('website/css/owl.theme.default.css') }}" type="text/css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/dzsparallaxer.css') }}">
    <!-- Style CSS -->
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
    @stack('css')
    @if(app()->getLocale() == 'ar')
    <link href="{{ asset('website/css/rtl.css') }}" rel="stylesheet">
    @endif
</head>

<body>
    <div class="top-header">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>

                    </div>
                </div>
                <div class="col-md-6">

                    <ul>
                        @if(Auth::check())

                        @if(Auth::user()->role_id == 1)

                        <li> <a class="nav-link" href="{{ route('dashboard.') }}" id="menu-7">@lang('site.profile')</a>
                        </li>
                        @elseif(Auth::user()->role_id == 2)

                        <li> <a class="nav-link" href="{{ route('vendor.service.index') }}"
                                id="menu-7">@lang('site.profile')</a> </li>
                        @else
                        @endif
                        @else
                        <li> <a class="nav-link" href="{{ route('register') }}" id="menu-7">@lang('site.in_reg')</a>
                        </li>
                        <li> <a class="nav-link" href="{{ route('companyregister') }}"
                                id="menu-7">@lang('site.com_reg')</a> </li>
                        <li> <a class="nav-link" href="{{ route('login') }}" id="menu-7">@lang('site.login')</a> </li>
                        @endif
                    </ul>
                </div>
                @auth


                <div class="profiledb" style="
                margin-top: -3%;
            ">
                    <p style="
                    margin: 0px;
                    padding: 0px;
                ">{{ Auth::user()->name }} </p>
                    <img style="width: 45px; " width="50"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSyibYoOZrfO1NelurUMS0vsB73C1VPZ6w1OnDjV9lkK9BCWgyp"
                        alt="star rating jquery" class="rounded-circle img-responsive">
                    <p><a href="{{ route('logout') }}">تسجيل خروج</a></p>
                </div>
                @endauth
            </div>
        </div>

    </div>
    <!-- header -->
    <div class="header">

        <!-- navigation start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg navbar-classic">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('images/logo.png' ) }}" alt=""></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-classic">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                                <li class="nav-item "> <a class="nav-link " href="{{ route('index')}}" id="menu-1">
                                        @lang('site.home')
                                    </a></li>
                                <li class="nav-item "> <a class="nav-link " href="{{ route('about')}}" id="menu-1">
                                        @lang('site.about')
                                    </a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('organisation.index') }}" id="menu-2">
                                        @lang('site.organisations')
                                    </a> </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-3" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        @lang('site.real_wedding')
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-3">
                                        @foreach ($wcategories as $wcategory)
                                        <li><a class="dropdown-item" href="{{ route('rwedding', $wcategory->id)}}"
                                                title=""> {{ $wcategory->name  }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-5" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        @lang('site.planning_tools')
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-5">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item " href="{{ route('planning-wedding')}}">
                                                @lang('site.wedding_planing')</a>

                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="{{ route('getqou')}}">
                                                @lang('site.request_qu')</a>

                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-5" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        @lang('site.wedding_ideas')
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-5">
                                        @foreach ($categories as $category)

                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item "
                                                href="{{ route('weddingidea', $category->id) }}">{{ $category->name  }}</a>

                                        </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"
                                        id="menu-5">@lang('site.contact') </a></li>

                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       الفاعليات والمعارض
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-5">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item " href="event.pdf">معرض بوكية الاول</a>

                                        </li>

										 <li class="dropdown-submenu">
                                            <a class="dropdown-item " href="suppliers.html">الرعاه </a>

                                        </li>
                                      	 <li class="dropdown-submenu">
                                            <a class="dropdown-item " href="event-price.html">شراء التذاكر</a>


                                    </ul>
                                </li> --}}
                            </ul>
                            {{--  //lang  --}}
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                                <li class="dropdown-submenu">
                                    <a class="langmenu" href="#"> {{ LaravelLocalization::getCurrentLocaleName() }}</a>
                                    <ul class="dropdown-menu langmenudrop">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode =>
                                        $properties)
                                        <li>
                                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}

                                            </a>
                                        </li>
                                        @endforeach


                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- navigation close -->
    </div>
    <!-- /.header -->

    @yield('content')

    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
                    <h3 class="text-white mb0 mt10">يشرفنا تواصلك معنا</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- footer-widget -->
                    <div class="footer-widget">
                        <a href="#"><img src=" {{ asset('images/logo-white.png ') }}" style="width:180px;" alt=""
                                class="mb20"></a>
                        <p class="mb10">ستقام الفعالية في قاعة الفريدة للأحتفالات و في الفترة من 23 وحتى 27 يناير 2020
                        </p>
                        <a href="#"><img src="images/vision.png" style="width:230px;" alt="" class="mb20"></a>

                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            معلومات التواصل
                        </h3>
                        <p class="d-flex"><i class="fas fa-fw fa-map-marker-alt text-default pr-3 pt-1"></i>السعودية -
                            الرياض
                        </p>
                        <p class="mb0 d-flex"><i
                                class="fas fa-fw fa-phone-volume text-default pr-3 pt-1"></i>+02356777888</p>
                        <p class="mb0 d-flex"><i
                                class="fas fa-fw fa-envelope text-default pr-3 pt-1 "></i>info@bouquetwed.com</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            بوكية
                        </h3>
                        <ul class="listnone">
                            <li><a href="{{Request::root()}}/about">عن الموقع</a></li>
                            <li><a href="{{Request::root()}}/contact">التواصل</a></li>
                            <li><a href="#">الأسئله الشائعه</a></li>
                            <li><a href="#">أشتراك الشركات</a></li>
                            <li><a href="#">اشتركات الافراد</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- /.footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                    <div class="footer-widget newsletter-block">
                        <h3 class="widget-title">
                            انضم الينا
                        </h3>
                        <form>
                            <div class="form-group">
                                <label for="email" class="sr-only"></label>
                                <input type="email" class="form-control" id="email" aria-describedby="email"
                                    placeholder="من فضلك ادخل ايميلك">
                            </div>
                        </form>
                        <a href="#" class="btn btn-default">أشترك</a>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
        </div>
    </div>
    <!-- tiny-footer-section -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <p>© 2019 جميع الحقوق محفوظه - بوكية.</p>
                </div>
            </div>
        </div>
    </div>

    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('website/js/jquery.min.js ') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.min.js ') }}"></script>
    <script src="{{ asset('website/js/jquery.nice-select.min.js ') }}"></script>
    <script src="{{ asset('website/js/fastclick.js ') }}"></script>
    <script src="{{ asset('website/js/custom-script.js ') }}"></script>
    <script src="{{ asset('website/js/return-to-top.js ') }}"></script>
    <script src="{{ asset('website/js/dzsparallaxer.js ') }}"></script>

    <script>
        // for animation
         $(document).ready(function(){
           $('.pp-quote').click(function(){
             $('.pp-quote').removeClass("active");
             $(this).addClass("active");
         });
         });

         $(document).ready(function(){

                // hide-top

                 $('.li-quote-1').click(function(e){
                     e.stopPropagation();
                     $(".show").addClass('hide-top');
                     $(".hide-top").removeClass('show');
                     $('.quote-text-1').addClass('show');
                     $('.quote-text-1').removeClass('hide-bottom');
                 });

                 $('.li-quote-2').click(function(e){
                     e.stopPropagation();
                     $(".show").addClass('hide-top');
                     $(".hide-top").removeClass('show');
                     $('.quote-text-2').addClass('show');
                     $('.quote-text-2').removeClass('hide-bottom');
                 });

                 $('.li-quote-3').click(function(e){
                     e.stopPropagation();
                     $(".show").addClass('hide-top');
                     $(".hide-top").removeClass('show');
                     $('.quote-text-3').addClass('show');
                     $('.quote-text-3').removeClass('hide-bottom');
                 });
                 $('.li-quote-4').click(function(e){
                     e.stopPropagation();
                     $(".show").addClass('hide-top');
                     $(".hide-top").removeClass('show');
                     $('.quote-text-4').addClass('show');
                     $('.quote-text-4').removeClass('hide-bottom');
                 });
                 $('.li-quote-5').click(function(e){
                     e.stopPropagation();
                     $(".show").addClass('hide-top');
                     $(".hide-top").removeClass('show');
                     $('.quote-text-5').addClass('show');
                     $('.quote-text-5').removeClass('hide-bottom');
                 });
                 $('.li-quote-6').click(function(e){
                     e.stopPropagation();
                     $(".show").addClass('hide-top');
                     $(".hide-top").removeClass('show');
                     $('.quote-text-6').addClass('show');
                     $('.quote-text-6').removeClass('hide-bottom');
                 });
                 $('.li-quote-7').click(function(e){
                     e.stopPropagation();
                     $(".show").addClass('hide-top');
                     $(".hide-top").removeClass('show');
                     $('.quote-text-7').addClass('show');
                     $('.quote-text-7').removeClass('hide-bottom');
                 });
                 $('.li-quote-8').click(function(e){
                     e.stopPropagation();
                     $(".show").addClass('hide-top');
                     $(".hide-top").removeClass('show');
                     $('.quote-text-8').addClass('show');
                     $('.quote-text-8').removeClass('hide-bottom');
                 });


         });


         $(document).ready(function(){

                // hide-top

                 $('.li-quote-1').click(function(e){
                     e.stopPropagation();
                     $(".look").addClass('hide-dp-top');
                     $(".hide-dp-top").removeClass('look');
                     $('.dp-name-1').addClass('look');
                     $('.dp-name-1').removeClass('hide-dp-bottom');
                 });

                 $('.li-quote-2').click(function(e){
                     e.stopPropagation();
                     $(".look").addClass('hide-dp-top');
                     $(".hide-dp-top").removeClass('look');
                     $('.dp-name-2').addClass('look');
                     $('.dp-name-2').removeClass('hide-dp-bottom');
                 });

                 $('.li-quote-3').click(function(e){
                     e.stopPropagation();
                     $(".look").addClass('hide-dp-top');
                     $(".hide-dp-top").removeClass('look');
                     $('.dp-name-3').addClass('look');
                     $('.dp-name-3').removeClass('hide-dp-bottom');
                 });
                 $('.li-quote-4').click(function(e){
                     e.stopPropagation();
                     $(".look").addClass('hide-dp-top');
                     $(".hide-dp-top").removeClass('look');
                     $('.dp-name-4').addClass('look');
                     $('.dp-name-4').removeClass('hide-dp-bottom');
                 });

                 $('.li-quote-5').click(function(e){
                     e.stopPropagation();
                     $(".look").addClass('hide-dp-top');
                     $(".hide-dp-top").removeClass('look');
                     $('.dp-name-5').addClass('look');
                     $('.dp-name-5').removeClass('hide-dp-bottom');
                 });

                 $('.li-quote-6').click(function(e){
                     e.stopPropagation();
                     $(".look").addClass('hide-dp-top');
                     $(".hide-dp-top").removeClass('look');
                     $('.dp-name-6').addClass('look');
                     $('.dp-name-6').removeClass('hide-dp-bottom');
                 });
                 $('.li-quote-7').click(function(e){
                     e.stopPropagation();
                     $(".look").addClass('hide-dp-top');
                     $(".hide-dp-top").removeClass('look');
                     $('.dp-name-7').addClass('look');
                     $('.dp-name-7').removeClass('hide-dp-bottom');
                 });
                 $('.li-quote-8').click(function(e){
                     e.stopPropagation();
                     $(".look").addClass('hide-dp-top');
                     $(".hide-dp-top").removeClass('look');
                     $('.dp-name-8').addClass('look');
                     $('.dp-name-8').removeClass('hide-dp-bottom');
                 });


         });


         $('.langmenu').mouseover(function () {

            $(".langmenudrop").toggleClass('shownblock');
         });

    </script>
</body>

</html>