@extends('layouts.website')

@section('content')
<!-- hero-section -->
<div class="hero-section-fourth" style="background: url({{ asset('images/' . $slider->avatar) }}) no-repeat center;">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- search-block -->
                <div class="text-center">
                    <div class="search-head">
                        <h1 class="search-head-title text-white">{{ $slider->name  }}</h1>
                        <p class="d-none d-xl-block d-lg-block d-sm-block text-white lead">{!! $slider->body !!}</p>
                        <a href="" class="btn btn-default btn-lg mt20">@lang('site.are_you_em')</a>
                        <a href="" class="btn btn-default btn-lg mt20"> @lang('site.are_you_m')</a>
                    </div>
                    <!-- /.search-block -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-medium pb-0">
    <div class="container">
        <div class="row">
            <!--  about-details  -->
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 mb60">
                <div class="about-descriptions text-center">
                    <div class="circle-icon rounded-circle bg-default mb30">
                        <i class="icon-051-balloons"></i>
                    </div>
                    <h2> @lang('site.about')</h2>
                    {!! $about->body !!}
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt20">
                        <a href="{{ route('about')}}" class="btn btn-primary btn-lg"> @lang('site.view_more')</a></div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.hero-section -->

<div class="space-medium bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="section-title text-center">
                    <div class="section-top-icon shape-icon-1 mb20">
                        <i class="icon-051-love-birds"></i>
                    </div>
                    <h2 class="mb10"> @lang('site.company_services')</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($scategories as $category)

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="vendor-categories-block zoomimg">
                    <div class="vendor-categories-img"> <a href="{{ route('organisation.show', $category->id)}}">
                            <img src="{{ asset('images/' . $category->avatar ) }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="vendor-categories-overlay">
                        <div class="vendor-categories-text">
                            <h4 class="mb0">
                                <a href="{{ route('organisation.show', $category->id)}}"
                                    class="vendor-categories-title"> {{ $category->name  }}</a></h4>
                            <p class="vendor-categories-numbers">{{ $category->service->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <!-- venue-categoris-btn -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt20"><a
                    href="{{ route('organisation.index') }}" class="btn btn-primary btn-lg"> @lang('site.view_more')</a>
            </div>
        </div>
        <!-- /.venue-categoris-btn -->
    </div>
</div>

<div class="process-section">
    <div class="container">
        <div class="row">
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center">
                    <!-- section title start-->
                    <h2 class="mb10 text-white"> @lang('site.how_to_join')</h2>
                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="row" style="direction:rtl;">
            <!-- feature-1 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center text-white">
                <div class="feature">
                    <div
                        class="feature-icon icon-circle circle-xxl circle-transparent bg-transparent text-default mr-auto ml-auto ">
                        <i class="icon-013-calendar fa-3x"></i>
                        <div class="process-number">
                            <div
                                class="feature-icon icon-circle circle-sm circle-transparent bg-trasnperent text-default p-0">
                                1
                            </div>
                        </div>
                    </div>
                    <div class="feature-content mt30">
                        {!! $about->how1 !!}
                    </div>
                </div>
            </div>
            <!-- feature-1 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center text-white">
                <div class="feature">
                    <div
                        class="feature-icon icon-circle circle-xxl circle-transparent bg-transparent text-default mr-auto ml-auto ">
                        <i class="icon-026-letter fa-3x"></i>
                        <div class="process-number">
                            <div
                                class="feature-icon icon-circle circle-sm circle-transparent bg-transparent text-default p-0">
                                2
                            </div>
                        </div>
                    </div>
                    <div class="feature-content mt30">
                        {!! $about->how2 !!}
                    </div>
                </div>
            </div>
            <!-- feature-1 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center text-white">
                <div class="feature">
                    <div
                        class="feature-icon icon-circle circle-xxl circle-transparent bg-transparent text-default mr-auto ml-auto ">
                        <i class="icon-046-crown fa-3x"></i>
                        <div class="process-number">
                            <div
                                class="feature-icon icon-circle circle-sm circle-transparent bg-transparent text-default p-0">
                                3
                            </div>
                        </div>
                    </div>
                    <div class="feature-content mt30">
                        {!! $about->how3 !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- real-wedding-section-->
<div class="space-medium ">
    <div class="container">
        <div class="row">
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center">
                    <div class="section-top-icon shape-icon-1 mb20">
                        <i class="icon-051-love-birds"></i>
                    </div>
                    <!-- section title start-->
                    <h2 class="mb10">@lang('site.real_wedding')</h2>
                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="row">

            @foreach ($reals as $real)

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="real-wedding-block">
                    <div class="real-wedding-img zoomimg">
                        <a href="{{ route('getwedding', $real->id)}}">
                            <img src="{{ asset('images/' . $real->avatar ) }}" alt="bouquet wedding" class="img-fluid"
                                style="max-height: 435px;"></a>
                    </div>
                    <div class="real-wedding-content ">
                        <h3 class="real-wedding-title"><a href="r{{ route('getwedding', $real->id)}}" class="title">
                                {{ $real->name  }}</a></h3>
                        <div class="real-wedding-meta"><span
                                class="real-wedding-date">{{ date("Y M d", strtotime($real->created_at) ) }}</span>
                            <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>
                                {{ $real->wcategory->name  }} </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="space-medium bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center">
                    <!-- section title start-->
                    <h2 class="mb10"> @lang('site.planning_tools') </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                <div class="vendor-feature-block feature-block">
                    <div class="feature-icon">
                        <a href="#"><i class="icon-021-love-1"></i></a>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title"><a href=""> @lang('site.to_do')</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                <div class="vendor-feature-block feature-block">
                    <div class="feature-icon">
                        <a href=""> <i class="icon-051-love-letter"></i></a>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title"><a href=""> @lang('site.guest_list')</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                <div class="vendor-feature-block feature-block">
                    <div class="feature-icon">
                        <a href=""> <i class="icon-051-dinner"></i></a>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title"><a href=""> @lang('site.wedding_planing')</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                <div class="vendor-feature-block feature-block">
                    <div class="feature-icon">
                        <a href=""> <i class="icon-051-wedding-arch"></i></a>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title"><a href=""> @lang('site.choose_o')</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                <div class="vendor-feature-block feature-block">
                    <div class="feature-icon">
                        <a href=""> <i class="icon-calculator-1"></i></a>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title"><a href="">@lang('site.budget')</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                <div class="vendor-feature-block feature-block">
                    <div class="feature-icon">
                        <a href=""> <i class="icon-013-calendar"></i></a>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title"><a href="">@lang('site.invitation') </a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt40">
                <a href="{{ route('getqou')}}" class="btn btn-default btn-lg mb20"> @lang('site.request_qu') </a>
                <p> <a href="{{ route('register')}}" class="text-gray"> @lang('site.register')</a></p>
            </div>
        </div>
    </div>
</div>

{{-- <div class="cta-second">
<div class="container">
   <div class="row">
      <div class="offset-xl-3 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
         <div class="cta-second-content">
            <h2 class="text-white">للمشاركه وكسب الجوائز</h2>
            <p>
يتم توزيع جوائز بشكل يومي بشرط التسجيل من على الموقع وأن تكون الفائزة مقبلة على الزواج.
تقوم مشهورة من مشاهير المجتمع بالحضور يوميا وتسليم الجائزة بنفسها للفائزة .
عرض موسيقي حي صباحي ومساءي ( كمان – ساكس – عود )
</p>
            <a href="#" class="btn btn-default btn-lg mb30">سجل لتكون من الفائزين</a>
            <p>هل لديك حساب بالفعل ؟<a href="c class="text-white">سجل الان</a></p>
         </div>
      </div>

   </div>
</div>
</div> --}}

{{--
<div class="space-medium bg-white">
   <div class="container-fluid">
      <div class="row">
         <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-title text-center">
               <!-- section title start-->
               <div class="section-top-icon shape-icon-1 mb20">
                  <i class="icon-021-love-1"></i>
               </div>
               <h2 class="mb10">أبرز المشاركين</h2>
               <p>هذا النص هو نص غير حقيقي ويمكن تغيره بالنص الحقيقي للخصائص المطلوبة هذا النص هو نص غير حقيقي ويمكن تغيره بالنص الحقيقي للخصائص المطلوبة</p>
            </div>
            <!-- /.section title start-->
         </div>
      </div>
      <div class="venue-thumbnail-carousel">
         <div class="owl-carousel owl-theme owl-venue-thumb">
            <div class="item">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="vendor-thumbnail">
                     <!-- Vendor thumbnail -->
                     <div class="vendor-img zoomimg">
                        <!-- Vendor img -->
                        <a href=""><img src="images/vendor-img-1.jpg" alt=""  class="img-fluid"></a>
                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                     </div>
                     <div class="listing-badge ">
                        <div class="badge badge-warning">المميزات</div>
                     </div>
                     <div class="listing-categories">
                        <div class="realwed-categories"><a href="">المناسبة</a></div>
                     </div>
                     <!-- /.Vendor img -->
                     <div class="vendor-content">
                        <!-- Vendor Content -->
                        <h2 class="vendor-title"><a href="" class="title">أسم المناسبة</a></h2>
                        <p class="vendor-address"><span class="vendor-address-icon"><i class="fa fa-map-marker-alt"></i> </span>اسم المشارك</p>
                     </div>
                     <!-- /.Vendor Content -->
                     <div class="vendor-meta">
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                           <span class="vendor-price">
                           $150
                           </span>
                           <span class="vendor-text">تبدأ من</span>
                        </div>
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                           <span class="vendor-guest">
                           120+
                           </span>
                           <span class="vendor-text">ضيف</span>
                        </div>
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
                  <!-- /.Vendor thumbnail -->
               </div>
            </div>
            <div class="item">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="vendor-thumbnail">
                     <!-- Vendor thumbnail -->
                     <div class="vendor-img zoomimg">
                        <!-- Vendor img -->
                        <a href=""><img src="images/vendor-img-2.jpg" alt="" class="img-fluid"></a>
                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                     </div>
                     <div class="listing-categories">
                        <div class="realwed-categories"><a href>المناسبة</a></div>
                     </div>
                     <!-- /.Vendor img -->
                     <div class="vendor-content">
                        <!-- Vendor Content -->
                        <h2 class="vendor-title"><a href="" class="title">أسم المناسبة</a></h2>
                        <p class="vendor-address"><span class="vendor-address-icon"><i class="fa fa-map-marker-alt"></i> </span> اسم المشارك.</p>
                     </div>
                     <!-- /.Vendor Content -->
                     <div class="vendor-meta">
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                           <span class="vendor-price">
                           $150
                           </span>
                           <span class="vendor-text">تبدأ من</span>
                        </div>
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                           <span class="vendor-guest">
                           120+
                           </span>
                           <span class="vendor-text">ضيف</span>
                        </div>
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
                  <!-- /.Vendor thumbnail -->
               </div>
            </div>
            <div class="item">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="vendor-thumbnail">
                     <!-- Vendor thumbnail -->
                     <div class="vendor-img zoomimg">
                        <!-- Vendor img -->
                        <a href=""><img src="images/vendor-img-3.jpg" alt="" class="img-fluid"></a>
                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                     </div>
                     <div class="listing-categories">
                        <div class="realwed-categories"><a href="list-single.html">المناسبة</a></div>
                     </div>
                     <!-- /.Vendor img -->
                     <div class="vendor-content">
                        <!-- Vendor Content -->
                        <h2 class="vendor-title"><a href="blog-single.html" class="title">أسم المناسبة</a></h2>
                        <p class="vendor-address"><span class="vendor-address-icon"><i class="fa fa-map-marker-alt"></i> </span>اسم المشارك.</p>
                     </div>
                     <!-- /.Vendor Content -->
                     <div class="vendor-meta">
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                           <span class="vendor-price">
                           $150
                           </span>
                           <span class="vendor-text">تبدأ من</span>
                        </div>
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                           <span class="vendor-guest">
                           120+
                           </span>
                           <span class="vendor-text">ضيف</span>
                        </div>
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
                  <!-- /.Vendor thumbnail -->
               </div>
            </div>
            <div class="item">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="vendor-thumbnail">
                     <!-- Vendor thumbnail -->
                     <div class="vendor-img zoomimg">
                        <!-- Vendor img -->
                        <a href="list-single.html"><img src="images/vendor-img-2.jpg" alt="" class="img-fluid"></a>
                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                     </div>
                     <div class="listing-categories">
                        <div class="realwed-categories"><a href="list-single.html">المناسبة</a></div>
                     </div>
                     <!-- /.Vendor img -->
                     <div class="vendor-content">
                        <!-- Vendor Content -->
                        <h2 class="vendor-title"><a href="blog-single.html" class="title">أسم المناسبة</a></h2>
                        <p class="vendor-address"><span class="vendor-address-icon"><i class="fa fa-map-marker-alt"></i> </span> اسم المشارك</p>
                     </div>
                     <!-- /.Vendor Content -->
                     <div class="vendor-meta">
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                           <span class="vendor-price">
                           $150
                           </span>
                           <span class="vendor-text">تبدأ من</span>
                        </div>
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                           <span class="vendor-guest">
                           120+
                           </span>
                           <span class="vendor-text">ضيف</span>
                        </div>
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
                  <!-- /.Vendor thumbnail -->
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
               <a href="supplier-list.html" class="btn btn-default btn-lg">لمعرفه المزيد</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /.venue-categoris-section-->
<div class="dzsparallaxer auto-init out-of-bootstrap" data-options='{ direction: "normal"}' style="height: 553px;">
   <div class="divimage dzsparallaxer--target" style="width: 100%; height: 900px; background-image: url(images/parallax-img-1.jpg)">
   </div>
   <div class="parallax-section">
      <div class="container">
         <div class="row">
            <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
               <h1 class="text-white mb20">اذا كن صاحب شركه <span> فشارك معنا الأن</span></h1>
               <p class="lead text-white">هذا النص هو نص غير حقيقي ويمكن تغيره بالنص الحقيقي للخصائص المطلوبة هذا النص هو نص غير حقيقي ويمكن تغيره بالنص الحقيقي للخصائص المطلوبة.</p>
               <a href="vendor-form.html" class="btn btn-default btn-lg mt20">أضف خدماتك</a>
            </div>
         </div>
      </div>
   </div>
</div> --}}





<div class="space-small">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center">
                    <h2 class="mb10">@lang('site.partners')</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($partners as $partner)

            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="venue-categories-block zoomimg">
                    <div class="venue-categories-img"> <a href="list-single.html">
                            <img src="{{ asset('images/'. $partner->avatar ) }}" alt="" class="img-fluid"></a>
                        <div class="venue-categories-overlay"></div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt60">
                <a href="suppliers.html" class="btn btn-default btn-lg">@lang('site.view_more')</a></div>
        </div>
    </div>
</div>
<!-- /.venue-categoris-section-->
<div class="space-medium bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center">
                    <!-- section title start-->
                    <div class="section-top-icon shape-icon-1 mb20">
                        <i class="icon-051-love-birds"></i>
                    </div>
                    <h2 class="mb10"> @lang('site.top_tips') </h2>
                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="row">

            @foreach($advices as $advice)

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="post-block-simple text-center">
                    <div class="post-img mb30 zoomimg">
                        <a href="">
                            <img src="{{ asset('images/' . $advice->avatar ) }}" alt="" class="img-fluid"></a>
                    </div>
                    <h4><a href="" class="title"> {{ $advice->name }} </a></h4>
                </div>
            </div>

            @endforeach

        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 text-center mt30">
                <a href="#" class="btn btn-outline-dark btn-lg"> @lang('site.view_more')</a>
            </div>
        </div>
    </div>
</div>



@endsection