@extends('layouts.main')
@section('title', 'Catalogue')
@section('content')
<main>
      <!-- breadcrumb area start -->
      <div class="breadcrumb__section include-bg" data-background="assets/img/breadcrumb/slider4.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                 <div class="breadcrumb__content d-md-flex justify-content-between align-items-center">
                     <h3 class="breadcrumb__title">Katalog</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">Beranda</a></span>
                        <span class="dvdr">/</span>
                        <span>Katalog</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- project start  -->
      <div class="bd-portfolio-2__section pt-120 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 wow fadeInUp">
                  <div class="bd-portfolio-2__menu mb-40 text-center wow bdfadeUp" data-wow-delay=".4s">
                     <button class="active" data-filter="*">Semua</button>
                     @foreach($categories as $category)
                        <button data-filter=".cat{{ $category->id }}">{{ $category->name }}</button>
                     @endforeach
                  </div>
               </div>
            </div>
            <div class="row grid">
               @foreach($posts as $post)
                  <div class="col-lg-4 col-md-6 grid-item cat{{ $post->category_id }}">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="/storage/{{ $post->image }}" alt='{{ $post->title }}'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="/storage/{{ $post->image }}" class="popup-image"><i class="fal fa-link"></i></a></span>
                     </div>
                     <div class="bd-team_3__info" style="margin-top: 30px; text-align: center;">
                        <h3 class="bd-team-3__name mb-5">{{ $post->title }}</h3>
                        <span>{!! $post->content !!}</span>
                    </div> 
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- project end  -->
      <!-- cta area start  -->
      <div class="bd-cta__section primary-bg pt-60 pb-30 wow fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="bd-cta__info mb-30">
                     <h3 class="bd-cta__title text-white">Ingin memesan produk kami?</h3>
                     <span>Dapatkan Motif Eksklusif yang Anda Inginkan</span>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="bd-section__btn-wrapper text-lg-end">
                     <a href="https://wa.me/628128911385" class="bd-border-btn">
                        Hubungi Kami
                        <i class="fas fa-angle-right"></i>
                        <i class="fas fa-angle-right"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- cta area end  -->

   </main>

   @endsection