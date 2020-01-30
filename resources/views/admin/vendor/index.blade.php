@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor mb-0 mt-0"> الشركات </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم </th>
                                        <th> الهاتف</th>
                                        <th> البريد</th>
                                        <th> الصوره</th>
                                        <th> عدد الخدمات</th>
                                        <th>تاريخ الاشتراك</th>
                                        <th>التفعيل</th>
                                        {{-- <th>التحكم</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $index=> $category)
                                    <tr>
                                        <td>{{ $index  + 1}}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->phone }}</td>
                                        <td>{{ $category->email }}</td>
                                        <td><img src="https://image.flaticon.com/icons/svg/145/145843.svg"
                                                style="max-width: 100px;"> </td>
                                        <td>{{ $category->service->count() }}</td>
                                        <td>{{ date("Y M d", strtotime($category->created_at)) }}</td>
                                        @php
                                            if($category->Activation== 0){     
                                        @endphp
                                        <td><a href=" {{ route('Activ_user', ['id'=>$category->id]) }}"  class="btn btn-danger" style="
                                            color: white;
                                        ">Inactive</a>
                                            @php
                                        }else{          
                                        @endphp
                                        <td><a  href=" {{ route('Activ_user', ['id'=>$category->id]) }}" class="btn btn-success" style="
                                            color: white;
                                        ">active</a>
                                            @php
                                        }
                                         @endphp
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم </th>
                                        <th> الهاتف</th>
                                        <th> البريد</th>
                                        <th> عدد الخدمات</th>
                                        <th>تاريخ الاشتراك</th>
                                        {{-- <th>التحكم</th> --}}
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