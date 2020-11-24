<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light px-3 border-top border-red border-4">
        <div class="row">
            <div class="col">
                <a class="navbar-brand" href="/">MyForum</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ url('/themes') }}">Gestion des thèmes</a>
                <a class="btn btn-primary" href="{{ url('/references')}}">Gestion des références</a>
                <a class="btn btn-primary" href="{{ url('/roles')}}">Gestion des rôles</a>
                <a class="btn btn-primary" href="{{ url('/states')}}">Gestion des états</a>
                <a class="btn btn-primary" href="{{ url('/moderation')}}">Modération</a>
            </div>
        </div>
    </nav>
    <div id="content">
        @yield('content')
    </div>
</body>

</html>