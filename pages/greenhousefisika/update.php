<?php
include "koneksi.php";
$id =isset($_POST['id'])?$_POST['id']:'';
$relay1 =isset($_POST['relay1'])?$_POST['relay1']:'';
$relay2 =isset($_POST['relay2'])?$_POST['relay2']:'';
$relay3 =isset($_POST['relay3'])?$_POST['relay3']:'';
$query =mysqli_query($mysqli, "UPDATE `aktuator` SET `id`= id,`relay1`= relay1,`relay2`= relay2 ,`relay3`= $relay3 WHERE 1");
$query =mysqli_query($mysqli, "UPDATE `aktuator` SET `id`= id,`relay1`= relay1,`relay2`= $relay2 ,`relay3`= relay3 WHERE 1");
$query =mysqli_query($mysqli, "UPDATE `aktuator` SET `id`= id,`relay1`= $relay1,`relay2`= relay2 ,`relay3`= relay3 WHERE 1");
?>