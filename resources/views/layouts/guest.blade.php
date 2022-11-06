<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('layouts.style')
    <!-- Scripts -->
    @include('layouts.script')
</head>

<body>
    @include('layouts.navbar')
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    @include('layouts.footer')
    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/slick/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
