
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>@yield('meta_title') - {{ config('app.name', 'Laravel') }} - blogs about for seo </title>
    <meta name="description" content="@yield('meta_description')"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <!-- Navigation Layouts -->
        @include('layouts.nav')

        <main class="py-4">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
