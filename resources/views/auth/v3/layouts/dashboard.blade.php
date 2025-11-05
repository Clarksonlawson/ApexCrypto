<!DOCTYPE html>
<html lang="en" class="v2fLMH8w3xgUEQcl63H9">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content=" Get up to USD 2 million in minutes by borrowing against your Bitcoin. Need to buy a house, a car, or something else entirely? Find the cash you need, when you need it, without selling your BTC.">
    <meta name="author" content="ClarksonxDev">
    <meta name="generator" content="https://t.me/clarksonxdev">

    <title>@yield('title')</title>

    <link rel="canonical" href="/">



    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('auth/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('auth/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('auth/images/favicon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('auth/images/favicon.png') }}">
    <link rel="manifest" href="../../site.webmanifest">
    <link rel="mask-icon" href="../../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="ApexCrypto Finance LTD">
    <meta name="twitter:description"
        content="Get up to USD 2 million in minutes by borrowing against your Bitcoin. Need to buy a house, a car, or something else entirely? Find the cash you need, when you need it, without selling your BTC.">
    <meta name="twitter:image" content="{{ asset('assets/images/logo/logo.png') }}">

    <!-- Facebook -->
    <meta property="og:url" content="/">
    <meta property="og:title" content="ApexCrypto Finance LTD">
    <meta property="og:description"
        content="Get up to USD 2 million in minutes by borrowing against your Bitcoin. Need to buy a house, a car, or something else entirely? Find the cash you need, when you need it, without selling your BTC.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ asset('assets/images/logo/logo.png') }}">
    <meta property="og:image:type" content="image/png">



    <script>
        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia(
                "(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("v2fLMH8w3xgUEQcl63H9", "dark");
        } else {
            document.documentElement.classList.remove("v2fLMH8w3xgUEQcl63H9", "dark");
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom KRANKvs7gs1E_d0fCA0k">
    @include('auth.v3.partials.navbar')
    <div
        class="YRrCJSr_j5nopfm4duUc wBVMFkIGfrKshbvi2gS1 jtAJHOc7mn7b4IKRO59D UZ9xFK4mqjHjj8e8yJwf h8KYXnua2NT4kTVzieom">
        @include('auth.v3.partials.sidebar')
    </div>
    <div id="main-content"
        class="ahOqFrhzLjivRe8a1kX_ uLPch_bqyJDXwe5tynMV t6gkcSf0Bt4MLItXvDJ_ pdl952ted2i71qBLPIcQ jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom MKeLnCkZhCbipNorZ2hW">
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
