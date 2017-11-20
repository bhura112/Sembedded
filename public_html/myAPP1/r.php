
<?php
  include "db.php";
   $q1="SELECT data1,data2,data3 FROM mytab ORDER BY id DESC LIMIT 1";
	 $getDATA=mysqli_query($conn,$q1);
	 if($getDATA)
	 {
		while ($row=mysqli_fetch_row($getDATA))
			{
			  $buff1=$row[0];
			  $buff2=$row[1];
			  $buff3=$row[2];
			} 
			
			mysqli_free_result($getDATA);
	 }
      echo $buff1,$buff2,$buff3;
?>