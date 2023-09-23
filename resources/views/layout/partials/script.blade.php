{{-- Bootstrap 5.3.1 --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{-- Jquery --}}
<script src="<?= asset('vendor/jquery/jquery.min.js') ?>"></script>

{{-- AOS --}}
<script src="{{ asset('vendor/aos/dist/aos.js') }}"></script>

{{-- Gallery Light Box --}}
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>

{{-- Swiper --}}
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

{{-- Custom Scripts --}}
<script src="{{ asset('js/script.js') }}"></script>
<script>
    AOS.init({
        duration: 700,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
        disable: 'mobile'
    })
</script>

{{-- Additional Scripts --}}
@stack('script')
