@extends('layouts.website')
@section('content')
<!-- navigation start -->
<div class="container">
    <div class="row">
    </div>
</div>
<!-- navigation close -->
</div>
<!-- /.header -->
<!-- page-header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <!-- page caption -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="page-caption">
                    <h1 class="page-title">اسعار الاشتراكات</h1>
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
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">الرئيسيه</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">الباقات</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- page breadcrumb -->
</div>
<!-- /.page-header -->
<!-- price-sections -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="row">
                    
              
                    @if (count($package)>0)
                    @foreach ($package as $item_package)
                    <?php
                    if( $item_package->Package=="المجانية"){
                        $route=route('Activation');
                    }else{
                        $route="#";    
                    }
                    ?>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="pricing-box pricing-standard">
                                <!-- pricing box -->
                                <h4 class="pricing-name">{{ $item_package->Package}}</h4>
                                <div class="price">{{ $item_package->price}}</div>
                                <div class="price-feature">
                                    <ul class="listnone">
                                        <li>{{ $item_package->FeaturesA}}</li>
                                        <li>{{ $item_package->FeaturesB}}</li>
                                        <li>{{ $item_package->Featuresc}}</li>
                                        <li>{{ $item_package->Featuresd}}</li>
                                    </ul>
                                </div>
                                <a href="{{ $route }}" class="btn btn-white">اطلب الان</a>
                            </div>
                            <!-- /.pricing box -->
                        </div>
                    @endforeach
                    @endif
                 
         
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.price-sections -->
@endsection