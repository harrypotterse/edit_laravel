@extends('layouts.vendor')

@section('content')


        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h3 class="dashboard-page-title">طلبات عروض الاسعار</h3>
                                    <p>تعرف علي التفاصيل</p>
                                </div>
                            </div>
                        </div>


                        <div class="card request-list-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                            <th>#</th>
                                            <th>الاسم </th>
                                            <th> البريد</th>
                                            <th> الهاتف</th>
                                            <th> تاريخ الزفاف</th>
                                            <th>  الخدمات</th>
                                            <th>  الرساله</th>
                                            <th>تاريخ الاضافه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($orders as $index=> $order)


                                        <tr>
                                            <td>{{ $index  + 1}}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->date }}</td>
                                            <td>{{ $order->service }}</td>
                                            <td>{{ $order->message }}</td>
                                            <td>{{ date("Y M d", strtotime($order->created_at)) }}</td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
