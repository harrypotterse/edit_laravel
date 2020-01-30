@extends('layouts.admin')

@section('content')


        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">  طلبات عرض السعر</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
           <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
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
                                        <tfoot>
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
                                            </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


@endsection
