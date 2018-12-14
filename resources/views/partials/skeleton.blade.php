<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.meta')
    @include('partials.og')

    <!-- Styles -->
    <link href='//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="//d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?9ukd8d" rel="stylesheet">
    <link href="//unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>@yield('title') — AlexShangin.Ru</title>
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    <script src="{{ asset('js/entry-client.js') }}" type="text/javascript"></script>
</body>
</html>
