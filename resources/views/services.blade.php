@extends('layout.main')

@push('link')

@endpush

@section('content')
    <section id="services-page" class="d-flex align-items-center">
        <div class="container py-5 my-3">
            <div class="row g-2 align-items-center">
                <div id="services-page-title" class="col-12 text-center">
                    <h1 class="fs-45 pb-2 mt-0 mb-5 text-special-navy">Our Services</h1>
                </div>
                @foreach ($services as $service)
                    <div class="col-6">
                        <h2 class="mb-4 pb-1">{{ $service['title'] }}</h2>
                    </div>
                    <div class="col-6">
                        <p class="mb-4 pb-1">{{ $service['message'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('script')

@endpush
