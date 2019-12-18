<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<table>
		<form action="/postlogin" method="POST">
			{{csrf_field()}}
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="login"></td>
			</tr>
		</form>
	</table>
</body>
</html>