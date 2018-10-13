<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page-title')</title>

	<link rel="icon" type="image/png" href="/logo.png">

	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/app.css">	
	<script src="/js/app.js"></script>
</head>
<body>
	@include('partials.nav')

	@yield('content')
</body>
</html>