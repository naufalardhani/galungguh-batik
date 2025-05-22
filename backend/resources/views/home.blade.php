@extends('layouts.main')
@section('title', 'Homepage')
@section('content')

   <main>

      <!-- slider area start -->
      <div class="bd-slider__section">
        <div class="bd-slider__active bd-slider__wrapper swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide bd-slider__item bd-slider__height include-bg d-flex align-items-center"
               data-background="assets/img/slider/31.JPG">
               <div class="container">
                 <div class="row">
                   <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10">
                     <div class="bd-slider__content">
                        <h3 style="color: white;" class="bd-slider__title" data-animation="fadeInUp" data-delay=".5s">Lalungguh Ecoprint
                        </h3>
                        <p style="color: white;" data-animation="fadeInUp" data-delay=".7s">Kebahagiaan Sejati
                          Melalui Sentuhan Alami
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
                   <span class="bd-section__subtitle bd-section__subtitle-lg mb-10">Eco-Friendly Fashion That
                     Inspires</span>
                   <h3 class="bd-section__title bd-section__title-lg mb-25">Inovasi fashion
                     <br> dengan seni ecoprint
                   </h3>
                   <p class="mb-25">Lalungguh Ecoprint adalah sebuah usaha di bidang ekonomi kreatif yang menghasilkan
                     beragam produk berbasis ecoprint,
                     seperti kain, pakaian, sepatu, tas, dan cinderamata. Ecoprint merupakan teknik pewarnaan kain
                     menggunakan motif alami yang berasal
                     dari dedaunan, kulit kayu, dan pewarna organik lainnya. Selain menghadirkan produk fashion yang
                     unik dan bernilai seni tinggi,
                     Lalungguh Ecoprint juga mendukung ekonomi hijau serta memberdayakan masyarakat melalui kegiatan
                     sosial, edukasi,
                     dan upaya konservasi lingkungan.</p>
                   <div class="bd-section__btn-wrapper">
                     <a href="{{ route('about') }}" class="bd-btn">Tentang kami <span><i
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
                 @foreach($categories as $category)
                <button data-filter=".cat{{ $category->id }}">{{ $category->name }}</button>
             @endforeach
               </div>
            </div>
          </div>
          <div class="row grid">
            @foreach($posts->take(6) as $post)
            <div class="col-lg-4 col-md-6 grid-item cat{{ $post->category_id }}">
               <div class="bd-portfolio-2__wrapper mb-30">
                <div class="bd-portfolio-2__thumb  w-img">
                  <img src="/storage/{{ $post->image }}" alt='{{ $post->title }}'>
                </div>
                <div class="bd-portfolio-2__content">
                  <span><a href="/storage/{{ $post->image }}" class="popup-image"><i
                       class="fal fa-link"></i></a></span>
                </div>
                <div class="bd-team_3__info" style="margin-top: 30px; text-align: center;">
                  <h3 class="bd-team-3__name mb-5">{{ $post->title }}</h3>
                  <span>{!! $post->content !!}</span>
                </div>
               </div>
            </div>
         @endforeach
          </div>
          <!-- <div class="row">
               <div class="col-12">
                 <div class="bd-section__btn-wrapper text-center mt-30">
                   <a href="portfolio-2.html" class="link-btn-3">
                     Katalog Produk
                   </a>
                 </div>
               </div>
            </div> -->
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
                        <p>Kain Lalungguh benar-benar unik! Motifnya elegan dan kualitas kainnya terasa premium.
                          Cocok banget dipakai untuk acara formal maupun santai.</p>
                     </div>
                     <div class="bd-testimonial__reviewer d-flex align-items-center justify-content-center">
                     
                        <div class="bd-testimonial__revirwer-name">
                          <h3>Arini Putri</h3>
                          <span>Entrepreneur</span>
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
                        <p>Saya jatuh cinta dengan konsep eco-friendly dari Kain Lalungguh. Warnanya alami dan
                          desainnya benar-benar memancarkan keindahan budaya lokal.</p>
                     </div>
                     <div class="bd-testimonial__reviewer d-flex align-items-center justify-content-center">
                        <div class="bd-testimonial__revirwer-name">
                          <h3>Rizky Ananda</h3>
                          <span>Graphic Designer</span>
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
                        <p>Kualitas kainnya luar biasa, detail motif sangat rapi. Sudah beberapa kali order dari
                          Lalungguh, dan selalu puas dengan hasilnya!</p>
                     </div>
                     <div class="bd-testimonial__reviewer d-flex align-items-center justify-content-center">
                        <div class="bd-testimonial__revirwer-name">
                          <h3>Yulia Maharani</h3>
                          <span>Fashion Enthusiast</span>
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
                        <p>Kain Lalungguh menawarkan keindahan alami dalam setiap helai kainnya. Cocok untuk kamu
                          yang ingin tampil beda dengan kain yang ramah lingkungan.</p>
                     </div>
                     <div class="bd-testimonial__reviewer d-flex align-items-center justify-content-center">
                        <div class="bd-testimonial__revirwer-name">
                          <h3>Dimas Prakoso</h3>
                          <span>Content Creator</span>
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
                        <p>Pengalaman berbelanja di Lalungguh sangat menyenangkan. Pelayanan ramah, pengiriman cepat,
                          dan produk yang diterima sangat memuaskan!</p>
                     </div>
                     <div class="bd-testimonial__reviewer d-flex align-items-center justify-content-center">
                        <div class="bd-testimonial__revirwer-name">
                          <h3>Agnes Rahmawati</h3>
                          <span>Photographer</span>
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