<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('logo/logo-logindo.png')}}">
    <title>Vessel Daily Report</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        
        .content {
            max-width: 1000px; /* Sesuaikan dengan lebar maksimum yang Anda inginkan */
            width: 100%;
            padding: 0 20px; /* Tambahkan padding sesuai kebutuhan */
        }
    </style>
</head>
<body>

        <main class="py-4 content" >
            @yield('content')
        </main>
    </div>
</body>
</html>
