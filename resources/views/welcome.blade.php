@extends('layouts.app')

@section('title', 'Megah Karya Percetakan')

@section('content')
    <header>
        <div class="dekstop-header d-none d-md-block" style="background-image: url(frontend/images/hero_image.jpg);">
            <div class="container">
                <div class="row ms-5">
                    <div class="col-md-6 left-column">
                        <h3>Selamat Datang di Website</h3>
                        <h1>UD. Megah Karya</h1>
                        <p class="mb-4">Produsen Map Ijazah dan Atribut Sekolah</p>
                        <a href="#megah-karya" class="btn btn-get-started rounded-pill px-4 shadow">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mobile-header d-block d-md-none"
            style="background-image: url(frontend/images/hero_image_mobile.jpg);">
            <div class="row ms-2">
                <div class="col-md-6 left-column">
                    <h3>Selamat Datang di Website</h3>
                    <h1>UD. Megah Karya</h1>
                    <p class="mb-4">Produsen Map Ijazah dan Atribut Sekolah</p>
                    <a href="#megah-karya" class="btn btn-get-started rounded-pill px-4 shadow">Get Started</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- START : SECTION PELAYANAN -->
        <section class="pelayanan-heading mt-5 overflow-hidden" id="megah-karya">
            <div class="container">
                <div class="row">
                    <div class="col text-center" data-aos="zoom-in">
                        <h2>Pelayanan Kami</h2>
                        <p>Best Service Best Quality</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pelayanan my-3 overflow-hidden">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-11 col-md-4 mt-3" data-aos="zoom-in">
                        <div class="card shadow card-service">
                            <img src="{{ asset('frontend/images/icon_map.svg')}}" alt="Icon Map Raport Ijazah"
                                class="card-img-top mx-auto" style="height: 150px;">
                            <div class="card-body text-center">
                                <h4 class="card-title mb-3">Map Raport / Ijazah</h4>
                                <p class="card-text mb-4">Kami melayani pembuatan Map Raport / Ijazah di Surabaya,
                                    Sidoarjo,
                                    Gresik sampai ke seluruh Indonesia.
                                    <br> Dapatkan Harga dan kualitas Terbaik</p>
                                <a href="#" class="btn btn-card-service mb-4">Info Lengkap</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 mt-3" data-aos="zoom-in">
                        <div class="card shadow card-service">
                            <img src="{{ asset('frontend/images/icon_seragam.svg')}}" alt="Icon Perlengkapan Sekolah"
                                class="card-img-top mx-auto" style="height: 150px;">
                            <div class="card-body text-center">
                                <h4 class="card-title mb-3">Perlengkapan Sekolah</h4>
                                <p class="card-text mb-4">Melayani pembuatan perlengkapan atribut sekolah seperti
                                    Seragam (Olahraga, Sekolah, Batik) Kaos Kaki, Topi, Dasi, Bad Lokasi,
                                    Sabuk dan Kalung Wisuda.</p>
                                <a href="#" class="btn btn-card-service mb-4">Info Lengkap</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 mt-3" data-aos="zoom-in">
                        <div class="card shadow card-service">
                            <img src="{{ asset('frontend/images/icon_sablon.svg')}}" alt="Icon Sablon Digital"
                                class="card-img-top mx-auto" style="height: 150px;">
                            <div class="card-body text-center">
                                <h4 class="card-title mb-3">Sablon Kaos Digital</h4>
                                <p class="card-text mb-4">Melayani segala macam jenis Sablon Kaos Digital, seperti DTG,
                                    Sublime, Print Table, dll. Melayani ecer maupun partai dengan harga dan kualitas
                                    Terbaik.</p>
                                <a href="#" class="btn btn-card-service mb-4">Info Lengkap</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END : SECTION PELAYANAN -->

        <!-- START : SECTION ABOUT -->
        <section class="section-about overflow-hidden" style="background-color: #e0efde;">
            <div class="section-about-heading mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col text-center about-heading mt-5" data-aos="zoom-in">
                            <h2>UD MEGAH KARYA</h2>
                            <p>Produsen Map Ijazah, Atribut Sekolah dan Sablon Digital</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-about-content mt-3 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pb-4 px-4 about-content-left" style="background-color: #1282a2;">
                            <h4 class="text-center my-3" data-aos="fade-down">Profil Kami</h4>
                            <p data-aos="zoom-in"> &emsp; UD Megah Karya adalah sebuah perusahaan yang bergerak di
                                bidang
                                percetakan, khususnya
                                bergerak di bidang pembuatan Map Raport / Ijazah, Atribut Perlengkapan Sekolah dan
                                Sablon Kaos Digital. Berdiri sejak tahun 2015 di Sidoarjo - Jawa Timur, kami telah
                                melayani berbagai customer di
                                seluruh wilayah Indonesia. Kami bertekad untuk bisa selalu memberikan yang Pelayanan dan
                                Hasil Yang Terbaik untuk setiap customer kami.</p>
                            <a href="profil.html"
                                class="a-read-more text-decoration-none fst-italic text-end d-block">Baca
                                Selengkapnya...</a>
                        </div>
                        <div class="col-md-6 about-content-right pb-3" style="background-color: #3c91e6;">
                            <h4 class="text-center my-3" data-aos="fade-down">Video Profil UD Megah Karya</h4>
                            <div class="ratio ratio-16x9 w-100" data-aos="fade-up">
                                <iframe src="https://www.youtube.com/embed/4aRrRAI9Q_8?modestbranding=1&rel=0" title="UD Megah Karya Percetakan adalah produsen map ijazah, atribut sekolah dan
                                    sablon digital" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                                    picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END : SECTION ABOUT -->

        <!-- START : SECTION OUR PRODUCT -->
        <section class="section-product pb-4 overflow-hidden">
            <div class="product-heading">
                <div class="container">
                    <div class="row">
                        <div class="col text-center mt-5" data-aos="zoom-in">
                            <h2>Produk UD MEGAH KARYA</h2>
                            <p>Dapatkan Harga Terbaik khusus minggu ini</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-content">
                <div class="container">
                    <div class="owl-carousel owl-theme" data-aos="zoom-in">
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-body">
                                    <h5 class="card-title">Map Raport / Ijazah</h5>
                                    <p>Harga mulai Rp. 10.000,- untuk info lebih lanjut silahkan hubungi admin kami</p>
                                    <a href="#" class="btn btn-card-product mb-2">Info Lengkap</a>
                                </div>
                                <img data-src="{{ asset('frontend/images/map.jpg')}}" class="card-img-bottom owl-lazy">
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-body">
                                    <h5 class="card-title">Seragam Olahraga</h5>
                                    <p>Harga mulai Rp. 10.000,- untuk info lebih lanjut silahkan hubungi admin kami</p>
                                    <a href="#" class="btn btn-card-product mb-2">Info Lengkap</a>
                                </div>
                                <img data-src="{{ asset('frontend/images/map.jpg')}}" class="card-img-bottom owl-lazy">
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-body">
                                    <h5 class="card-title">Seragam Batik</h5>
                                    <p>Harga mulai Rp. 10.000,- untuk info lebih lanjut silahkan hubungi admin kami</p>
                                    <a href="#" class="btn btn-card-product mb-2">Info Lengkap</a>
                                </div>
                                <img data-src="{{ asset('frontend/images/map.jpg')}}" class="card-img-bottom owl-lazy">
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-body">
                                    <h5 class="card-title">Seragam Sekolah</h5>
                                    <p>Harga mulai Rp. 10.000,- untuk info lebih lanjut silahkan hubungi admin kami</p>
                                    <a href="#" class="btn btn-card-product mb-2">Info Lengkap</a>
                                </div>
                                <img data-src="{{ asset('frontend/images/map.jpg')}}" class="card-img-bottom owl-lazy">
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-body">
                                    <h5 class="card-title">Kaos Kaki</h5>
                                    <p>Harga mulai Rp. 10.000,- untuk info lebih lanjut silahkan hubungi admin kami</p>
                                    <a href="#" class="btn btn-card-product mb-2">Info Lengkap</a>
                                </div>
                                <img data-src="{{ asset('frontend/images/map.jpg')}}" class="card-img-bottom owl-lazy">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END : SECTION OUR PRODUCT -->

    </main>
@endsection