<?php
	include_once "control/database.php";

	echo "<option value=''>Pilih Provinsi</option>";

	$query = mysqli_query($koneksidb, "SELECT * FROM provinsi ORDER BY nama ASC")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
		echo "<option value='" . $myData['id_prov'] . "'>" . $myData['nama'] . "</option>";
	}
?>