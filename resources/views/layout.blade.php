<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
	<section id="bar"></section>
	<div class="containder">
		<section id="content">
			@yield("content")
		</section>
	</div>
</body>
</html>