@extends('layout.main')

@push('link')

@endpush

@section('content')
    <section id="about" class="d-flex align-items-center">
        <div class="container py-5 my-3">
            <div class="row align-items-center">
                <div id="about-title" class="col-12 text-center" data-aos="fade-down" data-aos-duration="700">
                    <h1 class="fs-45 mt-0 mb-5 text-special-navy">About Us</h1>
                </div>
                <div class="col-12" data-aos="zoom-in" data-aos-duration="700">
                    <p class="text-center">JOHN LAW FIRM is a law firm office in Jakarta, established to answer dynamic problems thoroughly taking place amid purposed escalation, which requires legal protection and interaction either between an individual and another individual, between an individual and a law entity, or between law entity and another law entity that becomes sophisticated. By having vast insights, experiences, and comprehensive understandings of law against a plethora of cases, JOHN LAW FIRM could provide a solutive solution, ensure client's law protection, and avoid any risks as far as possible that might happen in the future because given law services are not merely for short-term impact, but also for long-term impact.</p>
                </div>
                <div class="col-12 text-center" data-aos="zoom-in" data-aos-duration="700">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="img-fluid w-50 py-4 my-3">
                </div>
                <div class="col-12 text-center" data-aos="zoom-in" data-aos-duration="700">
                    <img src="{{ asset('img/peradi.jpeg') }}" alt="peradi" class="img-fluid w-25 pt-4 mt-3 pb-3">
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="d-flex align-items-center">
        <div class="container py-5 my-3">
            <div class="row">
                <div id="services-title" class="col-12 text-center" data-aos="fade-down" data-aos-duration="700">
                    <h1 class="fs-45 mt-0 mb-5 text-white">Our Services</h1>
                </div>
                <div class="col-12" data-aos="zoom-in" data-aos-duration="700">
                    <div class="row g-2 justify-content-center">
                        @foreach ($services as $service)
                            <div class="col-xl-4 col-lg-6 col-12 text-white d-flex">
                                <p class="m-auto text-center p-3 rounded border-gold text-white w-100">{{ $service['title'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="700">
                    <a href="{{ route('service') }}" class="btn btn-gold rounded mt-4 px-5 py-2 fw-medium">See Detail >></a>
                </div>
            </div>
        </div>
    </section>
    <section id="galleries" class="galleries d-flex align-items-center">
        <div class="container py-5 my-3">
            <div class="row g-2">
                <div id="galleries-title" class="col-12 text-center" data-aos="fade-down" data-aos-duration="700">
                    <h1 class="fs-45 mt-0 mb-5 text-special-navy">Our Gallery</h1>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ asset('img/gallery/gallery-1.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="120">
                        <a href="{{ asset('img/gallery/gallery-2.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="140">
                        <a href="{{ asset('img/gallery/gallery-3.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="160">
                        <a href="{{ asset('img/gallery/gallery-4.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="180">
                        <a href="{{ asset('img/gallery/gallery-5.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                        <a href="{{ asset('img/gallery/gallery-6.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="700">
                    <a href="{{ route('gallery') }}" class="btn btn-special-navy rounded mt-4 px-5 py-2 fw-normal">See More >></a>
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
                @foreach ($recommendationArticle as $recArticle)
                    <div class="col-lg-4 col-12">
                        <a href="{{ url('news-and-article/' . $recArticle['id'] . '/' . $recArticle['formatted_title']) }}" class="text-decoration-none articles-content">
                            <div class="card bg-none border border-0 h-100">
                                <div class="card-image">
                                    <img src="{{ asset('img/article/' . $recArticle['image']) }}" class="card-img-top rounded" alt="blank">
                                </div>
                                <div class="card-body px-0">
                                    <h3 class="card-title fs-20 fw-normal">{{ $recArticle['title'] }}</h3>
                                    <p class="card-text fs-12 mt-2 text-light fw-lighter">{{ date('d F Y', strtotime($recArticle['date'])) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-12 text-center">
                    <a href="{{ route('article') }}" class="btn btn-gold rounded mt-3 px-5 py-2 fw-medium">See More >></a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')

@endpush
