<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- icones font awesome --}}
    <script src="https://kit.fontawesome.com/a10af6701d.js" crossorigin="anonymous"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- css e javascript --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- css Materialize --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    {{-- css Swiper  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-secondary">

    {{-- header --}}
    @include('site.partials.header')

    {{--  slide --}}
    {{-- @include('partials.banner-slide') --}}

    {{-- conteudo principal --}}
    @yield('content')

    {{-- rodape --}}
    @include('site.partials.footer')


    {{--  JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- javaScript Materialize --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    {{-- javaScript Swiper  --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
