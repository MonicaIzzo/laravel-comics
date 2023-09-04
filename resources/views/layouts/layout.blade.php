<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/faicon.ico') }}" />


    <!-- Styles -->
    {{-- Importiamo gli asset --}}
    @vite('resources/js/app.js')

</head>

<body>
    {{-- Importiamo l'HEADER --}}
    @include('includes.header')

    {{-- Importiamo lo SLIDER --}}
    @include('includes.slider')

    {{-- Contenuto del MAIN che varia ad ogni PAGINA --}}
    <main>
        @yield('main_content')
    </main>

    {{-- Importiamo il FOOTER --}}
    @include('includes.footer')

</body>

</html>
