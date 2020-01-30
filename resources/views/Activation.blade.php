@extends('layouts.website')
@push('css')
<style>
        body#dummybodyid {
            background: white;
        } 
        img.img-responsive {
            margin-right: 20%;
        }
</style>
@endpush
@section('content')
<div class="container">
    <img src="https://www.tehrantaahod.com/wp-content/uploads/2019/03/mail_success.gif" width="150" class="img-responsive">
    <h1 style="text-align: center;">تم تسجيل اشتراكك بنجاح في انتظار الموافقة من قبل الادارة </h1>
</div>
@endsection