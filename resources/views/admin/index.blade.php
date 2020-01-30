@extends('layouts.admin')

@section('content')

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor mb-0 mt-0">الرئيسيه</h3>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-info">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">{{ $service }}</h1>
                        <h6 class="text-white">الخدمات</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-primary card-inverse">
                    <div class="box text-center">
                        <h1 class="font-light text-white">{{ $company }}</h1>
                        <h6 class="text-white">الشركات</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-success">
                    <div class="box text-center">
                        <h1 class="font-light text-white">{{ $users }}</h1>
                        <h6 class="text-white">المستخدمين </h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-warning">
                    <div class="box text-center">
                        <h1 class="font-light text-white">{{ $blogs }}</h1>
                        <h6 class="text-white">المقالات </h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="container">
            <h1>اخر الاشتراكات</h1>
            <table class="table table-condensed" style="
            background: aliceblue;
            box-shadow: 1px 2px #eae0e0;
        ">
                <thead>
                    <tr style="
                            background: #00a2ce;
                            color: white;
                            text-align: center !important;
                        ">
                        <td>اسم المستخدم</td>
                        <td>البريد الالكتروني</td>
                        <td>الشركة</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach(\App\User::take(10)->orderBy('id','desc')->get() as $item_users)
                    <tr>
                        <td>{{ $item_users->name}}</td>
                        <td>{{ $item_users->email}}</td>
                        <td>{{ $item_users->role_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>


@endsection