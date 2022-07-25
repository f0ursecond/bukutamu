<?php 
include 'connection.php';
if (isset($_POST['hapus'])) {
	$id = $_GET['id'];
    $query = "DELETE FROM buku_tamu WHERE id=$id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        header('Location: tampil.php?berhasil');
    } else {
        header('Location: tampil.php?gagal');
    }
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Tamu</title>
</head>
<body>
	<center>
		<form action="" method="post">
			<h1>Detail Data</h1>
			<hr>
			<table border="1">
				<?php 
				$id = $_GET['id'];
				$query = "SELECT * FROM buku_tamu WHERE id=$id";
				$sql = mysqli_query($conn, $query);
				$data = mysqli_fetch_assoc($sql); 
				 ?>
				<tr><td>Nama</td><td><?php echo $data['nama_tamu']; ?></td></tr>
				<tr><td>Alamat</td><td><?php echo $data['alamat_tamu']; ?></td></tr>
				<tr><td>No. Telepon</td><td><?php echo $data['notelp_tamu']; ?></td></tr>
				<tr><td>Pesan</td><td><?php echo $data['pesan_tamu']; ?></td></tr>
				<tr><td>Tanggal</td><td><?php echo $data['tanggal_bertamu']; ?></td></tr>
			</table>
			<hr>
			<input type="submit" name="hapus" value="Konfirmasi Hapus">
		</form>
	</center>
</body>
</html>