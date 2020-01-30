@extends('layouts.admin')

@section('content')

        <div class="page-wrapper">

            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">الباقات</h3>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="{{ route('dashboard.price.create') }}" class="btn float-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> اضافه جديد</a>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row pricing-plan">

                                    @foreach ($prices as $price)


                                    <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box">
                                            <div class="pricing-body border-left">
                                                <div class="pricing-header">
                                                    <h4 class="text-center">{{ $price->name }}</h4>
                                                    <h2 class="text-center"><span class="price-sign"></span>{{ $price->price }}</h2>
                                                    <p class="uppercase">per month</p>
                                                </div>
                                                <div class="price-table-content">
                                                    <div class="price-row"><i class="icon-user"></i> {{ $price->feat1 }}</div>
                                                    <div class="price-row"><i class="icon-screen-smartphone"></i> {{ $price->feat2 }}</div>
                                                    <div class="price-row"><i class="icon-drawar"></i> {{ $price->feat3 }}</div>
                                                    <div class="price-row"><i class="icon-refresh"></i> {{ $price->feat4 }}</div>
                                                    <div class="price-row">
                                                        {{-- <button class="btn btn-success waves-effect waves-light mt-3">Sign up</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection
