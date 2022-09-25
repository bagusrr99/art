 
@extends('layouts.main')

 @section('container')
 <!-- Categories Section Begin -->
 <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('template/img/art/ilustrasi/1.jpg')}}">
                            <h5><a href="#">Seni Ilustrasi</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('template/img/art/kriya/kriya01.jpg')}}">
                            <h5><a href="#">Seni Kriya</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('template/img/art/lukis/lukis01.jpg')}}">
                            <h5><a href="#">Seni Lukis</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('template/img/art/musik/1.jpg')}}">
                            <h5><a href="#">Seni Musik</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('template/img/art/patung/c.jpg')}}">
                            <h5><a href="#">Seni Patung</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('template/img/art/rupa/2.jpg')}}">
                            <h5><a href="#">Seni Rupa</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('template/img/art/tari/tari01.jpg')}}">
                            <h5><a href="#">Seni Tari</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('template/img/art/teater/teater03.jpg')}}">
                            <h5><a href="#">Seni Teater</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <br>
    
    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('template/img/banner/banner-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('template/img/banner/banner-2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    @endsection