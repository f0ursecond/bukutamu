<?php 
include 'connection.php';
if (isset($_POST['simpan'])) {
  $nama_tamu = $_POST['nama_tamu'];
  $alamat_tamu = $_POST['alamat_tamu'];
  $notelp_tamu = $_POST['notelp_tamu'];
  $pesan_tamu = $_POST['pesan_tamu'];

  $query = "INSERT INTO buku_tamu (nama_tamu, alamat_tamu, notelp_tamu, pesan_tamu, tanggal_bertamu) VALUES ('$nama_tamu', '$alamat_tamu', '$notelp_tamu', '$pesan_tamu', now())";
  $sql = mysqli_query($conn, $query);

  if ($sql)  {
    header('Location: tampil.php?sukses');
  } else {
    echo "<script>alert('Data gagal ditambahkan')</script>";
  }
}
 ?>