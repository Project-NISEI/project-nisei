<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="og:image" content="@yield('opengraph-image', url('/logo-large.png'))">
    
    <!-- Twitter cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ProjectNISEI">
    <meta name="twitter:title" content="@yield('page-title')">
    <!-- twitter:description would go here if we had page summaries -->
    <meta name="twitter:image" content="@yield('opengraph-image', url('/logo-large.png'))">
    <!-- end Twitter cards -->


    <title>@yield('page-title')</title>

    <link rel="icon" type="image/ico" href="/favicon.png">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/app.css">	
    <script src="/js/app.js"></script>

    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5THNSPJ');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131646227-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-131646227-1');
    </script>


</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5THNSPJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('partials.nav')

    @yield('content')

    @yield('scripts')
</body>
</html>
