<!DOCTYPE html>
<html lang="pt_PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Farmácia Canídelo</title>
    <meta name="description"
        content="Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum">
    <meta name="keywords" content="Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum">

    <meta property="og:locale" content="pt_PT">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:site_name" content="Farmácia Canídelo">
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="600" />
    <meta property="og:type" content="website">

    <meta property="og:title" content="Farmácia Canídelo">
    <meta property="og:image" content="{{ asset('images/logo.webp') }}" />
    <meta property="og:image:alt" content="Farmácia Canídelo">
    <meta property="og:description"
        content="Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#02a800">
    <meta name="msapplication-TileColor" content="#02a800">
    <meta name="theme-color" content="#ffffff">

    <script src="//code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        <canidelo-navbar></canidelo-navbar>

        <main>
            @yield('content')
        </main>

        <canidelo-help></canidelo-help>
        <canidelo-footer></canidelo-footer>
    </div>
</body>

</html>
