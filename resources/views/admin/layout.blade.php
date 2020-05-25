<!DOCTYPE html>
<html>
	<head>
		<!-- <meta charset="UTF-8"/> -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="/css/app.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/plantilla/img/logos/LogoVito.ico">
		<title>@yield('title')</title>
		<meta name="description" content="Portal para control clientes VITO - INFORUM" />
		<meta name="keywords" content="VITO, INFORUM" />
		<link rel="stylesheet" type="text/css" href="/plantilla/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/plantilla/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/plantilla/css/menu.css" />
		<script src="/plantilla/js/modernizr.custom.js"></script>
		<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	</head>
	<body>
		<div id="app" class="d-flex flex-column h-screen justify-content-between ">
		<header class="py-3">
			@include('partials.nav')

		</header>

		<main class="py-8">
			<script>
			$(document).ready(function() {
				$('#table').DataTable();
			} );
			</script>
			@yield('content')
		</main>
		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{config('app.name')}} | Copyrigh @ {{date('yy')}}
		</footer>
		</div>
	</body>
</html>