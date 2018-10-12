<?php
	session_start();
	include 'koneksi.php';
	$_SESSION['nim'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 6</title>
</head>
<body>
	<h1 align="center">LOGIN</h1>
	<table align="center">
		<form method="POST">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</form>
	</table>
</body>
</html>