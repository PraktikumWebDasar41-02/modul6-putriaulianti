<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 6</title>
</head>
<body>
	<table>
		<h1>FORM REGISTRASI</h1>
		<form method="POST">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<input type="radio" name="kelas" value="d3mi4101"> D3MI-41-01 <br>
					<input type="radio" name="kelas" value="d3mi4102"> D3MI-41-02 <br>
					<input type="radio" name="kelas" value="d3mi4103"> D3MI-41-03 <br>
					<input type="radio" name="kelas" value="d3mi4104"> D3MI-41-04 <br>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jk" value="laki"> Laki-laki <br>
					<input type="radio" name="jk" value="perempuan"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>
					<input type="checkbox" name="hobi" value="menari"> Menari <br>
					<input type="checkbox" name="hobi" value="membaca"> Menari <br>
					<input type="checkbox" name="hobi" value="tidur"> Tidur <br>
					<input type="checkbox" name="hobi" value="masak"> Masak <br>

				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td><select name="fakultas">
					<option>---Pilih---</option>
					<option value="fte"> Fakultas Teknik Elektro </option>
					<option value="fif"> Fakultas Informatika </option>
					<option value="fri"> Fakultas Rekayasa Industri </option>
					<option value="feb"> Fakultas Ekonomi Bisnis </option>
					<option value="fkb"> Fakultas Komunikasi Bisnis </option>
					<option value="fik"> Fakultas Industri Kreatif </option>
					<option value="fit"> Fakultas Ilmu Terapan </option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="daftar" value="Daftar"></td>
			</tr>
		</form>
	</table>
</body>
</html>

<?php

	if(isset($_POST['daftar'])) {
		if(strlen($_POST['nama']<=35)) {
			$nama1 = $_POST['nama'];
		}else {
			echo "Nama MAX memiliki panjang 35 karakter <br>";
		}

		if(strlen($_POST['nim']==10 && is_numeric($_POST['nim']))) {
			$nim1 = $_POST['nim'];
		}else {
			echo "NIM harus berupa angka dan ada 10 digit <br>";
		}

		$kelas1 = $_POST['kelas'];

		if(isset($_POST['jk'])) {
			$jk1 = $_POST['jk'];
		}

		$hobi1 = $_POST['hobi'];
		$fakultas1 = $_POST['fakultas'];
		$alamat1 = $_POST['alamat'];

		$conn = mysqli_connect('localhost', 'root', '', 'd_jurnal6');
		$query = mysqli_query($conn, "INSERT INTO t_jurnal6 VALUES ('$nama1','$nim1','$kelas1','$jk1','$hobi1','$fakultas1','$alamat1')");
		if($query) {
			echo "DATA SAVED";
			header("Location:2.php");
		} else {
			echo "DATA TIDAK TERSIMPAN";
		}
	}

?>