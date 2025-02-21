<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Lalungguh Ecoprint - @yield('title')</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon1.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/backtotop.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->



   <!-- pre loader area start -->
   <div class="bd-preloader">
      <div class="bd-preloader__center">
         <span>
            <img src="assets/img/logo/logo.png" alt="">
         </span>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->

   <!-- header area start -->
   <header>
      <div class="bd-header__section bd-header__transparent">
         <div class="bd-header__main" id="header-sticky">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-2 col-md-6 col-6">
                     <div class="logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo.png" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-10 col-md-6 col-6">
                     <div class="d-flex justify-content-end">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li>
                                    <a href="{{ route('home') }}">Beranda</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('about') }}">Tentang</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('catalogue') }}">Katalog</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('gallery') }}">Galeri</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('contact') }}">Kontak</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <div class="bd-header__main-right d-flex justify-content-end align-items-center pl-30">

                           <div class="bd-header__search d-none d-md-block p-relative">
                              <div class="bd-header__search-wrapper">
                                 <button class="bd-header__search-btn-close"><i class="fal fa-times"></i></button>
                              </div>
                              <div class="bd-header__search-form">
                                 <form>
                                    <input type="text" placeholder="Search Here">
                                    <button><i class="fal fa-search"></i></button>
                                 </form>
                              </div>
                           </div>
                           <div class="bd-header__hamburger ml-50">
                              <button type="button" class="hamburger-btn offcanvas-open-btn">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->

   <!-- offcanvas area start -->
   <div class="offcanvas__area">
      <div class="offcanvas__wrapper">
         <div class="offcanvas__content">
            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
               <div class="offcanvas__logo logo">
                  <a href="index.html">
                     <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <div class="offcanvas__close">
                  <button class="offcanvas__close-btn offcanvas-close-btn">
                     <i class="fal fa-times"></i>
                  </button>
               </div>
            </div>
            <div class="mobile-menu fix mb-40"></div>

            <div class="offcanvas__map d-none d-lg-block mb-15">
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4141.27924736071!2d108.51777084637887!3d-6.819904486951024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f19df1ba056b9%3A0xdadff2c552ec1d9c!2sEcoprint%20Lalungguh!5e0!3m2!1sen!2sid!4v1737782729774!5m2!1sen!2sid"></iframe>
            </div>

            <div class="offcanvas__contact mt-30 mb-20">
               <h4>Info Kontak</h4>
               <ul>
                  <li class="d-flex align-items-center">
                     <div class="offcanvas__contact-icon mr-15">
                        <i class="fal fa-map-marker-alt"></i>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a target="_blank"
                           href="https://www.google.com/maps/place/Ecoprint+Lalungguh/@-6.8199045,108.5177708,16.94z/data=!4m6!3m5!1s0x2e6f19df1ba056b9:0xdadff2c552ec1d9c!8m2!3d-6.8197752!4d108.5199869!16s%2Fg%2F11vq9s32sk?hl=en&entry=ttu&g_ep=EgoyMDI1MDEyMi4wIKXMDSoASAFQAw%3D%3D">
                           Perumahan Palwi Cipinang Indah Blok B No. 22-23, Desa Cipinang, Cirebon.</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <div class="offcanvas__contact-icon mr-15">
                        <i class="far fa-phone"></i>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="https://wa.me/+628128911385">08128911385</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <div class="offcanvas__contact-icon mr-15">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="mailto:nedyaradit@gmail.com">nedyaradit@gmail.com</a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="offcanvas__social">
               <ul>
                  <li><a href="https://instagram.com/lalungguh_ecoprint"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://wa.me/+628128911385"><i class="fab fa-whatsapp"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>

   @yield('content')

   <footer>
      <div class="bd-footer__section theme-bg-2 pt-120">
         <div class="container">
            <div class="bd-footer__main pb-50">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="bd-footer-widget footer-col-1">
                        <div class="bd-footer-widget__title">
                           <a href="index.html">
                              <img src="assets/img/logo/logo.png" alt="">
                           </a>
                        </div>
                        <div class="bd-footer-widget__content">
                           <p>
                              Lalungguh Ecoprint adalah usaha kreatif berbasis ecoprint terintegrasi yang mendukung green economy dan pemberdayaan masyarakat sekitar.
                           </p>
                           <div class="bd-footer-widget__social">
                              <span><a href="https://www.instagram.com/lalungguh_ecoprint"><i class="fab fa-instagram"></i></a></span>
                              <span><a href="https://wa.me/628128911385"><i class="fab fa-whatsapp"></i></a></span>
                              <span><a href="https://maps.app.goo.gl/hXNakG8viLrNnwmu5"><i class="fas fa-map-marker-alt"></i></a></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="bd-footer-widget footer-col-2">
                        <h3 class="bd-footer-widget__title">
                           Tautan Cepat
                        </h3>
                        <div class="bd-footer-widget__content">
                           <div class="bd-footer-widget__menu">
                              <ul>
                                 <li><a href="index.html">Beranda</a></li>
                                 <li><a href="about.html">Tentang</a></li>
                                 <li><a href="portfolio.html">Katalog</a></li>
                                 <li><a href="gallery.html">Galeri</a></li>
                                 <li><a href="contact.html">Kontak</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="bd-footer-widget footer-col-3">
                        <h3 class="bd-footer-widget__title">
                           Produk Populer
                        </h3>
                        <div class="bd-footer-widget__content">
                           <div class="bd-footer-widget__blog d-flex align-items-center mb-30">
                              <div class="bd-footer-widget__blog-thum mr-30">
                                 <img src="assets/img/footer/footer-blog-1.jpg" alt="thub">
                              </div>
                              <div class="bd-footer-widget__blog-content">
                                 <h3 class="bd-footer-widget__blog-title"><a href="portfolio.html"> Outer Ecoprint</a></h3>
                                 <span>Lihat Selengkapnya</span>
                              </div>
                           </div>
                           <div class="bd-footer-widget__blog d-flex align-items-center mb-30">
                              <div class="bd-footer-widget__blog-thum  mr-30">
                                 <img src="assets/img/footer/footer-blog-2.jpg" alt="thub">
                              </div>
                              <div class="bd-footer-widget__blog-content">
                                 <h3 class="bd-footer-widget__blog-title"><a href="portfolio.html">Setelan Ecoprint</a></h3>
                                 <span>Lihat Selengkapnya</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bd-footer__copyright bd-border-top pt-40 pb-40">
               <span>All Rights Reserved © 2024 Lalungguh </span>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer area end -->


   <!-- JS here -->
   <script src="assets/js/vendor/jquery.js"></script>
   <script src="assets/js/vendor/waypoints.js"></script>
   <script src="assets/js/bootstrap-bundle.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/backtotop.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>