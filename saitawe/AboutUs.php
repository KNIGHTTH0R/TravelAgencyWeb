<?php
session_start();
  if(!isset($_SESSION['username'])) {
   header("Location:Login-1.php");
}

    ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="settings.css">
<title>Rodopa Travels</title>
</head>
<center><body bgcolor="#30558A" background="http://s8.postimg.org/fj9z9eaf9/back.jpg"></body>
<?php include 'home.php';?>
    <pre class="aboutus">500 Baker Street
    San Francisco,CA 94158
    iskrena.tsvetkova@gmail.com
Tel:123-456-7890
Fax:123-456-7890</pre>
    <img src=http://s30.postimg.org/uv77pmhxd/20160228022837.jpg" alt=""  border="0"width="350" height="350">
     <img src=http://s30.postimg.org/aqdnk5o3l/20160228022853.jpg" alt=""  border="0"width="350" height="350">   
    
<?php include 'footer.php';?>
    
</ul>
</body>
</html>