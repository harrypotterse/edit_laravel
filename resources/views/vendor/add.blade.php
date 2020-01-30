@extends('layouts.vendor')

@section('content')

        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">الاضافه</h3>
                            <p>يمكنك من هنا اضافه منتجاتك</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"> <h4 class="mb0">تفاصيل الخدمه</h4></div>
                    <div class="">
                        <form method="POST" action="{{ route('vendor.service.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Form Name -->
                            <div class="venue-form-info card-body">
                                <div class="row">
                                        <div class="col-sm-12 col-12">
                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="control-label" for="Category">الخدمة الاساسية</label>
                                                    <select class="wide" id="Category" name="scategory_id">
                                                        @foreach ($categories as $category)
                                                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                    @foreach (config('translatable.locales') as $locale)

                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title"> العنوان باللغه @lang('admin.' . $locale) </label>
                                            <input id="title" name="{{$locale}}[name]" value="{{ old($locale . '.name') }}" required type="text" class="form-control ">
                                        </div>
                                    </div>


                                        <div class="col-12">
                                                <label class="control-label">  الوصف باللغه @lang('admin.' . $locale) </label>
                                                <textarea name="{{$locale}}[body]" class="summernote form-control" id="summernote"  rows="6">{{ old($locale . '.body') }}</textarea>
                                              </div>

                                @endforeach


                            <div class="dashboard-venue-gallery card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>اضافه الصور</h3>

                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">الصوره الرئيسيه</label>
                                            <input id="filebutton" name="avatar" class="btn btn-primary btn-block" type="file">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="filebutton"> معرض الصور</label>
                                                <input id="filebutton" name="gallery[]" class="btn btn-primary btn-block" type="file" multiple>
                                            </div>
                                        </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-default" type="submit">ارسال</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
