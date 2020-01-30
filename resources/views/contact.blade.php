@extends('layouts.website')

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title"> @lang('site.contact')</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">@lang('site.home')</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">@lang('site.contact')  </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <!-- contact-form -->
    <div class="content">
        <div class="container">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <form action="" method="post">
                        <!-- form -->
                        <div class="contact-form">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                    <!-- Text input-->
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="fname"></label>
                                        <input id="fname" type="text" name="fname" placeholder="الاسم الاول" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="lname"></label>
                                        <input id="lname" type="text" name="lname" placeholder="الاسم الاخير" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="email"></label>
                                        <input id="email" type="email" name="email" placeholder="الايميل" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="phone"></label>
                                        <input id="phone" type="text" name="phone" placeholder="الهاتف" class="form-control" required>
                                    </div>
                                </div>
                                <!-- select -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group">
                                        <select class="wide mb20" name="selectvendor">
                                            <option value="Vendor Purpose">اصحاب الشركات</option>
                                            <option value="Couple">المقبلين علي الزواج</option>
                                            <option value="Pricing">الاسعار</option>
                                            <option value="Vendor">استفسارات عامة</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="message"></label>
                                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="الرسالة"></textarea>
                                    </div>
                                </div>
                                <!--button -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button type="submit" name="singlebutton" class="btn btn-default">ارسال</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.form -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.contact-form -->
    <!-- contact-map -->
    <div id="map"></div>
    <!-- /.contact-map -->
    <!-- contact-block-section -->
    <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <!-- contact-block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="contact-block">
                        <div class="contact-icon"><i class="far fa-user-circle"></i></div>
                        <div class="contact-content">
                            <h3>الدعم الفني</h3>
                            <p>تواصل معنا 24 ساعه.</p>
                            <p><strong>الهاتف:</strong><span class="text-default"> +800-123-4567</span>
                                <br> <strong>الايميل:</strong><span class="text-default"> info@realwed.com</span></p>
                        </div>
                    </div>
                </div>
                <!-- /.contact-block -->
                <!-- contact-block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="contact-block">
                        <div class="contact-icon"><i class="fa fa-map-marker-alt"></i></div>
                        <div class="contact-content">
                            <h3>العنوان</h3>
                            <p>السعوديه - جده </p>

                        </div>
                    </div>
                </div>
                <!-- /.contact-block -->
                <!-- contact-block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="contact-block">
                        <div class="contact-icon"><i class="far fa-envelope"></i></div>
                        <div class="contact-content">
                            <h3>تواصل معنا</h3>
                            <p>يسعدنا تواصلك معنا لاي استفسارات.</p>
                            <p><strong>الايميل:</strong> <span class="text-default">info@realwed.com</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.contact-block -->
            </div>
        </div>
    </div>
    <!-- /.contact-block-section -->
    <!-- social-media-section -->

@endsection
