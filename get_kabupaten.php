<?php
	include_once "control/database.php";
	$provinsi = $_POST['provinsi'];

	echo "<option value=''>Pilih Kabupaten</option>";
	
	$query = mysqli_query($koneksidb, "SELECT * FROM kabupaten WHERE id_prov='$provinsi' ORDER BY nama ASC")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
		echo "<option value='" . $myData['nama'] . "'>" . $myData['nama'] . "</option>";
	}

?>