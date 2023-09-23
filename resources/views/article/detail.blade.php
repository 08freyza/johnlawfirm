@extends('layout.main')

@push('link')

@endpush

@section('content')
    <section id="article-detail-page" class="d-flex align-items-center">
        <div class="container py-5 my-3">
            <div class="row gx-5 gy-4">
                <div id="article-detail-page-title" class="col-8 text-left">
                    <header>
                        <h1 class="fs-45 mt-2 pb-0 mb-2 text-special-navy">{{ $articleDetail['title'] }}</h1>
                        <p class="mb-2 text-dark-gold fw-medium">{{ $articleDetail['author'] }}</p>
                        <p class="text-body-tertiary">{{ date('l, d F Y H:i', strtotime($articleDetail['date'])) . ' WIB' }}</p>
                        <img src="{{ asset('img/article/'.$articleDetail['image']) }}" alt="{{ $articleDetail['image'] }}" class="img-fluid mb-3">
                    </header>
                    <article>
                        {!! $articleDetail['article'] !!}
                    </article>
                </div>
                <div class="col-4 sticky-top">
                    <div class="row gy-1">
                        <h3 class="fs-22 mt-3 pb-0 mb-3 text-special-navy fw-semibold">More Articles</h3>
                        @foreach ($recommendationArticle as $recArticle)
                            <div class="col-12">
                                <a href="{{ url('news-and-article/' . $recArticle['id'] . '/' . $recArticle['formatted_title']) }}" class="text-decoration-none articles-page-content">
                                    <div class="card bg-none border border-0 h-100">
                                        <div class="card-image">
                                            <img src="{{ asset('img/article/' . $recArticle['image']) }}" class="card-img-top rounded" alt="blank">
                                        </div>
                                        <div class="card-body px-0">
                                            <h3 class="card-title fs-20 fw-normal">{{ $recArticle['title'] }}</h3>
                                            <p class="card-text fs-12 mt-2 text-dark fw-normal">{{ date('d F Y', strtotime($recArticle['date'])) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')

@endpush
