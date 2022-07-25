<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku tamu</title>
</head>
<body>
	<center>
		<form action="simpan.php" method="post">
			<h1>FORM BUKU TAMU</h1>
			<h2>Universitas Komputer Indonesia</h2>
			<hr>
			<table>
				<tr><td>Nama</td><td><input type="text" name="nama_tamu" size="20"></td></tr>
				<tr><td>Alamat</td><td><input type="text" name="alamat_tamu" size="20"></td></tr>
				<tr><td>No. Telp</td><td><input type="text" name="notelp_tamu" size="10"></td></tr>
				<tr><td>Pesan</td><td><textarea name="pesan_tamu"></textarea></td></tr>
			</table>
			<input type="submit" value="simpan" name="simpan"><input type="reset" name="reset">
		</form>
	</center>
</body>
</html>