@extends('layouts.main')
@section('title', 'Gallery')
@section('content')
<main>

<!-- breadcrumb area start -->
<div class="breadcrumb__section include-bg" data-background="assets/img/slider/35.jpg">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
           <div class="breadcrumb__content d-md-flex justify-content-between align-items-center">
               <h3 style="color: white;" class="breadcrumb__title">Galeri</h3>
               <div  class="breadcrumb__list">
                  <span><a style="color: white;" href="{{ route('home') }}">Beranda</a></span>
                  <span style="color: white;" class="dvdr">/</span>
                  <span style="color: white;">galeri</span>
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
      <div class="row grid">
         <div class="col-lg-4 col-md-6 grid-item cat2 cat3">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture8.png" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture8.png" class="popup-image"><i
                           class="fal fa-link"></i></a></span>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 grid-item cat2 cat3">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture10.png" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture10.png" class="popup-image"><i
                           class="fal fa-link"></i></a></span>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 grid-item cat1 cat4">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture11.png" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture11.png" class="popup-image"><i
                           class="fal fa-link"></i></a></span>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 grid-item cat3 cat2">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture9.png" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture9.png" class="popup-image"><i
                           class="fal fa-link"></i></a></span>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 grid-item cat4 cat1">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture13.png" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture13.png" class="popup-image"><i
                           class="fal fa-link"></i></a></span>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 grid-item cat3 cat4">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture5.jpg" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture5.jpg" class="popup-image"><i
                           class="fal fa-link"></i></a></span>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 grid-item cat1 cat2">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture6.jpg" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture6.jpg" class="popup-image"><i
                           class="fal fa-link"></i></a></span>
               </div>
            </div>
         </div>
         <div class="col-lg-8 col-md-6 grid-item cat2 cat3">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture7.png" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture7.png" class="popup-image"><i
                           class="fal fa-link"></i></a></span>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 grid-item cat4 cat1">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture11.png" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture11.png" class="popup-image"><i
                           class="fal fa-link"></i></a></span>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 grid-item cat3 cat1">
            <div class="bd-portfolio-2__wrapper mb-30">
               <div class="bd-portfolio-2__thumb  w-img">
                  <img src="assets/img/portfolio/Picture12.png" alt='img'>
               </div>
               <div class="bd-portfolio-2__content">
                  <span><a href="assets/img/portfolio/Picture12.png" class="popup-image"><i
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