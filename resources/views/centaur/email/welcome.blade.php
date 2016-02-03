<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Welcome To Cimo App </h2>
		<p>We are very glad to have you on board.</p>
		<p>I'm Agustin Creator and founder of Cimo please let mi know if you need asistance</p>
		<p>My email is agustin.peet@cimoapp.com</p><p><b>Your Account:</b> {{ $email }}</p>
		<p>To activate your account, <a href="{{ route('auth.activation.attempt', urlencode($code)) }}">click here.</a></p>
		<p>Or point your browser to this address: <br /> {!! route('auth.activation.attempt', urlencode($code)) !!} </p>
		<p>Thank you!</p>
	</body>
</html>