<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('title') | LWUA - GAS</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/material-design-icons/material-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}" media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.min.css') }}" media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/prism/prism.css') }}" media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}"/>
	@yield('styles')
</head>
<body>
	{{-- <div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	--}}
	<header id="header" class="page-topbar">
		@include('partials.navbar')
	</header>

	<main>
		<div id="main">
			<div class="wrapper">
				<section id="content">
					@include('partials.left-sidenav')
					@include('partials.content-header')
					<div class="container">
						@yield('content')
					</div>
				</section>
				@include('partials.right-sidenav')
			</div>
		</div>
	</main>

	<footer>
		@include('partials.footer')
	</footer>
	
	<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendor/prism/prism.min.js') }}"></script>
	@yield('scripts')
	<script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>
</body>
</html>