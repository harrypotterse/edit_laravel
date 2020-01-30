@extends('layouts.website')

@section('content')


    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">{{ $category->name }} </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('site.home')</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"> @lang('site.wedding_ideas')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <!-- vendor-section -->
    <div class="content">
        <div class="container">
            <div class="row">
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="row">

                        @foreach ($category->blog as $item)

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="post-block">
                                <div class="post-img zoomimg">
                                    <a href="{{ route('getblog', $item->id )}}">
                                        <img src="{{ asset('images/' . $item->avatar ) }} " alt="" class="img-fluid"></a>
                                </div>
                                <div class="post-content">
                                  <h2 class="post-heading"><a href="{{ route('getblog', $item->id )}}" class="post-title"> {{ $item->name }} </a></h2>

                                    <p>  {{ strip_tags(substr($item->body, 0, 100)) }} </p> 
                              <a href="{{ route('getblog', $item->id )}}" class="btn-default-link">@lang('site.view_more')</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- sidebar-section -->
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
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
            </div>

        </div>
    </div>
    </div>

@endsection
