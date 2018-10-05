<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<table align="center" align="center">
		<form action="connection.php" colspan="3" method="POST" ali>
			<tr>
				<td align="center" colspan="3">LOGIN</td><br>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submit" value="kirim"></td>
			</tr>
		</form>
	</table>
</body>
</html>