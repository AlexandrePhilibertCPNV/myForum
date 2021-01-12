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
    <div id="content">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
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
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>