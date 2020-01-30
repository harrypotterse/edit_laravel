@extends('layouts.vendor')

@section('content')

<div class="dashboard-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-10 col-md-9 col-sm-12 col-12">
                    <div class="dashboard-page-header">

                        <h3 class="dashboard-page-title">اهلا بك في موقع بوكية</h3>
                        <p class="d-block">تابع حسابك واضف له افضل خدماك</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary">
                        <div class="card-body">
                            <div class="float-left">
                            <div class="summary-count">{{ $service }}</div>
                            <p>عدد الخدمات</p>
                        </div>
                              <div class="summary-icon"><i class="icon-051-wedding-arch"></i></div>

                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary">
                        <div class="card-body">
                            <div class="float-left">
                            <div class="summary-count">{{ $order }}</div>
                            <p>طلبات عرض السعر</p>
                        </div>
                              <div class="summary-icon"><i class="icon-021-love-1"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary">
                        <div class="card-body">
                            <div class="float-left">
                            <div class="summary-count">1</div>
                            <p>التقييمات </p>

                        </div>
                          <div class="summary-icon"><i class="icon-004-chat"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
