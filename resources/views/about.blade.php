@extends('layouts.website')

@section('content')


    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">@lang('site.about') </h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('site.home')</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">@lang('site.about')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <!-- about-descriptions -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <!--  about-details  -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb100">
                    <img src="{{ asset('images/' . $about->avatar ) }} " alt="" class="img-fluid rounded">
               </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="p-5">

{!! $about->body !!}
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb30">
                        <div class="feature card text-center">
                            <div class="card-body">
                                <div class="feature-icon circle-second-icon circle-xl bg-light text-default mr-auto ml-auto ">
                                    <i class="fas fa-rocket fa-2x"></i>
                                </div>
                                <h3>@lang('site.message') </h3>
                                <p class="feature-content">
                                    {{ $about->message }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb30">
                        <div class="feature card text-center">
                            <div class=" card-body ">
                                <div class="feature-icon circle-second-icon circle-xl bg-light text-default mr-auto ml-auto ">
                                    <i class="fas fa-eye fa-2x"></i>
                                </div>
                                <h3>@lang('site.vision')</h3>
                                <p class="feature-content">   {{ $about->vision }} </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb30">
                        <div class="feature card text-center">
                            <div class=" card-body ">
                                <div class="feature-icon circle-second-icon circle-xl bg-light text-default mr-auto ml-auto ">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                                <h3>@lang('site.team') </h3>
                                <p class="feature-content"> {{ $about->team }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		  {{-- <div class="space-small counter-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="counter metrics-v2  text-center">
						<div class="metrics-icon"><img src="images/metrics-icon-1.png" alt="" class="img-fluid"></div>
                            <h2 class="timer count-title count-number" data-to="50000" data-speed="1500">1</h2>
                            <h3 class="count-text">الشركات</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="counter metrics-v2  text-center">
						<div class="metrics-icon"><img src="images/metrics-icon-1.png" alt="" class="img-fluid"></div>
                            <h2 class="timer count-title" data-to="150" data-speed="1500">1</h2>
                            <h3 class="count-text ">الرعاه</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                         <div class="counter metrics-v2  text-center">
						<div class="metrics-icon"><img src="images/metrics-icon-1.png" alt="" class="img-fluid"></div>
                            <h2 class="timer count-title" data-to="5000" data-speed="1500">1</h2>
                            <h3 class="count-text ">التقيمات</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                     <div class="counter metrics-v2  text-center">
						<div class="metrics-icon"><img src="images/metrics-icon-1.png" alt="" class="img-fluid"></div>
						<h2 class="timer count-title" data-to="4444" data-speed="1500">1</h2>
                            <h3 class="count-text ">المشتركين</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

		<div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="section-title">
                        <h2> @lang('site.what_we_offer')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card service-block">
                                <div class="card-body p-5 ">
                                <div class="card-img">
                                    <div class="service-img">
                                        <img src="images/service-img-2.png" alt="" class="img-fluid">
                                    </div>


                                </div>
                                <h3 class="service-title">   @lang('site.for_get')
 </h3>
                                <p>{{ $about->offer2 }}</p>
                            </div>

                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card service-block">
                                <div class="card-body p-5 ">
                                <div class="card-img">
                                    <div class="service-img">
                                        <img src="images/service-img-1.png" alt="" class="img-fluid">
                                    </div>


                                </div>
                                <h3 class="service-title"> @lang('site.for_c')
</h3>
                                <p>{{ $about->offer1 }}</p>
                            </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

  <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="section-title">
                        <h2>@lang('site.how_to_join')  </h2>

</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                    <div class="feature-block">
                        <div class="circle-icon bg-info rounded-circle mb30">
                            <i class="icon-038-bouquet"></i>
                        </div>
                        <div class="feature-content">
                            <p> {{ $about->how1 }} </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                    <div class="feature-block">
                        <div class="circle-icon bg-danger rounded-circle mb30">
                            <i class="icon-013-calendar"></i>
                        </div>
                        <div class="feature-content">
                            <p>ل{{ $about->how2 }} </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                    <div class="feature-block">
                        <div class="circle-icon bg-secondary rounded-circle mb30">
                            <i class="icon-021-love-1"></i>
                        </div>
                        <div class="feature-content">
                            <p>{{ $about->how3 }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="dzsparallaxer auto-init out-of-bootstrap mode-scroll animation-engine-js dzsprx-readyall" data-options="{ direction: &quot;normal&quot;}" style="height: 553px;">
         <div class="divimage dzsparallaxer--target" style="width: 100%; height: 900px; background-image: url(&quot;images/parallax-img-1.jpg&quot;); transform: translate3d(0px, -39.3471px, 0px);">
         </div>
         <div class="parallax-section">
            <div class="container">
               <div class="row">
                  <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                     <h1 class="text-white mb20"> @lang('site.owner')</h1>
                     <a href="{{ route('register') }}" class="btn btn-default btn-lg mt20"> @lang('site.register')</a>
                  </div>
               </div>
            </div>
         </div>
      </div>

    <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h2 class="mb10">@lang('site.test')</h2>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">

                @foreach ($tests as $test)


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <p class="testimonial-text">{!! $test->body !!}</p>
                        <div class="testimonial-pic"><img src="{{ asset('images/' . $test->avatar) }} " class="rounded-circle" alt=""></div>
                            <div class="testimonial-meta">
                                <h3 class="testimonial-name mb-0"> {{ $test->name  }}</h3>
                                <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    </span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                        </div>
                    </div>
                </div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="section-title">
                        <h2>  @lang('site.partners')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($partners as $partner)


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb30">
                    <a href="#">
                <div class="client-logo">
                  <img src="{{ asset('images/' . $partner->avatar ) }}" alt="" class="img-fluid">
                </div>
             </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
            </div>



@endsection
