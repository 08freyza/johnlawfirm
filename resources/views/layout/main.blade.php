<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Start Title --}}
        @include('layout.partials.title')
        {{-- End Title --}}

        {{-- Start Logo --}}
        @include('layout.partials.logo')
        {{-- End Logo --}}

        {{-- Start Styles --}}
        @include('layout.partials.link')
        {{-- End Styles --}}
    </head>
    <body>
        {{-- Start Header --}}
        @include('layout.partials.header')
        {{-- End Header --}}

        @if(Route::currentRouteName() == 'home')
            {{-- Start Hero --}}
            @include('layout.partials.hero')
            {{-- End Hero --}}
        @else
            {{-- Start Blank --}}
            @include('layout.partials.blank')
            {{-- End Blank --}}
        @endif

        {{-- Start Content --}}
        <main>
            @yield('content')
        </main>
        {{-- End Content --}}

        {{-- Start Footer --}}
        @include('layout.partials.footer')
        {{-- End Footer --}}

        <div id="preloader"></div>

        {{-- Start Scripts --}}
        @include('layout.partials.script')
        {{-- End Scripts --}}
    </body>
</html>
