<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.meta')
    @include('partials.og')

    <!-- Styles -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="//unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>@yield('title') — AlexShangin.Ru</title>
</head>
<body>
    <div id="app">
        <v-app light>
            <div>
                <v-content class="flex-center position-ref full-height">
                    <v-container fluid>
                        <div class="content">
                            <router-view></router-view>
                        </div>
                    </v-container>
                </v-content>
            </div>
        </v-app>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
</body>
</html>
