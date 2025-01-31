<header>
    <div class="bd-header__section bd-header__transparent">
        <div class="bd-header__main" id="header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-6">
                        <div class="d-flex justify-content-end">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Beranda</a></li>
                                        <li><a href="{{ route('about') }}">Tentang</a></li>
                                        <li><a href="{{ route('portfolio') }}">Katalog</a></li>
                                        <li><a href="{{ route('gallery') }}">Galeri</a></li>
                                        <li><a href="{{ route('contact') }}">Kontak</a></li>
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