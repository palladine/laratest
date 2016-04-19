<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lara | @yield('title')</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	@include('header')
	@include('messages')

	@yield('content')
	<script src="js/bootstrap.min.js"></script>
</body>
</html>