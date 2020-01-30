@extends('layouts.vendor')

@section('content')

        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">قائمه خدماتي</h3>
                            <p>الموقع السعودي الاول لتجهيزات الزفاف</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                        <a href="{{ route('vendor.service.create')}}" class="btn btn-default btn-sm">اضف خدمه </a>
                    </div>
                </div>
                <div class="dashboard-vendor-list">
                    <ul class="list-unstyled">
                        @foreach($services as $service)
                        <li>
                            <div class="dashboard-list-block">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="dashboard-list-img"><a href="#">
                                            <img src="{{ asset('images/' . $service->avatar ) }} " alt="" class="img-fluid"></a></div>
                                    </div>
                                    <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12 ">
                                        <div class="dashboard-list-content">
                                            <h3 class="mb0"><a href="#" class="title"> {{ $service->name }} </a></h3>
                                            {!! substr($service->body, 0, 150) !!}
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="dashboard-list-btn">
                                            <a href="{{ route('vendor.service.edit', $service->id )}}" class="btn btn-outline-violate btn-xs mr10">تعديل</a>
                                            <a href="#" class="btn btn-outline-pink btn-xs ">مسح</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

@endsection