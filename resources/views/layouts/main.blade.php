<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> LGR | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('cdn-section')
</head>
<body>

    {{-- Header --}}
    @include('partials.header')


    {{-- Main --}}
    <main class="container" id="main-wrapper">
        <section id="@yield('main-section-id')" class="@yield('main-section-classes')">
            <div class="main-card p-3 m-2">
                @yield('main-content')    
            </div>            
        </section>
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    @yield('scripts-section')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>