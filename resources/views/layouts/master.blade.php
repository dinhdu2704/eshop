<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learn Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	@include('layouts.header')

	<div id="content">
		<h1>Đình Dự</h1>
		@yield('NoiDung')
	</div>
	
	@include('layouts.footer')
</body>
</html>