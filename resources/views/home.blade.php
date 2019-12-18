<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
Selamat datang {{auth()->user()->name}}<br>
<a href="/logout">Logout</a>
</body>
</html>