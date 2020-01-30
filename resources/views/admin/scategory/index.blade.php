@extends('layouts.admin')

@section('content')


        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">اقسام  الخدمات</h3>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="{{ route('dashboard.scategory.create') }}" class="btn float-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i>
                            اضافه قسم جديد</a>
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
                                                <th>اسم القسم</th>
                                                <th>صوره القسم</th>
                                                <th>تاريخ الاضافه</th>
                                                <th>عدد الخدمات</th>
                                                <th>التحكم</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                    @foreach ($categories as $index=> $category)


                                            <tr>
                                                <td>{{ $index  + 1}}</td>
                                                <td>{{ $category->name }}</td>
                                                <td><img src="{{ asset('images/' . $category->avatar ) }} " style="max-width: 100px;"> </td>
                                                <td>{{ date("Y M d", strtotime($category->created_at)) }}</td>
                                                <td>27</td>
                                                <td>
                                                    <div class="card-body">
                                                        <a href="{{ route('dashboard.scategory.edit', $category->id ) }}" class="btn btn-success btn-circle"><i class="fa fa-edit"></i> </a>
                                                        <form style="display: contents;" method="post" action="{{ route('dashboard.scategory.destroy', $category->id ) }}">

                                                                @method('DELETE')
                                                                @csrf

                                                                <button id="sa-confirm" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
                                                                </form>

                                                    </div>
                                                 </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                                <tr>
                                                        <th>#</th>
                                                        <th>اسم القسم</th>
                                                        <th>صوره القسم</th>
                                                        <th>تاريخ الاضافه</th>
                                                        <th>عدد الخدمات</th>
                                                        <th>التحكم</th>
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
