<?php header("refresh:1;"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Sembedded Web</title>
</head>
<body>

<div style="background-color:#255652; color:white; height:400px;">
  <h1 align="center" style=""> Machine : 1  </h1>
  <h2 align="center">
    <?php
          include 'db.php' ;
          $q      = "SELECT value1 FROM tab1";
          $result = mysqli_query($conn,$q);
          while($row = mysqli_fetch_array($result))
          {
          echo $row{'value1'};
          }
          mysqli_close($conn);
    ?>
  </h2>
</div>

</body>
</html>
