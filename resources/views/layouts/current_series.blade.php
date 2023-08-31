<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    <link rel="shortcut icon" href="{{Vite::asset('resources/img/faicon.ico')}}" />

    <!-- Styles -->
    {{-- Importiamo gli asset --}}
    @vite('resources/js/app.js')

</head>

<body>
{{-- Importiamo l'HEADER --}}
@include('includes.header')

{{-- Importiamo lo SLIDER --}}
@include('includes.slider')

<main>
@yield('current_series')
</main>

{{-- Importiamo il FOOTER --}}
@include('includes.footer')

</body>

</html>