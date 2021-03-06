@php
    use Illuminate\Support\Facades\Request;
@endphp
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/Article">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta name="description" content="@yield('metaDescription', 'Počítače, webové technológie, servery, databázy, ...')">
	@if(isset($metaRobots))<meta name="robots" content="@yield('metaRobots', 'index,follow')">@endif
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="{{mix('css/homepage.css')}}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	@if(isset($fb))
		<meta property="og:url" content="{{Request::fullUrl()}}"/>
		<meta property="og:type" content="product"/>
		<meta property="og:title" content="@yield('title', 'Tatrytec.eu')"/>
		<meta property="og:description" content="@yield('metaDescription', 'Počítače, webové technológie, servery, databázy, ...')"/>
		<meta property="og:image" content="@yield('ogImage')"/>
	@endif

	<title>@yield('title', config('app.name'))</title>
</head>
<body>

@yield('content')


<script type="text/javascript" src="{{mix('js/app-homepage.js')}}"></script>

</body>
</html>