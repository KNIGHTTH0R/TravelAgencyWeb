<?php
session_start();
  if(!isset($_SESSION['username'])) {
   header("Location:Login-1.php");
}

    ?>
<html>
<head><link rel="stylesheet" type="text/css" href="settings.css">
<title>Login</title>
</head>

<?php include 'home.php';?>
<div id="white">
<h1>You are already logged in!</h1>
</div>  
    <a href="logout.php">Logout</a>

    
</ul>
</body>
</html>