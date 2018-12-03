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
    <div id="app">
        <v-app light>
            <div>
                <toolbar></toolbar>
                <v-content class="position-ref">
                    <v-container fluid>
                        <div class="content">
                            <transition name="fade" mode="out-in">
                                <router-view v-cloak></router-view>
                            </transition>
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
