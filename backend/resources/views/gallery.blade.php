@extends('layouts.main')
@section('title', 'Gallery')
@section('content')
<main>

      <!-- breadcrumb area start -->
      <div class="breadcrumb__section include-bg" data-background="assets/img/breadcrumb/slider5.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                 <div class="breadcrumb__content d-md-flex justify-content-between align-items-center">
                     <h3 class="breadcrumb__title">Galeri</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">Beranda</a></span>
                        <span class="dvdr">/</span>
                        <span>galeri</span>
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
                     <button class="active" data-filter="*">Semua </button>
                     <button data-filter=".cat1">Kain</button>
                     <button data-filter=".cat2">Pakaian</button>
                     <button data-filter=".cat3">Cinderamata</button>
                     <button data-filter=".cat4">BSepatu dan tas</button>
                  </div>
               </div>
            </div>
            <div class="row grid">
               <div class="col-lg-4 col-md-6 grid-item cat2 cat3">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.1.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.1.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat2 cat3">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.2.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.2.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat1 cat4">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.3.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.3.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat3 cat2">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.4.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.4.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat4 cat1">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.6.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.6.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat3 cat4">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.5.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.5.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat1 cat2">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.7.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.7.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-md-6 grid-item cat2 cat3">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.8.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.8.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat4 cat1">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.9.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.9.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat3 cat1">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.10.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.10.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat2 cat1">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/pt-3.11.jpg" alt='img'>
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/pt-3.11.jpg" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
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