<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<table>
		<form action="/register" method="POST">
			{{csrf_field()}}
			<tr>
				<td>nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Ulangi Password</td>
				<td><input type="password" name="password_confirmation"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="login"></td>
			</tr>
		</form>
	</table>
</body>
</html>