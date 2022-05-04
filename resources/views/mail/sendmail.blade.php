<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>From: {{ $details['name'] }} </h3>
	<h3>Email: {{ $details['email'] }} </h3>
	<h3>Message:</h3>
	<h4> {{$details['body']}} </h4>
</body>
</html>