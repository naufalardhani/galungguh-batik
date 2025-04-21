@extends('layouts.main')
@section('title', 'Contact')
@section('content')

<main>

      <!-- breadcrumb area start -->
      <div class="breadcrumb__section include-bg" data-background="assets/img/slider/slider4.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                 <div class="breadcrumb__content d-md-flex justify-content-between align-items-center">
                     <h3 class="breadcrumb__title">Contact</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">Beranda</a></span>
                        <span class="dvdr">/</span>
                        <span>Kontak</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->


      <div class="bd-contact__section pt-120 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="postbox__comment-form mb-30">
                     <h3 class="postbox__comment-form-title">Tinggalkan Pesan</h3>
                     <form action="mailto:luthfidika31@gmail.com" method="post" enctype="text/plain">
                        <div class="row">
                           <div class="col-xxl-6 col-xl-6 col-lg-6">
                              <div class="postbox__comment-input">
                                 <input type="text" name="name" placeholder="Nama" required>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6">
                              <div class="postbox__comment-input">
                                 <input type="email" name="email" placeholder="Email" required>
                              </div>
                           </div>
                           <div class="col-xxl-12">
                              <div class="postbox__comment-input">
                                 <input type="text" name="subject" placeholder="Judul" required>
                              </div>
                           </div>
                           <div class="col-xxl-12">
                              <div class="postbox__comment-input">
                                 <textarea name="message" placeholder="Tulis Pesan Anda ..." required></textarea>
                              </div>
                           </div>
                           <div class="col-xxl-12">
                              <div class="postbox__comment-btn">
                                 <button type="submit" class="bd-btn">Kirim</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="pt-inner-sidebar theme-bg mb-30">
                     <div class="tp-pt__inmner-step mb-30">
                        <h4>Alamat</h4>
                        <span>Perumahan Palwi Cipinang Indah Blok B No. 22-23, Desa Cipinang, Cirebon.</span>
                     </div>
                     <div class="tp-pt__inmner-step mb-30">
                        <h4>Telepon / WhatsApp</h4>
                        <span>08128911385</span>
                     </div>
                     <div class="tp-pt__inmner-step mb-30">
                        <h4>Email </h4>
                        <span>nedyaradit@gmail.com</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="bd-contact__map">
         <div class="container-fluid p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4141.27924736071!2d108.51777084637887!3d-6.819904486951024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f19df1ba056b9%3A0xdadff2c552ec1d9c!2sEcoprint%20Lalungguh!5e0!3m2!1sen!2sid!4v1737782729774!5m2!1sen!2sid" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>

   </main>
@endsection