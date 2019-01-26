<!DOCTYPE html>
<html lang="en" class="h-full font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1280">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $siteTitle)</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('app.css', 'vendor/phoebe') }}">
</head>

<body class="text-black h-full">
    <div class="h-full">
        <div class="px-view py-view mx-auto">
            @yield('content')

            @include('theme::partials.footer')
        </div>
    </div>
</body>
</html>