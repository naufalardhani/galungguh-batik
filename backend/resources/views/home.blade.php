@extends('layouts.main')
@section('title', 'Homepage')
@section('content')

   <main>

      <!-- slider area start -->
      <div class="bd-slider__section">
         <div class="bd-slider__active bd-slider__wrapper swiper-container">
            <div class="swiper-wrapper">
               <div class="swiper-slide bd-slider__item bd-slider__height include-bg d-flex align-items-center"
                  data-background="assets/img/slider/slider2.jpg">
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10">
                           <div class="bd-slider__content">
                              <h3 class="bd-slider__title" data-animation="fadeInUp" data-delay=".5s">Lalungguh Ecoprint</h3>
                              <p  style="color: white;" data-animation="fadeInUp" data-delay=".7s">Kebahagiaan Sejati Melalui Sentuhan Alami
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- slider area end -->

      <!-- about us section start  -->
      <div class="bd-about-2__section pt-120 pb-90 ">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 wow fadeInUp">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="bd-about-2__img w-img mb-30">
                           <img src="assets/img/about/11-min.png" alt="">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="bd-about-2__img w-img mb-30">
                           <img src="assets/img/about/40-min.png" alt="">
                        </div>
                        <div class="bd-about-2__img w-img mb-30">
                           <img src="assets/img/about/36-min.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 wow fadeInUp">
                  <div class="bd-about-2__text ml-70 mb-30">
                     <div class="bd-section__title-wrapper">
                        <span class="bd-section__subtitle bd-section__subtitle-lg mb-10">Eco-Friendly Fashion That Inspires</span>
                        <h3 class="bd-section__title bd-section__title-lg mb-25">Inovasi fashion
                           <br> dengan seni ecoprint</h3>
                        <p class="mb-25">Lalungguh Ecoprint adalah sebuah usaha di bidang ekonomi kreatif yang menghasilkan beragam produk berbasis ecoprint, 
                           seperti kain, pakaian, sepatu, tas, dan cinderamata. Ecoprint merupakan teknik pewarnaan kain menggunakan motif alami yang berasal 
                           dari dedaunan, kulit kayu, dan pewarna organik lainnya. Selain menghadirkan produk fashion yang unik dan bernilai seni tinggi, 
                           Lalungguh Ecoprint juga mendukung ekonomi hijau serta memberdayakan masyarakat melalui kegiatan sosial, edukasi, 
                           dan upaya konservasi lingkungan.</p>
                        <div class="bd-section__btn-wrapper">
                           <a href="about.html" class="bd-btn">Tentang kami <span><i
                                    class="fa-regular fa-angle-right"></i></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about us section end   -->


      <!-- project start  -->
      <div class="bd-portfolio-2__section pt-120 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="bd-section__title-wrapper text-center mb-90 wow fadeInUp">
                     <span class="bd-section__subtitle mb-5">Galeri</span>
                     <h3 class="bd-section__title bd-title-border">Produk kami</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12 wow fadeInUp">
                  <div class="bd-portfolio-2__menu mb-40 text-center wow bdfadeUp" data-wow-delay=".4s">
                     <button class="active" data-filter="*">Semua</button>
                     <button data-filter=".cat1">Kain</button>
                     <button data-filter=".cat2">Pakaian</button>
                     <button data-filter=".cat3">Cinderamata</button>
                     <button data-filter=".cat4">Sepatu & Tas</button>

                  </div>
               </div>
            </div>
            <div class="row grid">
               <div class="col-xl-8 col-lg-4 col-md-6 grid-item cat2 cat3 cat4">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb w-img">
                        <img src="assets/img/portfolio/1-min.png" alt="">
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/1-min.png" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat2 cat3">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/36-min.png" alt="">
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/36-min.png" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat1 cat4">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/3-min.png" alt="">
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/3-min.png" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat3 cat2">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/20-min.png" alt="">
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/20-min.png" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat4 cat1">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/40-min.png" alt="">
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/40-min.png" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat3 cat4">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/30-min.png" alt="">
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/30-min.png" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>f
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat1 cat2">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/44-min.png" alt="">
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/44-min.png" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 grid-item cat4 cat1">
                  <div class="bd-portfolio-2__wrapper mb-30">
                     <div class="bd-portfolio-2__thumb  w-img">
                        <img src="assets/img/portfolio/33-min.png" alt="">
                     </div>
                     <div class="bd-portfolio-2__content">
                        <span><a href="assets/img/portfolio/33-min.png" class="popup-image"><i
                                 class="fal fa-link"></i></a></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="bd-section__btn-wrapper text-center mt-30">
                     <a href="portfolio-2.html" class="link-btn-3">
                        Katalog Produk
                     </a>
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

      <!-- bd testimonial start  -->
      <div class="bd-testimonial__area theme-bg pt-120 pb-120 ">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="bd-section__title-wrapper text-center mb-90 wow fadeInUp">
                     <span class="bd-section__subtitle mb-5">Testimoni</span>
                     <h3 class="bd-section__title bd-title-border">Apa Yang Mereka Katakan</h3>
                  </div>
               </div>
            </div>
            <div class="p-relative">
               <div class="swiper-container bd-testimonial-1">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="bd-testimonial__item wow fadeInLeft">
                           <div class="bd-testimonial__icon">
                              <span><i class="fa-thin fa-quote-right"></i></span>
                           </div>
                           <div class="bd-testimonial__review">
                              <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eius mod tempor
                                 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                 exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                           </div>
                           <div class="bd-testimonial__reviewer d-flex align-items-center justify-content-center">
                              <div class="bd-testimonial__revirwer-avata">
                                 <img src="assets/img/testimonial/avata-1.jpg" alt="">
                              </div>
                              <div class="bd-testimonial__revirwer-name">
                                 <h3>Hason Raza</h3>
                                 <span>Musician</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="bd-testimonial__item wow fadeInLeft">
                           <div class="bd-testimonial__icon">
                              <span><i class="fa-thin fa-quote-right"></i></span>
                           </div>
                           <div class="bd-testimonial__review">
                              <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eius mod tempor
                                 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                 exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                           </div>
                           <div class="bd-testimonial__reviewer d-flex align-items-center justify-content-center">
                              <div class="bd-testimonial__revirwer-avata">
                                 <img src="assets/img/testimonial/avata-2.jpg" alt="">
                              </div>
                              <div class="bd-testimonial__revirwer-name">
                                 <h3>Mahmud Khan</h3>
                                 <span>Musician</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="bd-testimonial__item wow fadeInRight">
                           <div class="bd-testimonial__icon">
                              <span><i class="fa-thin fa-quote-right"></i></span>
                           </div>
                           <div class="bd-testimonial__review">
                              <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eius mod tempor
                                 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                 exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                           </div>
                           <div class="bd-testimonial__reviewer d-flex align-items-center justify-content-center">
                              <div class="bd-testimonial__revirwer-avata">
                                 <img src="assets/img/testimonial/avata-3.jpg" alt="">
                              </div>
                              <div class="bd-testimonial__revirwer-name">
                                 <h3>Jecob Oram</h3>
                                 <span>Musician</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="bd-testimonial__nav mt-50">
                  <div class="container-fluid">
                     <div class="bd-testimonial__nav-wrapper d-flex justify-content-center">
                        <div class="testimonial-slider-button-prev">
                           <span><i class="fa-thin fa-angle-left"></i></span>
                        </div>
                        <div class="testimonial-slider-button-next">
                           <span><i class="fa-thin fa-angle-right"></i></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- bd testimonial end  -->


   </main>

   <!-- footer area start -->
   @endsection