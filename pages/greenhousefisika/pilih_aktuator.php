<?php
include 'koneksi.php';
$nilai = mysqli_query($mysqli, "SELECT * FROM aktuator");
	$result = array();
	while ($row = mysqli_fetch_assoc($nilai)) {
	$json[]=$row;
	}
	echo json_encode(array('pengguna'=>$json));
	
?>