<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JobDesk ApS mails</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {!! \File::get(public_path('css/emails.css')) !!}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<div class="container-" id="mail-wrapper">
		@yield('mail')
	</div>
</body>
</html>