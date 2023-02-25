<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ open: false }" class="no-js mmenu-right"
    :class="{ 'mm-opened mm-blocking mm-background mm-right mm-pagedim-black mm-opening': open }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic%7CPlayfair%20Display%3A700%2C400%7CRoboto%3A700%2C400&#038;subset=devanagari%2Clatin%2Clatin-ext&#038;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic%7CPlayfair%20Display%3A700%2C400%7CRoboto%3A700%2C400&#038;subset=devanagari%2Clatin%2Clatin-ext&#038;display=swap"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic%7CPlayfair%20Display%3A700%2C400%7CRoboto%3A700%2C400&#038;subset=devanagari%2Clatin%2Clatin-ext&#038;display=swap" />
    </noscript>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('main.mm-header')
        @include('main.topbar')
        @include('main.header')
        <!-- Page Content -->
        <main class="body-outer-wrapper mm-page mm-slideout">
            {{ $slot }}
            @include('main.footer')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
