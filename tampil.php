<?php 
include 'connection.php';
session_start();
if (!isset($_SESSION['username'])) {
	header("Location: index.php");
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
    <h1 align="right"><a href="logout.php">Logout</a></h1>
 	<center>
 		<h1>Halo Selamat Datang <?php echo $_SESSION['username']; ?></h1>
 		<h1>DAFTAR TAMU</h1>
 		<h2>Universitas Komputer Indonesia</h2>
 		<a href="daftar.php">isi tamu</a>
 		<hr>
 		<table border="1">
 			<tr>
 				<th>No</th>
 				<th>Nama Tamu</th>
 				<th>Alamat</th>
 				<th>No Telepon</th>
 				<th>Pesan</th>
 				<th>Tanggal Bertamu</th>
 				<th>Aksi</th>
 			</tr>
 			<tr>
 				<?php
 				$no=0;
 				$query = mysqli_query($conn, "SELECT * FROM buku_tamu");
 					while ($data = mysqli_fetch_array($query)) {
 					$no++;
 				?>
 					<tr>
 						<td><?php echo $no; ?></td>
 						<td><?php echo $data['nama_tamu']; ?></td>
 						<td><?php echo $data['alamat_tamu']; ?></td>
 						<td><?php echo $data['notelp_tamu']; ?></td>
 						<td><?php echo $data['pesan_tamu']; ?></td>
 						<td><?php echo $data['tanggal_bertamu']; ?></td>
 						<td><a href='hapus.php?id="<?= $data['id'] ?>"'>Hapus</a></td>
 					</tr>
 				<?php
 				}
 				?>
 			</tr>
 		</table>
 	</center>
 </body>
 </html>