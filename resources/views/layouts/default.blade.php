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
    <nav class="navbar navbar-light bg-light px-3 border-4 border-left-0 border-right-0 border-bottom-0  border-red">
        <div class="row">
            <div class="col">
                <a class="navbar-brand" href="/">MyForum</a>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex">
                @if (Auth::user())
                    <form method="post" class="mx-1" action="{{ route('logout') }}">
                        @csrf
                        <button type=submit class="btn btn-primary">Logout {{ Auth::user()->pseudo }}</button>
                    </form>
                @else
                    <a class="btn btn-primary" href="{{ route('login') }}" class="btn danger-color">Login</a></li>
                @endif
                <a class="btn btn-primary mx-1" href="{{ url('/themes') }}">Gestion des thèmes</a>
                <a class="btn btn-primary mx-1" href="{{ url('/references')}}">Gestion des références</a>
                <a class="btn btn-primary mx-1" href="{{ url('/roles')}}">Gestion des rôles</a>
                <a class="btn btn-primary mx-1" href="{{ url('/states')}}">Gestion des états</a>
                <a class="btn btn-primary mx-1" href="{{ url('/moderation')}}">Modération</a>
            </div>
        </div>
    </nav>
    <div id="content">
        @if ($errors->any())
            <div class="alert alert-danger alert-block">
            <button type="button" class="btn-close" data-dismiss="alert"></button>	
                <strong>Une erreur est survenue</strong>
            </div>
        @endif
        @if ($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="btn-close" data-dismiss="alert"></button>	
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>