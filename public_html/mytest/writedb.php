<?php
      include 'db.php';
      $value1 = $_GET['v1'];
      $q = "UPDATE tab1 SET value1='$value1'";
      mysqli_query($conn,$q) or die("Data not updated ERROR");
      mysqli_close($conn);
 ?>
