@extends('layout.main')

@push('link')

@endpush

@section('content')
    <section id="galleries-page" class="galleries d-flex align-items-center">
        <div class="container py-5 my-3">
            <div class="row g-2">
                <div id="galleries-page-title" class="col-12 text-center">
                    <h1 class="fs-45 mt-0 pb-3 mb-5 text-special-navy">Our Gallery</h1>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ asset('img/gallery/gallery-1.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="120">
                        <a href="{{ asset('img/gallery/gallery-2.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="140">
                        <a href="{{ asset('img/gallery/gallery-3.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="160">
                        <a href="{{ asset('img/gallery/gallery-4.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="180">
                        <a href="{{ asset('img/gallery/gallery-5.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                        <a href="{{ asset('img/gallery/gallery-6.jpg') }}" class="gallery-lightbox">
                            <img src="{{ asset('img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')

@endpush
