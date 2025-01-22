<?php
include "koneksi.php";
$id =isset($_POST['id'])?$_POST['id']:'';
$kadar_n =isset($_POST['kadar_n'])?$_POST['kadar_n']:'';
$kadar_p =isset($_POST['kadar_p'])?$_POST['kadar_p']:'';
$kadar_k =isset($_POST['kadar_k'])?$_POST['kadar_k']:'';
$kelem_t =isset($_POST['kelem_t'])?$_POST['kelem_t']:'';
$suhu_u  =isset($_POST['suhu_u'])?$_POST['suhu_u']:'';
$kelem =isset($_POST['kelem'])?$_POST['kelem']:'';
$ph_tanah =isset($_POST['ph_tanah'])?$_POST['ph_tanah']:'';
$flow =isset($_POST['flow'])?$_POST['flow']:'';
$query =mysqli_query($mysqli, "INSERT INTO `insert_sensor`(`kadar_n`, `kadar_p`, `kadar_k`, `kelem_t`, `suhu_u`, `kelem`, `ph_tanah`, `flow`) VALUES ($kadar_n,$kadar_p,$kadar_k,$kelem_t,$suhu_u,$kelem,$ph_tanah,$flow)");

?>
