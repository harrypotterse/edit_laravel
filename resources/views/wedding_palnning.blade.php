@extends('layouts.website')

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">  @lang('site.wedding_planing')</h1>
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
                            <li class="breadcrumb-item active text-white" aria-current="page"> @lang('site.wedding_planing')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->

<div class="space-medium bg-white">
  <div class="container">
      <div class="row">
          <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="section-title text-center">
                  <!-- section title start-->
                  <h2 class="mb10"> @lang('site.planning_tools') </h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
              <div class="vendor-feature-block feature-block">
                  <div class="feature-icon">
                      <a href="#"><i class="icon-021-love-1"></i></a>
                  </div>
                  <div class="feature-content">
                      <h3 class="feature-title"><a href=""> @lang('site.to_do')</a></h3>
                  </div>
              </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
              <div class="vendor-feature-block feature-block">
                  <div class="feature-icon">
                      <a href=""> <i class="icon-051-love-letter"></i></a>
                  </div>
                  <div class="feature-content">
                      <h3 class="feature-title"><a href=""> @lang('site.guest_list')</a></h3>
                  </div>
              </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
              <div class="vendor-feature-block feature-block">
                  <div class="feature-icon">
                      <a href=""> <i class="icon-051-dinner"></i></a>
                  </div>
                  <div class="feature-content">
                      <h3 class="feature-title"><a href=""> @lang('site.wedding_planing')</a></h3>
                  </div>
              </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
              <div class="vendor-feature-block feature-block">
                  <div class="feature-icon">
                      <a href=""> <i class="icon-051-wedding-arch"></i></a>
                  </div>
                  <div class="feature-content">
                      <h3 class="feature-title"><a href=""> @lang('site.choose_o')</a></h3>
                  </div>
              </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
              <div class="vendor-feature-block feature-block">
                  <div class="feature-icon">
                      <a href=""> <i class="icon-calculator-1"></i></a>
                  </div>
                  <div class="feature-content">
                      <h3 class="feature-title"><a href="">@lang('site.budget')</a></h3>
                  </div>
              </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
              <div class="vendor-feature-block feature-block">
                  <div class="feature-icon">
                      <a href=""> <i class="icon-013-calendar"></i></a>
                  </div>
                  <div class="feature-content">
                      <h3 class="feature-title"><a href="">@lang('site.invitation') </a></h3>
                  </div>
              </div>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt40">
             <a href="{{ route('getqou')}}" class="btn btn-default btn-lg mb20">  @lang('site.request_qu') </a>
             <p> <a href="{{ route('register')}}" class="text-gray"> @lang('site.register')</a></p>
          </div>
      </div>
  </div>
</div>

<div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="section-title text-center">
                    <div class="section-top-icon shape-icon-1 mb20">
                        <i class="icon-051-love-birds"></i>
                     </div>
                        <h2 class="mb10"> @lang('site.company_services')</h2>
                    </div>
                </div>
            </div>
            <div class="row">

              @foreach ($scategories as $category)

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="{{ route('organisation.show', $category->id)}}">
                            <img src="{{ asset('images/' . $category->avatar ) }}" alt="" class="img-fluid"></a>
                          </div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0">
                                    <a href="{{ route('organisation.show', $category->id)}}" class="vendor-categories-title"> {{ $category->name  }}</a></h4>
                                <p class="vendor-categories-numbers">{{ $category->service->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <!-- venue-categoris-btn -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt20"><a href="{{ route('organisation.index') }}" class="btn btn-primary btn-lg"> @lang('site.view_more')</a></div>
            </div>
            <!-- /.venue-categoris-btn -->
        </div>
      </div>


      <div class="process-section">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title text-center">
                            <!-- section title start-->
                            <h2 class="mb10 text-white"> @lang('site.how_to_join')</h2>
                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>
                <div class="row" style="direction:rtl;">
                    <!-- feature-1 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center text-white">
                        <div class="feature">
                            <div class="feature-icon icon-circle circle-xxl circle-transparent bg-transparent text-default mr-auto ml-auto ">
                                <i class="icon-013-calendar fa-3x"></i>
                                <div class="process-number">
                                    <div class="feature-icon icon-circle circle-sm circle-transparent bg-trasnperent text-default p-0">
                                        1
                                    </div>
                                </div>
                            </div>
                            <div class="feature-content mt30">
                             {!! $about->how1 !!}
                            </div>
                        </div>
                    </div>
                    <!-- feature-1 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center text-white">
                        <div class="feature">
                            <div class="feature-icon icon-circle circle-xxl circle-transparent bg-transparent text-default mr-auto ml-auto ">
                                <i class="icon-026-letter fa-3x"></i>
                                <div class="process-number">
                                    <div class="feature-icon icon-circle circle-sm circle-transparent bg-transparent text-default p-0">
                                        2
                                    </div>
                                </div>
                            </div>
                            <div class="feature-content mt30">
                                  {!! $about->how2 !!}
                            </div>
                        </div>
                    </div>
                    <!-- feature-1 -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center text-white">
                        <div class="feature">
                            <div class="feature-icon icon-circle circle-xxl circle-transparent bg-transparent text-default mr-auto ml-auto ">
                                <i class="icon-046-crown fa-3x"></i>
                                <div class="process-number">
                                    <div class="feature-icon icon-circle circle-sm circle-transparent bg-transparent text-default p-0">
                                        3
                                    </div>
                                </div>
                            </div>
                            <div class="feature-content mt30">
                                  {!! $about->how3 !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

   <div class="space-medium">
         <div class="container">
            <div class="row">
               <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                  <div class="section-title text-center">
                     <!-- section title start-->
                     <div class="section-top-icon shape-icon-1 mb20">
                        <i class="icon-051-love-birds"></i>
                     </div>
                     <h2 class="mb10"> @lang('site.advice')</h2>
                  </div>
                  <!-- /.section title start-->
               </div>
            </div>
            <div class="row">
                    @foreach($advices as $advice)

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="post-block-simple text-center">
                            <div class="post-img mb30 zoomimg">
                                <a href="">
                                    <img src="{{ asset('images/' . $advice->avatar ) }}" alt="" class="img-fluid"></a>
                            </div>
                            <h4><a href="" class="title"> {{ $advice->name }} </a></h4>
                        </div>
                    </div>

                    @endforeach


            </div>
         </div>
      </div>
@endsection
