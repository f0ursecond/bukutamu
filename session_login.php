<?php 
include 'connection.php';
session_start();
if (isset($_SESSION['username'])) {
    header("Location: tampil.php");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $sql = mysqli_query($conn, $query);
    if ($sql->num_rows > 0) {
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['username'] = $row['username'];
        header("Location: tampil.php");
    } else {
      echo "<script>alert('Username atau Password Anda salah!')</script>";
    }
}
 ?>