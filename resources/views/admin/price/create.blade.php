@extends('layouts.admin')

@section('content')


<div class="page-wrapper">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">الباقات </a></li>
                        <li class="breadcrumb-item active">اضافه باقه جديده</li>
                    </ol>
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-outline-info">
                        <div class="card-body">
                            <form action="{{ route('dashboard.price.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">

                                        <div class="form-group row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">  اسم الباقه </label>
                                                <input type="text" id="firstName" class="form-control" name="name" required>
                                           </div>

                                      </div>
                                    </div>

                                    <div class="form-group row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">   سعر الباقه </label>
                                                    <input type="text" id="firstName" class="form-control" name="price" required>
                                               </div>

                                          </div>
                                        </div>

                                    <div class="form-group row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">   الميزه الاولي </label>
                                                    <input type="text" id="firstName" class="form-control" name="feat1" required>
                                               </div>

                                          </div>
                                        </div>
                                        <div class="form-group row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">   الميزه الثانيه </label>
                                                        <input type="text" id="firstName" class="form-control" name="feat2" required>
                                                   </div>

                                              </div>
                                            </div>
                                            <div class="form-group row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">   الميزه الثالثه </label>
                                                            <input type="text" id="firstName" class="form-control" name="feat3" required>
                                                       </div>

                                                  </div>
                                                </div>
                                                <div class="form-group row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">   الميزه الرابعه </label>
                                                                <input type="text" id="firstName" class="form-control" name="feat4" required>
                                                           </div>

                                                      </div>
                                                    </div>

                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> اضافه  جديد</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->

@endsection
