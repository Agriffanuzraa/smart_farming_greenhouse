<?php
    $con=mysqli_connect("localhost","c39tanicerdas","Annisa369369","c39tanicerdas_LED");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $username = 'dodi@darmajaya.ac.id';
   $password = 'Annisa369369';
  $result = mysqli_query($con,"SELECT role FROM login where username='$username'and password='$password'");
   $row = mysqli_fetch_array($result);
   $data = $row[0];

   if($data){
      echo $data;
   }
   mysqli_close($con);
?>
