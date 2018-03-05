<?php

session_start();

$connect = mysql_connect('athena01.fhict.local','dbi343203','rjMmtMVOSx') or die (mysql_error());
mysql_select_db('dbi343203');
if (isset($_POST['enter'])) //pushing of button "LOGIN"
{
    $e_login = $_POST['username'];
    $e_password = md5($_POST['password']);

    $query = mysql_query("SELECT * FROM users WHERE username = '$e_login'");
    $user_data = mysql_fetch_array($query);



    if ($user_data['password'] == $e_password)
    {
        
        $_SESSION['username']=$e_login;
        setcookie("cookie_name","$e_login",time()+7200,"/");
        header("Location: index.php");
    exit;
    }
    else
    {
        echo "Wrong login or password";
    }
}

?>

<!document html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="settings.css">
<title> LOGIN</title>



</head>

<?php include 'home.php';?>
<div class="relative">
    <br><br>
    <div id="white">
<form method="post">
<h1 > Log In</h1>
  Username:<br>

  <input type="text" name="username"><br>
   Password:<br>
  <input type="password" name="password">
 <br><br>
  <button type="submit" name="enter"login>Log In </button>
<a id="reg"; href="Registor.php">Register</a>


</form>
        </div>
</div>





</body>


</html>