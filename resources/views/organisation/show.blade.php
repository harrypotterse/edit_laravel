@extends('layouts.website')

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title"> {{ $category->name }}</h1>
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
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('site.organisations')</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"> {{ $category->name }}</li>
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
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">

                    @forelse ($category->service as $item)
                    <div class="vendor-thumbnail list-view">
                            <div class="row">

                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 border-right pr-0">
                                    <div class="vendor-img">
                                        <a href="#">
                                            <div class="zoomimg">
                                                <img src="{{ asset('images/' . $item->avatar ) }}" style="max-height: 200px;" alt="" class="img-fluid"></div></a>
                                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                    </div>
                                </div>
                                <!-- /.Vendor img -->

                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 pl-0">
                                    <div class="vendor-content">
                                    <h2 class="vendor-title"><a href="{{ route('Servicedetails', ['id'=>$item->id]) }}" class="title">{{ $item->name  }}</a></h2>
                                        {{--  <p class="vendor-address">الرياض - السعودية</p>  --}}
                                    </div>
                                    <div class="vendor-meta">

                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                            <span class="rating-star">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rate-mute"></i>
                                        </span>
                                            <span class="rating-count vendor-text"></span>
                                        <p> {!! substr($item->body, 0, 80)  !!} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse


                    {{--  <div class="pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link " href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>  --}}
                </div>
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
            </div>

        </div>
    </div>


@endsection
