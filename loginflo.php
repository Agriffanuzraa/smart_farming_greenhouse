<?php
    $con=mysqli_connect("localhost","iot_u893318376_smartfarming","Annissa369369.","iot_u893318376_smartfarming");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

  $result = mysqli_query($con,"SELECT role FROM login where username='$username'and password='$password'");
   $row = mysqli_fetch_array($result);
   $data = $row[0];

   if($data){
      echo $data;
   }
   mysqli_close($con);
?>
