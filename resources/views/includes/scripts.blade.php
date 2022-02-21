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