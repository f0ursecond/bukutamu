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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Tamu</title>
</head>
<body>
	<center>
		<h1>FORM LOGIN</h1>
		<hr>
		<form action="" method="post">
			<table>
				<tr><td>Username</td><td><input type="text" name="username" size="10" autocomplete="off" required></td></tr>
				<tr><td>Password</td><td><input type="password" name="password" size="10" autocomplete="off" required></td></tr>
			</table>
			<input type="submit" name="login" value="LOGIN">
		</form>
	</center>
</body>
</html>