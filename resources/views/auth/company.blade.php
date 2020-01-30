@extends('layouts.auth')

@section('content')

<body class="vendor-bg-image">
    <!-- sign up -->
   <div class="row" >
		<div class="container" >
		  <div class="couple-head">
                        <a href="">
                            <img src="{{ asset('images/logo.png') }}" alt="bouquet wedding"></a>
                    </div>
		<div class="card" id="form">

                    <div class="card-header"> <h4 class="mb0">هل انت صاحب شركة؟</h4>
					<p>فقط سجل معنا لتتمتع بكل المميزات المطلوبه</p></div>
                    <div class="">
                        <form method="POST" action="{{ route('storevendor')}}" enctype="multipart/form-data">
                            @csrf
                            <!-- Form Name -->
                            <div class="venue-form-info card-body">
                                <div class="row">

                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="vendorname">اسم الشركه</label>
                                                            <input id="vendorname" name="name" type="text" placeholder="" class="form-control " autocomplete="new-password">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email">الايميل</label>
                                                            <input id="email" name="email" type="email" placeholder="" class="form-control " autocomplete="new-password">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone">الهاتف</label>
                                                            <input id="phone" name="phone" type="text" placeholder="" class="form-control " autocomplete="new-password">
                                                        </div>
                                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="address">العنوان </label>
                                            <input id="address" name="address" type="text" placeholder="العنوان" class="form-control" autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="address">كلمه المرور </label>
                                                <input id="address" name="password" type="password" placeholder="كلمه المرور" class="form-control " autocomplete="new-password">
                                            </div>
                                        </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">المدينة</label>
                                            <select class="wide" id="city" name="city" style="display: none;">
                                                <option value="Ahmedabad">جده</option>
                                                <option value="Baroda">رياض</option>
                                                <option value="Bharuch">دمام</option>
                                            </select><div class="nice-select wide" tabindex="0"><span class="current">المدينة</span><ul class="list"><li data-value="Ahmedabad" class="option selected">جده</li><li data-value="Baroda" class="option">الرياض</li><li data-value="Bharuch" class="option">مكه</li></ul></div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="state">اختار الدوله</label>
                                            <select class="wide" id="state" name="state" style="display: none;">
                                                <option value="Select State">اختر</option>
                                                <option value="Gujarat">السعوديه</option>
                                                <option value="Rajasthan">الكويت</option>
                                            </select><div class="nice-select wide" tabindex="0"><span class="current">اختر الدوله</span><ul class="list"><li data-value="Select State" class="option selected">اختر</li><li data-value="Gujarat" class="option">السعوديه</li><li data-value="Rajasthan" class="option">الكويت</li></ul></div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="dashboard-venue-gallery card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>اضف السجل التجاري</h3>

                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <!-- File Button -->
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">تحميل الملف</label>
                                            <input id="filebutton" name="ligal" class="btn btn-primary btn-block" type="file">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-default" type="submit">ارسال</button>
                                </div>
                        </form>
                    </div>
                </div>
                </div>
                </div>


@endsection
