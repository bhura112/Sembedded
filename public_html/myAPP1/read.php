<?php
$retVal = mysqli_query($conn,$q);
    if(! $retVal ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysqli_fetch_array($retVal, MYSQL_ASSOC)) {
              $s1Green = $row['data1'];
              $s2Green = $row['data2'];
		      $s3Green = $row['data3'];
   }
   
   ?>