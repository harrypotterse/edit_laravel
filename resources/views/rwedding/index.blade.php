@extends('layouts.website')

@section('content')


    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title"> {{ $category->name  }}</h1>
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
                            <li class="breadcrumb-item active text-white" aria-current="page"> @lang('site.real_wedding') </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <!-- real-wedding-section -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12 mb40">
                    <div class="section-block text-center ">
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($category->rwedding as $item)


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="real-wedding-block">
                        <div class="real-wedding-img zoomimg">
                            <a href="{{ route('getwedding', $item->id)}}">
                                <img src="{{ asset('images/' . $item->avatar ) }} " alt="bouquet wedding"  class="img-fluid"></a>
                        </div>
                        <div class="real-wedding-content ">
                            <!-- real wedding content -->
                            <h3 class="real-wedding-title">
                                <a href="{{ route('getwedding', $item->id) }}" class="title"> {{ $item->name  }}</a></h3>
                            <div class="real-wedding-meta"><span class="real-wedding-date"> {{ date("Y M d", strtotime($category->created_at)) }}</span>
                            <span class="real-wedding-place pl-3">{{ $category->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
