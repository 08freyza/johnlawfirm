@extends('layout.main')

@push('link')

@endpush

@section('content')
    <section id="articles-page" class="d-flex align-items-center">
        <div class="container py-5 my-3">
            <div class="row gx-3 gy-4">
                <div id="articles-page-title" class="col-12 text-center">
                    <h1 class="fs-45 mt-0 pb-0 mb-5 text-special-navy">News & Article</h1>
                </div>
                @foreach ($articles as $article)
                    <div class="col-4">
                        <a href="{{ url('news-and-article/' . $article['id'] . '/' . $article['formatted_title']) }}" class="text-decoration-none articles-page-content">
                            <div class="card bg-none border border-0 h-100">
                                <div class="card-image">
                                    <img src="{{ asset('img/article/' . $article['image']) }}" class="card-img-top rounded" alt="blank">
                                </div>
                                <div class="card-body px-0">
                                    <h3 class="card-title fs-20 fw-normal">{{ $article['title'] }}</h3>
                                    <p class="card-text fs-12 mt-2 text-dark fw-normal">{{ date('d F Y', strtotime($article['date'])) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('script')

@endpush
