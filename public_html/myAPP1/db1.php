<?php 
 $s1Green = 0;
 $s2Green = 0;
 $s3Green = 0;
           $conn = mysqli_connect("localhost","root","bhura112") or die("error"); 
           $q = "SELECT * from mytab";
		   mysqli_select_db($conn,"iot")  or die("error"); 
 ?>