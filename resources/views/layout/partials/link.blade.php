{{-- Bootstrap 5.3.1 --}}
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

{{-- Font Awesome 6 --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- Google Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

{{-- AOS --}}
<link href="{{ asset('vendor/aos/dist/aos.css') }}" rel="stylesheet">

{{-- Gallery Light Box --}}
<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

{{-- Swiper --}}
<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

{{-- Custom Styles --}}
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

{{-- Additional Styles --}}
@stack('link')
