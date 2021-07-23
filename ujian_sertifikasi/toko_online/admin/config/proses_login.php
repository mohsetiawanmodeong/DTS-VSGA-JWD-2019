<?php

$error = '';

include "koneksi/+connection.php";
if (isset($_POST['submit'])) {
	$username	= $_POST['username'];

	$password	=  md5($_POST['password']);

	$query = mysqli_query($connection, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
	if (mysqli_num_rows($query) == 0) {
		$error = " <h4 style='color:red;'>  Username / Password anda salah !! </h4>";
	} else {
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];

		if ($row['level'] == "Administrator") {
			header("Location:admin/admin.php");
		}
	}
}
