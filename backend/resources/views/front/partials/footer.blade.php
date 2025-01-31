<footer>
    <div class="bd-footer__section theme-bg-2 pt-120">
        <div class="container">
            <div class="bd-footer__main pb-50">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bd-footer-widget footer-col-1">
                            <div class="bd-footer-widget__title">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
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
                            <h3 class="bd-footer-widget__title">Tautan Cepat</h3>
                            <div class="bd-footer-widget__content">
                                <div class="bd-footer-widget__menu">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Beranda</a></li>
                                        <li><a href="{{ route('about') }}">Tentang</a></li>
                                        <li><a href="{{ route('portfolio') }}">Katalog</a></li>
                                        <li><a href="{{ route('gallery') }}">Galeri</a></li>
                                        <li><a href="{{ route('contact') }}">Kontak</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bd-footer-widget footer-col-3">
                            <h3 class="bd-footer-widget__title">Produk Populer</h3>
                            <div class="bd-footer-widget__content">
                                <div class="bd-footer-widget__blog d-flex align-items-center mb-30">
                                    <div class="bd-footer-widget__blog-thum mr-30">
                                        <img src="{{ asset('assets/img/footer/footer-blog-1.jpg') }}" alt="thub">
                                    </div>
                                    <div class="bd-footer-widget__blog-content">
                                        <h3 class="bd-footer-widget__blog-title"><a href="{{ route('portfolio') }}"> Outer Ecoprint</a></h3>
                                        <span>Lihat Selengkapnya</span>
                                    </div>
                                </div>
                                <div class="bd-footer-widget__blog d-flex align-items-center mb-30">
                                    <div class="bd-footer-widget__blog-thum  mr-30">
                                        <img src="{{ asset('assets/img/footer/footer-blog-2.jpg') }}" alt="thub">
                                    </div>
                                    <div class="bd-footer-widget__blog-content">
                                        <h3 class="bd-footer-widget__blog-title"><a href="{{ route('portfolio') }}">Setelan Ecoprint</a></h3>
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