<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Be My Valentine 🥰</title>

    <!-- HTML Meta Tags -->
    <title>Be My Valentine</title>
    <meta name="description"
        content="Create and share personalized Valentine’s Day proposals with ease! Be My Valentine lets you send romantic messages, track responses, and celebrate love in a unique way. Sign up now and make this Valentine’s Day unforgettable!">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://love.thilinathushan.dev">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Be My Valentine">
    <meta property="og:description"
        content="Create and share personalized Valentine’s Day proposals with ease! Be My Valentine lets you send romantic messages, track responses, and celebrate love in a unique way. Sign up now and make this Valentine’s Day unforgettable!">
    <meta property="og:image" content="{{ asset('love-thilinathushan-dev.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="love.thilinathushan.dev">
    <meta property="twitter:url" content="https://love.thilinathushan.dev">
    <meta name="twitter:title" content="Be My Valentine">
    <meta name="twitter:description"
        content="Create and share personalized Valentine’s Day proposals with ease! Be My Valentine lets you send romantic messages, track responses, and celebrate love in a unique way. Sign up now and make this Valentine’s Day unforgettable!">
    <meta name="twitter:image" content="{{ asset('love-thilinathushan-dev.png') }}">


    <link rel="icon" type="image/png" href="{{ asset('/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="Be My Valentine" />
    <link rel="manifest" href="{{ asset('/favicon/site.webmanifest') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @stack('styles')
</head>

<body>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center min-vh-100">
            <div class="container">
                @yield('content')
            </div>
        </div>
        @yield('footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @stack('scripts')
</body>

</html>
