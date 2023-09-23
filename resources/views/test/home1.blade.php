<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Title --}}
    <title>{{ Str::title(Str::replace('_', ' ', config('app.name'))) }}</title>

    {{-- Logo --}}
    {{-- <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon"> --}}

    {{-- Start Styles --}}
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
    {{-- End Styles --}}
</head>
<body>
    {{-- Start Header --}}
    <header id="header">
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top py-3" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    {{ Str::title(Str::replace('_', ' ', config('app.name'))) }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ms-3">
                            <a class="nav-link fs-14 active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link fs-14" href="#">About Us</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link fs-14" href="#">Our Team</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link fs-14" href="#">Our Services</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link fs-14 pe-0" href="#">News & Article</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{-- End Header --}}
    {{-- Start Hero --}}
    <section id="hero" class="d-flex align-items-center">
        <div class="container mt-4 pt-3">
            <div class="row align-items-center" data-aos="zoom-in" data-aos-duration="650">
                <div class="col-6">
                    <h1 class="fs-55 text-white">Championing Your Rights, One Case at a Time</h1>
                    <p class="text-white-50">Dedicated legal advocates tailoring solutions to your unique needs. We absolutely provide you with our best services. Making your life easier and less stressful.</p>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/law-img-1.png') }}" alt="law sculpture" class="img-fluid float-end rounded rounded-5 shadow-lg">
                </div>
            </div>
        </div>
    </section>
    {{-- End Hero --}}
    {{-- Start Content --}}
    <main>
        <section id="about" class="d-flex align-items-center" data-aos="fade-up" data-aos-duration="650">
            <div class="container py-5 my-3">
                <div class="row align-items-center">
                    <div id="about-title" class="col-12 text-center">
                        <h1 class="fs-45 mt-0 mb-5 text-special-navy">About Us</h1>
                    </div>
                    <div class="col-12">
                        <p class="text-center">JOHN LAW FIRM is a law firm office in Jakarta, established to answer dynamic problems thoroughly taking place amid purposed escalation, which requires legal protection and interaction either between an individual and another individual, between an individual and a law entity, or between law entity and another law entity that becomes sophisticated. By having vast insights, experiences, and comprehensive understandings of law against a plethora of cases, JOHN LAW FIRM could provide a solutive solution, ensure client's law protection, and avoid any risks as far as possible that might happen in the future because given law services are not merely for short-term impact, but also for long-term impact.</p>
                    </div>
                    <div class="col-12 text-center">
                        <img src="{{ asset('img/logo.jpg') }}" alt="logo" class="img-fluid w-50 py-4 my-3">
                    </div>
                    <div class="col-12 text-center">
                        <img src="{{ asset('img/peradi.jpeg') }}" alt="peradi" class="img-fluid w-25 pt-4 mt-3 pb-3">
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="d-flex align-items-center" data-aos="zoom-in" data-aos-duration="650">
            <div class="container py-5 my-3">
                <div class="row">
                    <div id="services-title" class="col-12 text-center">
                        <h1 class="fs-45 mt-0 mb-5 text-white">Our Services</h1>
                    </div>
                    <div class="col-12">
                        <div class="row g-2 justify-content-center">
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Bankruptcy, Liquidation & Restructuring</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Civil Law</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Criminal Law</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Family Law</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Intellectual Property</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Administrative Law</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Employment Law</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Arbitration</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Competition Law</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Human Rights</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Constitutional Law</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Tax Law</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">International Law</p>
                            </div>
                            <div class="col-4 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">Capital Market Law</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="" class="btn btn-gold rounded mt-4 px-5 py-2 fw-medium">See Detail >></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="galleries" class="galleries d-flex align-items-center">
            <div class="container py-5 my-3">
                <div class="row g-2">
                    <div id="galleries-title" class="col-12 text-center">
                        <h1 class="fs-45 mt-0 mb-5 text-special-navy">Our Gallery</h1>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ asset('img/gallery/gallery-1.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="{{ asset('img/gallery/gallery-2.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="{{ asset('img/gallery/gallery-3.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="{{ asset('img/gallery/gallery-4.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                            <a href="{{ asset('img/gallery/gallery-5.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                            <a href="{{ asset('img/gallery/gallery-6.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="" class="btn btn-special-navy rounded mt-4 px-5 py-2 fw-normal">See More >></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="articles" class="d-flex align-items-center">
            <div class="container py-5 my-3">
                <div class="row g-3">
                    <div id="articles-title" class="col-12 text-center">
                        <h1 class="fs-45 mt-0 mb-5 text-white">News & Article</h1>
                    </div>
                    <div class="col-4">
                        <a href="test" class="text-decoration-none articles-content">
                            <div class="card bg-none border border-0 h-100">
                                <div class="card-image">
                                    <img src="{{ asset('img/article/article_2.jpg') }}" class="card-img-top rounded" alt="blank">
                                </div>
                                <div class="card-body px-0">
                                    <h3 class="card-title fs-20 fw-normal">Human Rights and Its Type</h3>
                                    <p class="card-text fs-12 mt-2 text-light fw-lighter">28 August 2023</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="test" class="text-decoration-none articles-content">
                            <div class="card bg-none border border-0 h-100">
                                <div class="card-image">
                                    <img src="{{ asset('img/article/article_1.jpg') }}" class="card-img-top rounded" alt="blank">
                                </div>
                                <div class="card-body px-0">
                                    <h3 class="card-title fs-20 fw-normal">International Law According to Experts</h3>
                                    <p class="card-text fs-12 mt-2 text-light fw-lighter">30 August 2023</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="test" class="text-decoration-none articles-content">
                            <div class="card bg-none border border-0 h-100">
                                <div class="card-image">
                                    <img src="{{ asset('img/article/article_3.jpg') }}" class="card-img-top rounded" alt="blank">
                                </div>
                                <div class="card-body px-0">
                                    <h3 class="card-title fs-20 fw-normal">The Type of Law in Indonesia</h3>
                                    <p class="card-text fs-12 mt-2 text-light fw-lighter">31 August 2023</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 text-center">
                        <a href="" class="btn btn-gold rounded mt-3 px-5 py-2 fw-medium">See More >></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- End Content --}}
    {{-- Start Footer --}}
    <footer>
        <div class="footer-top">
            <div class="container py-5 my-3">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="footer-info">
                            <img src="{{ asset('img/logo.jpg') }}" alt="logo" class="img-fluid w-50 mb-4">
                            <p class="fs-14 mb-4 text-secondary">
                                Kasablanka Road, South Jakarta, Jakarta, 14230
                            </p>
                            <p class="fs-14 mb-2 text-secondary-emphasis">
                                <strong><i class="fa-solid fa-phone w-special-32 fs-16"></i></strong> +62 21 1234 5678
                            </p>
                            <p class="fs-14 mb-2 text-secondary-emphasis">
                                <strong><i class="fa-brands fa-whatsapp w-special-32 fs-16"></i></strong> +62 21 1234 5678
                            </p>
                            <p class="fs-14 mb-2 text-secondary-emphasis">
                                <strong><i class="fa-solid fa-envelope w-special-32 fs-16"></i></strong> johnlawfirm@example.com
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul class="list-group">
                            <li class="list-group-item border border-0 p-1"><i class="fa-solid fa-chevron-right me-2 fs-12"></i> <a class="text-decoration-none fs-14 useful-link" href="#">Home</a></li>
                            <li class="list-group-item border border-0 p-1"><i class="fa-solid fa-chevron-right me-2 fs-12"></i> <a class="text-decoration-none fs-14 useful-link" href="#">About Us</a></li>
                            <li class="list-group-item border border-0 p-1"><i class="fa-solid fa-chevron-right me-2 fs-12"></i> <a class="text-decoration-none fs-14 useful-link" href="#">Our Team</a></li>
                            <li class="list-group-item border border-0 p-1"><i class="fa-solid fa-chevron-right me-2 fs-12"></i> <a class="text-decoration-none fs-14 useful-link" href="#">Our Services</a></li>
                            <li class="list-group-item border border-0 p-1"><i class="fa-solid fa-chevron-right me-2 fs-12"></i> <a class="text-decoration-none fs-14 useful-link" href="#">News & Article</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-3 footer-links">
                        <h4>Terms & Policies</h4>
                        <ul class="list-group">
                            <li class="list-group-item border border-0 p-1"><i class="fa-solid fa-chevron-right me-2 fs-12"></i> <a class="text-decoration-none fs-14 useful-link" href="#">Terms of Service</a></li>
                            <li class="list-group-item border border-0 p-1"><i class="fa-solid fa-chevron-right me-2 fs-12"></i> <a class="text-decoration-none fs-14 useful-link" href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <hr class="mb-0">

        <div class="container-fluid py-4 bg-black">
            <div class="text-center text-white-50 fs-13">
                &copy; 2023 Copyright <strong><span>John Law Firm</span></strong>. All Rights Reserved
            </div>
            <div class="text-center text-white-50 fs-13">
                Made by Freyza Kusuma
            </div>
        </div>
    </footer>
    {{-- End Footer --}}

    {{-- Start Scripts --}}
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

    {{-- Additional Scripts --}}
    {{-- End Scripts --}}
</body>
</html>
