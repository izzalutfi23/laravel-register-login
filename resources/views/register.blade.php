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
				<td><input type="text" name="name">@error('name') Error Gan @enderror</td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email">@error('email') Error Gan @enderror</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password">@error('password') Error Gan @enderror</td>
			</tr>
			<tr>
				<td>Ulangi Password</td>
				<td><input type="password" name="password_confirmation"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Daftar"></td>
			</tr>
		</form>
	</table>
</body>
</html>