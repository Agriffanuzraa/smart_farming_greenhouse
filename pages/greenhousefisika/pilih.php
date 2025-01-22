<?php
include 'koneksi.php';
$hasil = mysqli_query($mysqli, "SELECT * FROM aktuator");
	$result = array();
	while ($row = mysqli_fetch_assoc($hasil)) {
	$json=$row;
	}
	echo json_encode($json);
	
?>