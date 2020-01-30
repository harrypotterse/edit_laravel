@extends('layouts.website')

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title"> @lang('site.organisations')</h1>
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
                            <li class="breadcrumb-item active text-white" aria-current="page">@lang('site.organisations') </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
  <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class=" col-xl-12  col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="section-title text-center">
					<div class="section-top-icon shape-icon-1 mb20">
                        <i class="icon-051-love-birds"></i>
                     </div>
                        <!-- section title start-->
                        <h2 class="mb10">@lang('site.company_services')</h2>
                    </div>
                </div>
            </div>
            <div class="row">

      @foreach ($categories as $category)

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img">
                            <a href="{{ route('organisation.show', $category->id)}}">
                            <img src="{{ asset('images/' . $category->avatar ) }}" alt="" class="img-fluid"></a></div>
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

        </div>
    </div>

@endsection
