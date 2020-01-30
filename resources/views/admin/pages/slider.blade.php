@extends('layouts.admin')

@section('content')


        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0"> معرض الصور العلوي</h3>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="{{ route('dashboard.editslider', $slider->id ) }}" class="btn float-right hidden-sm-down btn-success">
                            <i class="mdi mdi-plus-circle"></i>تعديل</a>
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
                                                <th>العنوان </th>
                                                <th>الوصف </th>
                                                <th> الصوره </th>

                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td> 1</td>
                                                <td>{{ $slider->name }}</td>
                                                <td>{!! $slider->body !!}</td>
                                                <td><img src="{{ asset('images/' . $slider->avatar ) }} " style="max-width: 100px;"> </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>العنوان </th>
                                                    <th>الوصف </th>
                                                    <th> الصوره </th>

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
