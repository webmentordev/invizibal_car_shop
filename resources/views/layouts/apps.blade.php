<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }} — Buy Car Window Shades</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="shortcut icon" href="{{ asset('assets/images/invizibal_favicon.png') }}" type="image/x-icon">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        @if (!Request::is('contact'))
            <x-navbar />
        @endif

        @yield('content')
        
        @if (!Request::is('contact'))
            <x-footer />
        @endif
    </body>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('assets/js/parallax.js-1.5.0/parallax.min.js') }}"></script>
</html>
