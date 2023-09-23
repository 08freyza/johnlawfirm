@extends('layout.main')

@push('link')

@endpush

@section('content')
    <section id="about-page" class="d-flex align-items-center">
        <div class="container py-5 my-3">
            <div class="row align-items-center">
                <div id="about-page-title" class="col-12 text-center">
                    <h1 class="fs-45 pb-2 mt-0 mb-5 text-special-navy">About Us</h1>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-center">JOHN LAW FIRM is a law firm office in Jakarta, established to answer dynamic problems thoroughly taking place amid purposed escalation, which requires legal protection and interaction either between an individual and another individual, between an individual and a law entity, or between law entity and another law entity that becomes sophisticated. By having vast insights, experiences, and comprehensive understandings of law against a plethora of cases, JOHN LAW FIRM could provide a solutive solution, ensure client's law protection, and avoid any risks as far as possible that might happen in the future because given law services are not merely for short-term impact, but also for long-term impact.</p>
                </div>
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="img-fluid w-50 py-4 my-3">
                </div>
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/peradi.jpeg') }}" alt="peradi" class="img-fluid w-25 pt-4 mt-3 pb-3">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')

@endpush
