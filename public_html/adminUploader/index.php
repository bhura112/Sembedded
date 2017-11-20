<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/index.css"/>
<link rel="stylesheet" type="text/css" href="css/index1.css"/>

<title>Admin Uploader</title>
<script language="JavaScript" type="text/javascript">
function HandleBrowseClick()
{
	
    var fileinput = document.getElementById("fileToUpload");
	document.getElementById("pname").innerHTML=fileinput.value;
	fileinput.click();
    
}
</script>
</head>

<body>
<header class="header">
<div class="webname">
<p class="webname1">SEmbedded Web</p>
</div>
<div class="header-content">
<table class="table1">
     <th class="th1">
     <td class="td1"> <a href="8051/index.php"> 8051 Series </a></td>
     <td class="td2"> <a href="avr/index.php">  Avr Series  </a></td>
     <td class="td3"> <a href="pic/index.php">  Pic Series  </a></td>
     <td class="td4"> <a href="arm/index.php"> Arm Series   </a></td>
     <td class="td5"> <a href="rtos/index.php"> Rtos   </a></td>
     <td class="td6"> <a href="linux/index.php"> Linux   </a></td>
     <td class="td7"> <a href="contact/index.php"> Contact Us</a></td>
     </th>
</table>
</div>
</header>

<div class="fileUploader1">

 <form action="upload.php" method="post" enctype="multipart/form-data">
    <p>Select File To Upload:</p>
    <input class="custom-file-input" type="file" name="fileToUpload" style="display: none" id="fileToUpload"/>
    <p type="text" id="pname">No File Selected</p>
    <input type="button" value="Click to select file" id="fakeBrowse" onclick="HandleBrowseClick();"/>
    <input type="submit" id="uploadBtn" value="Upload File" name="submit"/>
</form>


</div>
</body>
</html>