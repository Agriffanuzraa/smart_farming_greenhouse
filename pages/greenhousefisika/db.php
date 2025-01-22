<?php
$servername = 'localhost';
$username = 'iot_u893318376_smartfarming';
$password = 'Annissa369369.';
$db = 'iot_u893318376_smartfarming';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
