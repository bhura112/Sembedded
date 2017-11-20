<?php

	   if(isset($_POST["LED"]))
	   {

		if($_POST["ledon"]=="ON" || $_POST["ledon"]=="on")

		{

			$dat1=1;

			$q1 ="UPDATE mytab SET data1 = $dat1";
	               mysqli_query($conn,$q1) or die("error 1.10");
			 
		}else{

			$dat1=0;

			$q1 ="UPDATE mytab SET data1 = $dat1";

	               mysqli_query($conn,$q1) or die("error 1.11");

		   }
               $q  = "SELECT * FROM mytab";
	 $retVal = mysqli_query($conn,$q);
    if(! $retVal ) {
      die('Could not get data: ' . mysql_error());
       }
   
   while($row = mysqli_fetch_array($retVal, MYSQL_ASSOC)) {
              $s1Green = $row['data1'];
              $s2Green = $row['data2'];
		      $s3Green = $row['data3'];
           }
   if($s1Green == 1)
	 {
      echo '<div class="led-box1">';
      echo '<div class="green-led"></div>';
      echo '</div>';
	 }else
	 {
	  echo '<div class="led-box1">';
      echo '<div class="red-led"></div>';
      echo '</div>';	 
	 }
   if($s2Green == 1)
	 {
      echo '<div class="led-box2">';
      echo '<div class="green-led"></div>';
      echo '</div>';
	 }
	 else{
	  echo '<div class="led-box2">';
      echo '<div class="red-led"></div>';
      echo '</div>';	 
	 }
   if($s3Green == 1)
	 {
      echo '<div class="led-box3">';
      echo '<div class="green-led"></div>';
      echo '</div>';
	 }
	 else{
	  echo '<div class="led-box3">';
      echo '<div class="red-led"></div>';
      echo '</div>';
		 
	 }
	   }



	   if(isset($_POST["MOTOR"]))

	   {

		if($_POST["motoron"]=="ON" || $_POST["motoron"]=="on")

		{

			$dat2=1;

			$q1 ="UPDATE mytab SET data2 = $dat2";

	               mysqli_query($conn,$q1) or die("error 1.12");

		}else{

			$dat2=0;

			$q1 ="UPDATE mytab SET data2 = $dat2";

	               mysqli_query($conn,$q1) or die("error 1.13");

		   }
       $q  = "SELECT * FROM mytab";
	 $retVal = mysqli_query($conn,$q);
    if(! $retVal ) {
      die('Could not get data: ' . mysql_error());
       }
   
   while($row = mysqli_fetch_array($retVal, MYSQL_ASSOC)) {
              $s1Green = $row['data1'];
              $s2Green = $row['data2'];
		      $s3Green = $row['data3'];
           }
		   
 if($s1Green == 1)
	 {
      echo '<div class="led-box1">';
      echo '<div class="green-led"></div>';
      echo '</div>';
	 }else
	 {
	  echo '<div class="led-box1">';
      echo '<div class="red-led"></div>';
      echo '</div>';	 
	 }
   if($s2Green == 1)
	 {
      echo '<div class="led-box2">';
      echo '<div class="green-led"></div>';
      echo '</div>';
	 }
	 else{
	  echo '<div class="led-box2">';
      echo '<div class="red-led"></div>';
      echo '</div>';	 
	 }
   if($s3Green == 1)
	 {
      echo '<div class="led-box3">';
      echo '<div class="green-led"></div>';
      echo '</div>';
	 }
	 else{
	  echo '<div class="led-box3">';
      echo '<div class="red-led"></div>';
      echo '</div>';
		 
	 }
	   }





	   if(isset($_POST["FAN"]))

	   {

		if($_POST["fanon"]=="ON" || $_POST["fanon"]=="on")

		{

			$dat3=1;

			$q1 ="UPDATE mytab SET data3 = $dat3";

	               mysqli_query($conn,$q1) or die("error 1.14");

		}else{

			$dat3=0;

			$q1 ="UPDATE mytab SET data3 = $dat3";

	               mysqli_query($conn,$q1) or die("error 1.15");

		   }
		   
  $q  = "SELECT * FROM mytab";
	 $retVal = mysqli_query($conn,$q);
    if(! $retVal ) {
      die('Could not get data: ' . mysql_error());
       }
   
   while($row = mysqli_fetch_array($retVal, MYSQL_ASSOC)) {
              $s1Green = $row['data1'];
              $s2Green = $row['data2'];
		      $s3Green = $row['data3'];
           }
   if($s1Green == 1)
	 {
      echo '<div class="led-box1">';
      echo '<div class="green-led"></div>';
      echo '</div>';
	 }else
	 {
	  echo '<div class="led-box1">';
      echo '<div class="red-led"></div>';
      echo '</div>';	 
	 }
   if($s2Green == 1)
	 {
      echo '<div class="led-box2">';
      echo '<div class="green-led"></div>';
      echo '</div>';
	 }
	 else{
	  echo '<div class="led-box2">';
      echo '<div class="red-led"></div>';
      echo '</div>';	 
	 }
   if($s3Green == 1)
	 {
      echo '<div class="led-box3">';
      echo '<div class="green-led"></div>';
      echo '</div>';
	 }
	 else{
	  echo '<div class="led-box3">';
      echo '<div class="red-led"></div>';
      echo '</div>';
		 
	 }
	   }

?>

