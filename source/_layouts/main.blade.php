<!DOCTYPE html>
<html lang="{{ $page->language ?? 'es' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <meta property="og:title" content="{{ $page->title }}" />
        <meta property="og:description" content="{{ $page->description }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/logo.png" />
        <meta property="og:image:alt" content="{{ $page->title }}" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
        <link rel="manifest" href="/assets/images/site.webmanifest">
        <link rel="mask-icon" href="/assets/images/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/build/css/animate.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
        <script src="assets/build/js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
        @stack('styles')
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @include('_partials.header')
        @yield('body')
        @include('_partials.footer')
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
        });
    </script>
</html>
