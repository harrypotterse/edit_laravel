@extends('layouts.website')

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                            <h1 class="page-title"> {{ $blog->name  }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('site.home')</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"> @lang('site.blogs') </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="post-content-single">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="post-img">
                                    <a href="#">
                                        <img src="{{ asset('images/' . $blog->avatar ) }}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="post-content text-left">
                                    <h2> {{ $blog->name  }}</h2>
                                    {!! $blog->body  !!}

        <div class="mb30">
        @php
                $gallery = explode('/', $blog->gallery);
        @endphp 
            @foreach($gallery as $photo)
            <img src="{{ asset('images/' . $photo ) }}" alt="" class="mb10">
            @endforeach
                        </div>
                                </div>

                            </div>
                            <div class="col-xl-12 mt-2">
                                <div class="card card-body card-shadow-none border mb-0">
                                 
                            <h4 >Share this </h4>
                            <div class="social-icons">
                                <a href="#" class="icon-square-outline facebook-outline"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-square-outline twitter-outline"><i class="fab fa-twitter"></i> </a>
                                <a href="#" class="icon-square-outline googleplus-outline"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="icon-square-outline instagram-outline"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="icon-square-outline linkedin-outline"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="icon-square-outline pinterest-outline"><i class="fab fa-pinterest-p"></i></a>
                            </div> 
                            </div>
                            </div>
                          
                            <!-- related-post-block -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="related-post-block">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h3 class="mb20"> @lang('site.semilar_blogs') </h3></div>
                                    </div>
                                    <div class="row">
                                        @foreach($blogs as $sblog)
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="related-post">
                                                <div class="related-img">
                                                    <a href="{{ route('getblog', $sblog->id )}}">
                                                        <img src="{{ asset('images/' . $sblog->avatar) }}" alt="" class="img-fluid"></a>
                                                </div>
                                                <h4 class="realted-title"><a href="{{ route('getblog', $sblog->id )}}" class="title"> {{ $sblog->name  }}</a></h4>
                                                <p class="related-post-meta"><span>In <span class="related-category"> {{ $sblog->category->name  }}</span></span></p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="sidebar">
                      
                         <div class="filter-form">
                                <form method="POST" action="{{ route('organisation.store') }}">
                                        @csrf
                                               <div class="row">
                                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                       <h3 class="mb20"> @lang('site.request_qu')</h3>
                                                   </div>
                                                   <!-- Text input-->
                                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                       <div class="form-group">
                                                           <label class="control-label sr-only" for="name1">@lang('site.name')</label>
                                                           <input id="name1" name="name" type="text" placeholder="@lang('site.name')"  class="form-control input-md" required="">
                                                       </div>
                                                   </div>
                                                   <!-- Text input-->
                                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                       <div class="form-group">
                                                           <label class=" control-label sr-only" for="email2">@lang('site.email')</label>
                                                           <input id="email2" name="email" type="text" placeholder="@lang('site.email')"  class="form-control input-md" required="">
                                                       </div>
                                                   </div>
                                                   <!-- Text input-->
                                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                       <div class="form-group">
                                                           <label class=" control-label sr-only" for="phone">@lang('site.phone')</label>
                                                           <input id="phone" name="phone" type="text" placeholder="@lang('site.phone')"  class="form-control input-md" required="">
                                                       </div>
                                                   </div>
                                                   <!-- Text input-->
                                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                       <div class="form-group">
                                                           <label class="control-label sr-only" for="weddingdate"> @lang('site.w_date')</label>
                                                           <input id="weddingdate" name="date" placeholder="@lang('site.w_date')" type="text" class="form-control input-md hasDatepicker" required="">
                                                           <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                                       </div>
                                                   </div>
                                                   <!-- Textarea -->
           
           
           
           
                                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb20">
                                           <!-- aminites -->
                                           <div class="aminities">
                                               <h3 class="widget-title">@lang('site.service_from') </h3>
           
                                               @foreach ($categories as $cat)
           
                                               <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" name="service[]" value="{{ $cat->name  }}" class="custom-control-input" id="customCheck{{ $cat->id  }}">
                                                   <label class="custom-control-label" for="customCheck{{ $cat->id  }}"> {{ $cat->name  }}</label>
                                               </div>
           
                                               @endforeach
           
                                           </div>
                                           <!-- /.aminites -->
                                       </div>
                                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                       <div class="form-group">
                                                           <label class="control-label sr-only" for="comments"> @lang('site.details')</label>
                                                           <textarea class="form-control" id="comments" name="message" rows="5" required placeholder="@lang('site.details')"></textarea>
                                                       </div>
                                                   </div>
                                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                           <button class="btn btn-default btn-block" type="submit">@lang('site.send')</button>
                                       </div>
           
                               </div>
                           </form>
                    </div>
                </div>
                <!-- /.sidebar-section -->
                        <!-- /.widget-tags -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection