<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Blade Page</title>

	<!--Css files -->
	<link rel="stylesheet" href="http://laravel.lc/css/style.css" />
	<link rel="stylesheet" href="http://laravel.lc/css/bootstrap.css" />
	<link rel="stylesheet" href="{{ elixir('css/all.css') }}" />

	<!--Js files-->
	<script src="http://laravel.lc/js/jquery-1.11.3.min.js"></script>
	<script src="http://laravel.lc/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
		
			@include('flash::message')

			@yield('content')
	</div>

	 <!-- This is only necessary if you do Flash::overlay('...') -->
<script>
    $('#flash-overlay-modal').modal();
</script>
	@yield('footer')
</body>
</html>