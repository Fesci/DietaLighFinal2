<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield("title")</title>
		<base href="{{ asset('/') }}">
		<!-- Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
		@include("layouts.partials.css")
		@livewireStyles
		<!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>
	</head>

	<body class="col-bg">
		
		
		{{-- @include('layouts.navigation') --}}
		@livewire('navigation')

<!-- CONTENIDO BODY -->
@yield("contenido")
@include('layouts.partials.footer')
@include("layouts.partials.js")
@livewireScripts
</body>
</html>
