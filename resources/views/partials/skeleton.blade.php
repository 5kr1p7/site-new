<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.meta')
    @include('partials.og')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title') — AlexShangin.Ru</title>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
