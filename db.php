<?php
$servername = 'localhost';
$username = 'iot_tanicerdas';
$password = 'Annisa369369';
$db = 'iot_tanicerdas_LED';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
