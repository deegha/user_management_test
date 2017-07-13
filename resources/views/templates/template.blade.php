<!DOCTYPE html>
<html>
<head>
	<title>Datamanagement system</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="cont">
	@if (Session::has('message'))
		<div class="flash alert">
			<p>{{ Session::get('message') }}</p>
	  	</div>
    @endif
    <div>
    	@yield('content')
    </div>
	
</div>
</body>
</html>