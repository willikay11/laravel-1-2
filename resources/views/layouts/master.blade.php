<!DOCTYPE HTML>
<html>
<head>
	 <meta charset="utf-8">
	 <title>First Laravel Login</title>
	 <link rel="stylesheet prefetch" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<ul class="nav nav-pills">
			@if(\Auth::check())
				<li>
					{{ link_to_route('logout', 'Logout') }}
				</li>
			@else
				<li>
					{{ link_to_route('login', 'Login') }}
				</li>
			@endif
				<li>
					{{ link_to_route('users.create', 'Register') }}
				</li>
		</ul>
		@yield('content')
	</div>
</body>
</html>