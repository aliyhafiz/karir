<?php
include "../control/database.php";

date_default_timezone_set('Asia/Jakarta');

$username = mysqli_real_escape_string($koneksidb, stripslashes(strip_tags(htmlspecialchars(trim($_POST['username'])))));
$password = mysqli_real_escape_string($koneksidb, stripslashes(strip_tags(htmlspecialchars(trim($_POST['password'])))));

$modEnkrip 	= md5(AUTH_KEY . md5($password) . AUTH_KEY );	

if (!ctype_alnum($username) OR !ctype_alnum($password)) {
	header("Location: index.php?alert=1");
}
else {
	$query = mysqli_query($koneksidb, "SELECT * FROM admin WHERE username='$username' AND password='$modEnkrip'")
									or die('Ada kesalahan pada query admin : '.mysqli_error($koneksidb));
	$rows  = mysqli_num_rows($query);

	if ($rows > 0) {
		$data  = mysqli_fetch_assoc($query);

		session_start();
		
		$_SESSION['no']  		= $data['no'];
		$_SESSION['username'] 	= $data['username'];
		$_SESSION['password'] 	= $data['password'];
		$_SESSION['nama'] 		= $data['nama'];
		$_SESSION['gambar'] 	= $data['gambar'];
		$_SESSION['email'] 		= $data['email'];
		$_SESSION['status'] 	= $data['status'];
		$_SESSION['path'] 		= $data['path'];
		$_SESSION['id_session'] = $data['id_session'];
		
		echo "<meta http-equiv='refresh' content='0; url=administrator/main.php?open=Halaman-Utama'>";
		
	}

	else {
		header("Location: index.php?alert=1");
	}
}
?>