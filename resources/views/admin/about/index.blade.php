@extends('layouts.admin')

@section('content')

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">  صفحه من نحن </a></li>
                            
                        </ol>
                    </div>
                </div>

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="{{ route('dashboard.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


                                    <div class="form-body">

                                            @foreach (config('translatable.locales') as $locale)

                                            <div class="form-group row">

                                        <div class="row">
                                                <div class="col-12">
                                                        <label class="control-label">  الوصف باللغه @lang('admin.' . $locale) </label>
                                                          <textarea name="{{$locale}}[body]" class="summernote">{{$about->translate($locale)->body}}</textarea>
                                                      </div>
                                            </div>

                                            <div class="row">
                                                    <div class="col-12">
                                                            <label class="control-label">  الفريق باللغه @lang('admin.' . $locale) </label>
                                                              <textarea name="{{$locale}}[team]" class="summernote">{{$about->translate($locale)->team}}</textarea>
                                                          </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-12">
                                                                <label class="control-label">  الرؤيه باللغه @lang('admin.' . $locale) </label>
                                                                  <textarea name="{{$locale}}[vision]" class="summernote">{{$about->translate($locale)->vision}}</textarea>
                                                              </div>
                                                    </div>


            <div class="row">
                    <div class="col-12">
                            <label class="control-label">  الرساله باللغه @lang('admin.' . $locale) </label>
                                <textarea name="{{$locale}}[message]" class="summernote">{{$about->translate($locale)->message}}</textarea>
                            </div>
                </div>

                <div class="row">
                        <div class="col-12">
                                <label class="control-label">  ما1ا نقدم للشركات باللغه @lang('admin.' . $locale) </label>
                                    <textarea name="{{$locale}}[offer1]" class="summernote">{{$about->translate($locale)->offer1}}</textarea>
                                </div>
                    </div>


                    <div class="row">
                            <div class="col-12">
                                    <label class="control-label">  ماذا نقدم للافراد باللغه @lang('admin.' . $locale) </label>
                                        <textarea name="{{$locale}}[offer2]" class="summernote">{{$about->translate($locale)->offer2}}</textarea>
                                    </div>
                        </div>

                        <div class="row">
                                <div class="col-12">
                                        <label class="control-label">  كيف تشترك الاولي   باللغه @lang('admin.' . $locale) </label>
                                            <textarea name="{{$locale}}[how1]" class="summernote">{{$about->translate($locale)->how1}}</textarea>
                                        </div>
                            </div>
                            
                            <div class="row">
                                    <div class="col-12">
                                            <label class="control-label">    كيف تشترك الثانيه باللغه @lang('admin.' . $locale) </label>
                                                <textarea name="{{$locale}}[how2]" class="summernote">{{$about->translate($locale)->how2}}</textarea>
                                            </div>
                                </div>
                                <div class="row">
                                        <div class="col-12">
                                                <label class="control-label">    كيف تشترك الثالثه باللغه @lang('admin.' . $locale) </label>
                                                    <textarea name="{{$locale}}[how3]" class="summernote">{{$about->translate($locale)->how3}}</textarea>
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



                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>  تعديل الصفحه</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

@endsection
