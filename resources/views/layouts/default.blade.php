<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title')</title>

    <link rel="icon" type="image/ico" href="/favicon.png">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/app.css">	
    <script src="/js/app.js"></script>
</head>
<body>
    @include('partials.nav')

    @yield('content')
</body>
</html>