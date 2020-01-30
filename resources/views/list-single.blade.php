@extends('layouts.website')
@section('content')
<div class="list-single-carousel">
    <div class="owl-carousel owl-theme owl-second">
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-1.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-2.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-3.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-4.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-2.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-1.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-4.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-2.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-3.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-4.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-2.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('images/vendor-carousel-img-1.jpg')}}" alt="">
        </div>
    </div>
</div>
@if (count($service_translations)>0)
@foreach ($service_translations as $item_service_translations)


<div class="list-single-second">
    <div class="container">
        <div class="">

            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="vendor-head text-left">
                        <h2 class="mb10">{{ $item_service_translations->name}}</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="vendor-head text-xl-right">
                        <a href="#" class="btn-default-wishlist"><i class="fa fa-heart"></i> <span class="pl-1">اضافه
                                الي المفضله</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="vendor-meta bg-white border m-0 ">

            <div class="vendor-meta-item vendor-meta-item-bordered">
                <span class="rating-star">
                    <i class="fa fa-star rated"></i>
                    <i class="fa fa-star rated"></i>
                    <i class="fa fa-star rated"></i>
                    <i class="fa fa-star rated"></i>
                    <i class="fa fa-star rate-mute"></i>
                </span>
                <span class="rating-count vendor-text">(20)</span>
            </div>
        </div>
    </div>
</div>
<div class="vendor-content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                <!--vendor-details -->

                <div class="">
                    <div class="card border card-shadow-none">
                        <h3 class="card-header bg-white">تعرف علي تفاصيل الخدمه</h3>
                        <div class="card-body">
                            <!--/.vendor-details -->
                            <!--vendor-description -->
                            <p class="lead">
                                {!! $item_service_translations->body !!} </p>

                            <div class="venue-highlights">

                            </div>
                            <!-- /.venue-highlights -->
                        </div>
                    </div>
                    <!--vendor-description -->

                    <!-- /.aminities-block -->
                    <!-- review-block -->
                    <div id="reviews">
                        <div class="card border card-shadow-none ">
                            <div class="card-header bg-white">
                                <h3 class="mb0 d-inline-block">التقيمات</h3>
                                <a href="#" class="btn btn-default btn-sm float-right d-inline-block">اكتب التقيم</a>
                            </div>
                            <div class="card-body">
                                <div class="review-block">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <!-- review-sidebar -->
                                            <div class="review-sidebar">

                                                <div class="review-total">4.8 </div>
                                                <div class="review-text">تقيمات</div>
                                                <span class="rated"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa  fa-star"></i> <i class="fa fa-star"></i> </span>
                                                <p>4.4 average based on 1 ratings.</p>

                                            </div>
                                            <!-- /.review-sidebar -->
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <!-- review-list -->
                                            <div class="review-box">
                                                <div class="review-list">
                                                    <div class="review-for">الجوده</div>
                                                    <div class="review-rating"><span class="rated"><i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="far fa-star"></i> <i
                                                                class="far  fa-star"></i> </span></div>
                                                    <div class="review-number">3.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">التسهيلات</div>
                                                    <div class="review-rating"><span class="rated"><i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="far fa-star"></i> </span></div>
                                                    <div class="review-number">4.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">طاقم العمل</div>
                                                    <div class="review-rating"><span class="rated"><i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="far fa-star"></i> <i
                                                                class="far fa-star"></i> </span></div>
                                                    <div class="review-number">3.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">الراحه</div>
                                                    <div class="review-rating"><span class="rated"><i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="far fa-star"></i> <i
                                                                class="far fa-star"></i> </span></div>
                                                    <div class="review-number">3.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">السعر</div>
                                                    <div class="review-rating"><span class="rated"><i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="far fa-star"></i> </span></div>
                                                    <div class="review-number">4.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (count($comment)>0)
                    @foreach ($comment as $item_comment)
                    <div class="card border card-shadow-none ">
                        <!-- review-user -->
                        <div class="card-header bg-white mb0">
                            <div class="review-user">
                                <div class="user-img"> <img style="width: 78px; " width="50"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSyibYoOZrfO1NelurUMS0vsB73C1VPZ6w1OnDjV9lkK9BCWgyp"
                                        alt="star rating jquery" class="rounded-circle"></div>
                                <div class="user-meta">
                                    <h5 class="user-name mb-0">{{ $item_comment->Name}} <span
                                            class="user-review-date">{{ date("Y M d", strtotime($item_comment->created_at)) }}</span>
                                    </h5>
                                    <div class="given-review">
                                        <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="far  fa-star"></i> <i
                                                class="far  fa-star"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.review-user -->
                        <div class="card-body">
                            <!-- review-descripttions -->
                            <div class="review-descriptions">
                                <p>{{ $item_comment->comment}}
                                </p>
                            </div>
                            <!-- /.review-descripttions -->
                        </div>
                    </div>
                    @endforeach
                    @endif


                </div>
                <!-- /.review-content -->
                <!-- review-form -->
                <!-- /.review-block -->
                <div class="card border card-shadow-none leave-review">
                    <div class="card-header bg-white mb0">
                        <h3 class="mb0">التقيم</h3>
                    </div>
                    <div class="card-body">
                        <div class="review-rating-select">
                            <div class="mb10">
                                <span class="text-dark">الجوده</span>
                                <span id="rateYo1"></span>
                            </div>
                            <div class="mb10">
                                <span class="text-dark">التسهيلات</span>
                                <span id="rateYo2"></span>
                            </div>
                            <div class="mb10">
                                <span class="text-dark">طاقم العمل</span>
                                <span id="rateYo3"></span>
                            </div>
                            <div class="mb10">
                                <span class="text-dark">المرونه</span>
                                <span id="rateYo4"></span>
                            </div>
                            <div class="mb10">
                                <span class="text-dark">السعر</span>
                                <span id="rateYo5"></span>
                            </div>
                        </div>
                        @auth


                        <form action="{{ route('comment') }}" method="post">
                            @csrf
                            <div class="row">
                                <!-- Textarea -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt30">
                                    <div class="form-group">
                                        <label class="control-label" for="review">كتابه التقيم</label>
                                        <textarea class="form-control" id="review" name="comment" rows="5"
                                            placeholder="كتابه التقيم"></textarea>
                                        @if ($errors->has('comment'))
                                        <span class="helper-text" style="
                                        color: red;
                                        font-size: 12px;
                                    " data-error="wrong" data-success="right">{{ $errors->first('comment') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <button id="submit" name="submit" class="btn btn-default">ارسال</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endauth
                        @if(session()->has('alert-success'))
                        <div class="alert alert-success" style="
                        color: #ffffff;
                        background-color: #bf2052;
                        border-color: #bf2052;
                        text-align: center;
                        border-radius: 14px;
                    ">
                            {{ session()->get('alert-success') }}
                        </div>
                        @endif
                    </div>
                </div>
                <!-- /.review-form -->
                <!-- location -->

            </div>
            <!-- /.location -->
            <!-- list-sidebar -->
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                <div class="sidebar-venue">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3 class="mb20">طلب عرض سعر</h3>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="name1">الاسم</label>
                                            <input id="name1" name="name1" type="text" placeholder="الاسم"
                                                class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class=" control-label sr-only" for="email2">الايميل</label>
                                            <input id="email2" name="email2" type="text" placeholder="الايميل"
                                                class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class=" control-label sr-only" for="phone">الجوال</label>
                                            <input id="phone" name="phone" type="text" placeholder="الجوال"
                                                class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="weddingdate">موعد الزفاف</label>
                                            <input id="weddingdate" name="weddingdate" type="text"
                                                placeholder="موعد الزفاف" class="form-control input-md" required="">
                                            <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="comments">الرساله</label>
                                            <textarea class="form-control" id="comments" name="comments" rows="5"
                                                placeholder="الرساله"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default btn-block">ارسال</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- venue-admin -->
                    <div class="vendor-owner-profile mb30">
                        <div class="vendor-owner-profile-head">
                            <div class="vendor-owner-profile-img"><img src="images/vendor-cat-img-1.jpg" alt=""></div>
                            <h4 class="vendor-owner-name mb0">اسم الشركة</h4>
                        </div>
                        <div class="vendor-owner-profile-content">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="mr-2 text-default"><i
                                            class="fas fa-fw fa-map-marker-alt"></i></span>1847 السعوديه الرياض</li>
                                <li class="list-group-item"><span class="mr-2  text-default"><i
                                            class="fas fa-fw fa-phone"></i></span>(123) 123 4567</li>
                                <li class="list-group-item"><span class="mr-2 text-default"><i
                                            class="fas fa-fw fa-envelope"></i></span>www.yourdomain.com</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.venue-admin -->
                    <!-- social-media -->
                    <div class="mb30">
                        <h4 class="widget-title">Share this </h4>
                        <div class="social-icons">
                            <a href="#" class="icon-square-outline facebook-outline"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon-square-outline twitter-outline"><i class="fab fa-twitter"></i> </a>
                            <a href="#" class="icon-square-outline googleplus-outline"><i
                                    class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="icon-square-outline instagram-outline"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="icon-square-outline linkedin-outline"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="icon-square-outline pinterest-outline"><i
                                    class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    <!-- /.social-media -->
                </div>
            </div>
        </div>
        <!-- /.list-sidebar -->
    </div>
</div>
@endforeach
@endif
<!-- vendor-thumbnail section -->
{{--  <div class="space-small">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2>شركات مشابهه</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="vendor-thumbnail">
                    <!-- Vendor thumbnail -->
                    <div class="vendor-img zoomimg">
                        <!-- Vendor img -->
                        <a href="#"><img src="images/vendor-img-1.jpg" alt="" class="img-fluid"></a>
                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <!-- /.Vendor img -->
                    <div class="vendor-content">
                        <!-- Vendor Content -->
                        <h2 class="vendor-title"><a href="#" class="title">اسم القاعه</a></h2>
                        <p class="vendor-address">الرياض</p>
                    </div>
                    <div class="vendor-meta">

                        <div class="vendor-meta-item vendor-meta-item-bordered">
                            <span class="rating-star">
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rate-mute"></i>
                            </span>
                            <span class="rating-count vendor-text">(20)</span></div>
                    </div>
                    <!-- /.Vendor Content -->
                </div>
                <!-- /.Vendor thumbnail -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="vendor-thumbnail">
                    <!-- Vendor thumbnail -->
                    <div class="vendor-img zoomimg">
                        <!-- Vendor img -->
                        <a href="#"><img src="images/vendor-img-2.jpg" alt="" class="img-fluid"></a>
                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <!-- /.Vendor img -->
                    <div class="vendor-content">
                        <!-- Vendor Content -->
                        <h2 class="vendor-title"><a href="#" class="title">اسم القاعه</a></h2>
                        <p class="vendor-address">الرياض</p>
                    </div>
                    <div class="vendor-meta">

                        <div class="vendor-meta-item vendor-meta-item-bordered">
                            <span class="rating-star">
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rate-mute"></i>
                            </span>
                            <span class="rating-count vendor-text">(20)</span></div>
                    </div>
                </div>
                <!-- /.Vendor thumbnail -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="vendor-thumbnail">
                    <!-- Vendor thumbnail -->
                    <div class="vendor-img zoomimg">
                        <!-- Vendor img -->
                        <a href="#"><img src="images/vendor-img-3.jpg" alt="" class="img-fluid"></a>
                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <!-- /.Vendor img -->
                    <div class="vendor-content">
                        <!-- Vendor Content -->
                        <h2 class="vendor-title"><a href="#" class="title">اسم القاعه</a></h2>
                        <p class="vendor-address">الرياض</p>
                    </div>
                    <div class="vendor-meta">

                        <div class="vendor-meta-item vendor-meta-item-bordered">
                            <span class="rating-star">
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rate-mute"></i>
                            </span>
                            <span class="rating-count vendor-text">(20)</span></div>
                    </div>
                </div>
                <!-- /.Vendor thumbnail -->
            </div>
        </div>
    </div>
</div>  --}}
@endsection