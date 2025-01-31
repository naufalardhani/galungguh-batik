@extends('front.layouts.app')

@section('title', 'Beranda - Lalungguh Ecoprint')

@section('content')
    <!-- Slider Area -->
    <div class="bd-slider__section">
        <div class="bd-slider__active bd-slider__wrapper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide bd-slider__item bd-slider__height include-bg d-flex align-items-center"
                    data-background="{{ asset('assets/img/slider/slider-3.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10">
                                <div class="bd-slider__content">
                                    <h3 class="bd-slider__title" data-animation="fadeInUp" data-delay=".5s">Lalungguh Ecoprint</h3>
                                    <p data-animation="fadeInUp" data-delay=".7s">Kebahagiaan Sejati Melalui Sentuhan Alami</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="bd-about-2__section pt-120 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="bd-about-2__img w-img mb-30">
                                <img src="{{ asset('assets/img/about/about-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="bd-about-2__img w-img mb-30">
                                <img src="{{ asset('assets/img/about/about-3.jpg') }}" alt="">
                            </div>
                            <div class="bd-about-2__img w-img mb-30">
                                <img src="{{ asset('assets/img/about/about-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp">
                    <div class="bd-about-2__text ml-70 mb-30">
                        <div class="bd-section__title-wrapper">
                            <span class="bd-section__subtitle bd-section__subtitle-lg mb-10">Eco-Friendly Fashion That Inspires</span>
                            <h3 class="bd-section__title bd-section__title-lg mb-25">Inovasi fashion dengan seni ecoprint</h3>
                            <p class="mb-25">Lalungguh Ecoprint adalah sebuah usaha di bidang ekonomi kreatif yang menghasilkan beragam produk berbasis ecoprint, seperti kain, pakaian, sepatu, tas, dan cinderamata.</p>
                            <div class="bd-section__btn-wrapper">
                                <a href="{{ route('about') }}" class="bd-btn">Tentang kami <span><i class="fa-regular fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection