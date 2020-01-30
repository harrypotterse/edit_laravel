@extends('layouts.admin')

@section('content')

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"> الرعاه </a></li>
                            <li class="breadcrumb-item active">اضافه  جديد</li>
                        </ol>
                    </div>
                </div>

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="{{ route('dashboard.partner.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf




                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">  لوجو الراعي </label>
                                                    <input type="file" name="avatar" id="firstName" class="form-control" required>
                                               </div>
                                            </div>
                                        </div>


                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> اضافه  راعي جديد</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

@endsection
