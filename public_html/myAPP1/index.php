<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="index.css"/>

<meta charset="UTF-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<title>SofconEmbeddedSystems</title>
</head>

<body>

<div class="divHead">
 
</div>

 <div class="hname">
    <p>SMC India</p>
  </div>
 
<div class="div1">
<p>Led Panel</p>
<form method="post">
<input type="text" class="ledon"  name="ledon"   placeholder="LED ON/OFF">
<br>
<br>
<input type="submit" class="s1button" name="LED"  value="LED" /><br><br>
</form>
</div>

<div class="div2">
<p>Motor Panel</p>
<form method="post">
<input type="text" class="motoron"  name="motoron" placeholder="MOTOR ON/OFF">
<br>
<br>
<input type="submit" class="s2button" name="MOTOR"  value="MOTOR" /><br><br>
</form>
</div>

<div class="div3">
<p>Fan Panel</p>
<form method="post">
<input type="text" class="fanon"  name="fanon" placeholder="FAN ON/OFF">
<br>
<br>
<input type="submit" class="s3button" name="FAN"  value="FAN" /><br><br>
</form>
</div>
<?php
  include 'db.php';
  include 'putDATA.php';
    
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
?>      
      
</body>

</html>

