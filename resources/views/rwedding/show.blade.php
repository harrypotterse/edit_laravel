@extends('layouts.website')

@section('content')

    <div class="real-wedding-single-img" style="background: url({{ asset('images/' . $wedding->avatar ) }}); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="realwed-caption">
                        <h1 class="real-wedding-single-title"> {{ $wedding->name  }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- page caption -->
        <div class="realwed-addressbar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    </div>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="leftsocial-icon">
                     <a href="#" class="icon-square-outline facebook-outline"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square-outline twitter-outline"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square-outline googleplus-outline"><i class="fab fa-google-plus-g"></i></a>
                         <a href="#" class="icon-square-outline instagram-outline"><i class="fab fa-instagram"></i></a>
                         <a href="#" class="icon-square-outline linkedin-outline"><i class="fab fa-linkedin-in"></i></a>
                       <a href="#" class="icon-square-outline pinterest-outline"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                    <div class="real-wedding-content bg-white border">
                        <!-- real-wedding-story -->
                        <div class="mb30">
                            <h3> {{ $wedding->name  }}</h3>
                            <h3> {!! $wedding->body  !!}</h3>
                        
                        </div>
                        <div class="mb30">
@php
                            $gallery = explode('/', $wedding->gallery);
@endphp 
                            @foreach($gallery as $photo)
                            <img src="{{ asset('images/' . $photo ) }}" alt="" class="mb10">
                            @endforeach
                        </div>
                   
                      
                    </div>
                  
                </div>
               
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block">
                        <h2>  @lang('site.more_wedding') </h2>
                    </div>
                </div>
                @foreach ($mors as $more)


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="real-wedding-block">
                        <div class="real-wedding-img zoomimg">
                            <a href="{{ route('getwedding', $more->id)}}">
                                <img src="{{ asset('images/' . $more->avatar ) }} " alt="bouquet wedding"  class="img-fluid"></a>
                        </div>
                        <div class="real-wedding-content ">
                            <h3 class="real-wedding-title">
                                <a href="{{ route('getwedding', $more->id) }}" class="title"> {{ $more->name  }}</a></h3>
                            <div class="real-wedding-meta"><span class="real-wedding-date"> {{ date("Y M d", strtotime($more->created_at)) }}</span>
                            <span class="real-wedding-place pl-3">{{ $more->wcategory->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
			            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block">
                        <h2> @lang('site.company_services')   </h2>
                    </div>
                </div>
                @foreach ($scategories as $category)

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="list-view.html">
                            <img src="{{ asset('images/' . $category->avatar ) }}" alt="" class="img-fluid"></a>
                          </div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0">
                                    <a href="list-view.html" class="vendor-categories-title"> {{ $category->name  }}</a></h4>
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