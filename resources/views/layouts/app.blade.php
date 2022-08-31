<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Farmácia Canídelo</title>
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
        <navbar></navbar>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
