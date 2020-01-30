@extends('layouts.admin')

@section('content')

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"> افكار الزفاف </a></li>
                            <li class="breadcrumb-item active">   تعديل المقال</li>
                        </ol>
                    </div>
                </div>

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="{{ route('dashboard.test.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    </div>

                                    <div class="form-body">

                                            @foreach (config('translatable.locales') as $locale)

                                            <div class="form-group row">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">  العنوان باللغه @lang('admin.' . $locale) </label>
                                                    <input type="text" id="firstName" class="form-control" name="{{$locale}}[name]" value="{{ $category->translate($locale)->name }}" required>
                                               </div>

                                          </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-12">
                                                        <label class="control-label">  الوصف باللغه @lang('admin.' . $locale) </label>
                                                          <textarea name="{{$locale}}[body]" class="summernote">{{$category->translate($locale)->body}}</textarea>
                                                      </div>
                                            </div>
                                        @endforeach



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> الصوره الرئيسيه </label>
                                                    <input type="file" name="avatar" id="firstName" class="form-control">
                                               </div>
                                            </div>
                                        </div>
                                    </div>

                                    </div>


                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>  تعديل الرأي</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

@endsection
