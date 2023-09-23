<header id="header">
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top py-3 {{ Route::currentRouteName() == 'home' ? 'navbar-home' : 'bg-white shadow-sm' }}" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                {{-- {{ Str::title(Str::replace('_', ' ', config('app.name'))) }} --}}
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="img-fluid header-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav {{ Route::currentRouteName() == 'home' ? '' : 'nav-scrolled' }}">
                    <li class="nav-item ms-3">
                        <a class="nav-link fs-14 {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page" href="{{ url('') }}">Home</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link fs-14 {{ Route::currentRouteName() == 'about' ? 'active' : '' }}" href="{{ url('about') }}">About Us</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link fs-14 {{ Route::currentRouteName() == 'team' ? 'active' : '' }}" href="{{ url('teams') }}">Our Team</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link fs-14 {{ Route::currentRouteName() == 'service' ? 'active' : '' }}" href="{{ url('services') }}">Our Services</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link fs-14 {{ Route::currentRouteName() == 'gallery' ? 'active' : '' }}" href="{{ url('galleries') }}">Galleries</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link fs-14 pe-0 {{ Route::currentRouteName() == 'article' || (strpos(URL::full(), route('article')) !== false) ? 'active' : '' }}" href="{{ url('news-and-article') }}">News & Article</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
