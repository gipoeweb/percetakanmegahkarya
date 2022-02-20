<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto+Slab:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/libraries/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('frontend/libraries/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/libraries/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/libraries/OwlCarousel/owl.theme.default.min.css')}}">

    <!-- Animate AOS CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/libraries/aos/aos.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/styles/main.css')}}">

    <title>Megah Karya Percetakan</title>
</head>

<body>
    <!-- Navbar Dekstop-->
    <div class="container d-none d-lg-block">
        <nav class="navbar navbar-dekstop navbar-expand-lg navbar-dark navbar-light p-0">
            <div class="container-fluid">
                <a class="navbar-brand ms-3" href="#">Megah Karya</a>
                <button class="navbar-toggler navbar-dark me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-custom px-3 py-2" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                        <li class="nav-item me-3">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" aria-current="page" href="map_ijazah.html">Map Ijazah</a>
                        </li>
                        <li class="nav-item me-3 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Perlengkapan Sekolah
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Seragam Sekolah</a></li>
                                <li><a class="dropdown-item" href="#">Seragam Batik</a></li>
                                <li><a class="dropdown-item" href="#">Seragam Olahraga</a></li>
                                <li><a class="dropdown-item" href="#">Topi</a></li>
                                <li><a class="dropdown-item" href="#">Dasi</a></li>
                                <li><a class="dropdown-item" href="#">Bad Lokasi</a></li>
                                <li><a class="dropdown-item" href="#">Sabuk</a></li>
                                <li><a class="dropdown-item" href="#">Kaos Kaki</a></li>
                                <li><a class="dropdown-item" href="#">Kalung wisuda</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Sablon Digital</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="profil.html">Profil</a>
                        </li>
                    </ul>
                    <form>
                        <button class="btn btn-login rounded px-4 me-3" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

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

    <footer>
        <section class="footer-copyright overflow-hidden">
            <div class="container">
                <div class="row bid-content-pic px-4 py-5">
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4" data-aos='fade-down'>
                        <h4>CONTACT INFO</h4>
                        <div class="divider"></div>
                        <p class="mb-0"><strong>UD Megah Karya</strong></p>
                        <a href="tel:+6282231344325" class="btn btn-sc">
                            <img src="{{ asset('frontend/images/ic_phone.png')}}" width="20">
                            <span>&nbsp; <strong>: 0822 3134 4325</strong></span>
                        </a>
                        <br>
                        <a href="https://wa.me/6282231344325" class="btn btn-sc">
                            <img src="{{ asset('frontend/images/ic_whatsapp.png')}}" width="24">
                            <span>&nbsp; <strong>: 0822 3134 4325</strong></span>
                        </a>
                        <br>
                        <a href="mailto:percetakanmegahkarya@gmail.com?subject=Mohon%20Info%20Harga%20...."
                            class="btn btn-sc d-block text-start">
                            <img src="{{ asset('frontend/images/ic_gmail.png')}}" width="24">
                            <span>&nbsp; : percetakanmegahkarya@gmail.com</span>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4" data-aos='fade-down'>
                        <h4>UD Megah Karya</h4>
                        <div class="divider"></div>
                        <p> Percetakan
                            <br> Buduran, Gedangan, Sidoarjo
                            <br> Jawa Timur 61252
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5" data-aos='fade-down'>
                        <h4>Follow Us at Social Media</h4>
                        <div class="divider"></div>
                        <a href="https://facebook.com/1079954872093513" target="_blank"
                            class="btn btn-sc d-block text-start">
                            <img src="{{ asset('frontend/images/fb.png')}}" width="24">
                            <span>&nbsp; Percetakan Map Raport/Ijazah</span>
                        </a>
                        <br>
                        <a href="https://facebook.com/percetakan.m.karya" target="_blank"
                            class="btn btn-sc d-block text-start">
                            <img src="{{ asset('frontend/images/fb.png')}}" width="24">
                            <span>&nbsp; Map Raport Megah Karya</span>
                        </a>
                        <br>
                        <a href="https://instagram.com/mapraportijazahmk_percetakan" target="_blank"
                            class="btn btn-sc d-block text-start">
                            <img src="{{ asset('frontend/images/ig.png')}}" width="24">
                            <span>&nbsp; mapraportijazahmk_percetakan</span>
                        </a>
                        <br>
                        <a href="https://www.youtube.com/channel/UCn-Esauu7EueDE-M89D3CAw" target="_blank"
                            class="btn btn-sc d-block text-start">
                            <img src="{{ asset('frontend/images/yt.png')}}" width="24">
                            <span>&nbsp; Megah Karya Percetakan</span>
                        </a>
                    </div>
                </div>

                <!-- mobile -->
                <div class="fixed-bottom mobile-footer d-xs-block d-lg-none">
                    <div class="row call-container p-0 mx-0">
                        <nav class="navbar navbar-bottom navbar-expand navbar-light bg-light">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav nav-justified w-100 align-items-center">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">
                                            <img src="{{ asset('frontend/images/home_icon.svg')}}"
                                                alt="Icon Home Percetakan Megah Karya Map Raport"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="map_ijazah.html">
                                            <img src="{{ asset('frontend/images/map_iconnav.svg')}}" alt="Icon Map Raport Ijazah"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link icon-wa" href="https://wa.me/6282231344325">
                                            <img src="{{ asset('frontend/images/wa_icon.svg')}}" alt="Icon WA Percetak Map Raport">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <img src="{{ asset('frontend/images/seragam_iconnav.svg')}}"
                                                alt="Icon Seragam Megah Karya">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <img src="{{ asset('frontend/images/sablon_iconnav.svg')}}" alt="Icon Sablon Digital">
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="row copyright border-top justify-content-center align-items-content-center pt-1 pb-1">
                        <div class="col text-end">
                            Created by <span><a href="http://bit.ly/gipoeweb"
                                    class="gipoemedia text-decoration-none">GiPoe Media</a></span>
                        </div>
                        <div class="col text-start border-start">
                            Jasa Pembuatan Website
                        </div>
                    </div>
                </div>

            </div>
            <!-- dekstop -->
            <div class="d-none d-sm-block">
                <div class="container-fluid">
                    <div
                        class="row copyright-dekstop border-top justify-content-center align-items-content-center pt-3 pb-2">
                        <div class="col text-end">
                            Created by <span><a href="http://bit.ly/gipoeweb"
                                    class="gipoemedia text-decoration-none">GiPoe Media</a></span>
                        </div>
                        <div class="col text-start border-start">
                            Jasa Pembuatan Website
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="{{ asset('frontend/libraries/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ asset('frontend/libraries/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/libraries/OwlCarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/libraries/mousewheel/jquery.mousewheel.min.js')}}"></script>
    <script src="{{ asset('frontend/libraries/aos/aos.js')}}"></script>
    <script>
        // Carousel Testimonial
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            autoplayHoverPause: true,
            lazyLoad: true,
            margin: 5,
            stagePadding: 5,
            responsive: {
                0: {
                    items: 1,
                    loop: true,
                    dots: false
                },
                485: {
                    items: 2,
                    loop: true,
                    nav: true,
                    dots: true
                },
                720: {
                    items: 3,
                    loop: true,
                    nav: true,
                    dots: true
                },
                960: {
                    items: 4,
                    loop: true,
                    nav: true,
                    dots: true
                },
                1200: {
                    items: 4,
                    loop: true,
                    nav: true,
                    dots: true
                }
            }
        });

        $('.owl-carousel').on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY > 0) {
                $('.owl-carousel').trigger('next.owl');
            } else {
                $('.owl-carousel').trigger('prev.owl');
            }
            e.preventDefault();
        });

        // Animasi AOS
        AOS.init({
            easing: 'ease-out-back',
            duration: 2000
        });
    </script>
</body>

</html>