@extends('layouts.admin')

@section('content')

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الخدمات  </a></li>
                            <li class="breadcrumb-item active">اضافه  جديد</li>
                        </ol>
                    </div>
                </div>

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="{{ route('dashboard.service.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">  قسم الخدمه </label>
                                                    <select  name="scategory_id" id="firstName" class="form-control">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                                    @endforeach
                                                    </select>
                                               </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-body">

                                            @foreach (config('translatable.locales') as $locale)

                                            <div class="form-group row">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">  العنوان باللغه @lang('admin.' . $locale) </label>
                                                    <input type="text" id="firstName" class="form-control" name="{{$locale}}[name]" value="{{ old($locale . '.name') }}" required>
                                               </div>

                                          </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-12">
                                                        <label class="control-label">  الوصف باللغه @lang('admin.' . $locale) </label>
                                                          <textarea name="{{$locale}}[body]" class="summernote">{{ old($locale . '.body') }}</textarea>
                                                      </div>
                                            </div>
                                        @endforeach



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> الصوره الرئيسيه </label>
                                                    <input type="file" name="avatar" id="firstName" class="form-control" required>
                                               </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">معرض الصور  </label>
                                                    <input type="file" name="gallery[]" id="firstName" class="form-control" required  multiple>
                                               </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> اضافه  خدمه جديده</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

@endsection
