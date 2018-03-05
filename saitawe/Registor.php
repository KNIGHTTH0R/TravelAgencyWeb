
<?php
session_start();




$connect = mysql_connect('athena01.fhict.local','dbi343203','rjMmtMVOSx') or die (mysql_error());
mysql_select_db('dbi343203');

if (isset($_POST['submit']))
{
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
	$address = $_POST['address'];
	$mail = $_POST['email'];
	$name = $_POST['username'];
	$password = $_POST['password'];
	
 if (strlen($password)<5)
        {

            echo "
			<script>
			alert(\"Password should have be more than 5 characters\");
			</script>";
        }
 elseif(!preg_match("~([a-zA-Z0-9!#$%&\'*+-/=?^_`{|}\~])@([a-zA-Z0-9-]).([a-zA-Z0-9]{2,4})~", $mail))
        {
             echo "
			<script>
			alert(\"Your email is not valid\");
			</script>";
                
        }
 elseif(!preg_match('|^[-А-Яа-яA-Za-z0-9_]*$|',$name))
        {
            echo "
			<script>
			alert(\"Username has invalid symbols\");
			</script>";
           
        }
		else
		{
			
		 echo"
			<script>
			alert(\"Account successfully created!\");
			</script>";
           
    $password = md5($password);
    $query = mysql_query("INSERT INTO  users VALUES ('$firstname','$lastname','$dob','$address','$mail','$name','$password')") or die(mysql_error());
          
		}
 

}



?>


<!document html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="settings.css">
<title> Register</title>



</head>
<center><body background="http://s8.postimg.org/fj9z9eaf9/back.jpg">
<?php include 'home.php';?>
  
    
<div >
	<?php include("banner.php"); ?>
</div>
<div class="relative">
    <br>
	
	<div id="white">
<form action="Registor.php" method="POST">
<h1> Registration form</h1>
     First Name:<br>
  <input type="text" name="firstname" required><br>
      Last Name: <br>
  <input type="text" name="lastname" required><br>
  Date of Birth:<br>
  <input type="date" name="dob" required> <br>
        Address:<br>
  <input type="text" name="address" required><br>
         E-mail:<br>
  <input type="email" name="email" required><br>
       Username:<br>
  <input type="text" name="username" required><br>
       Password:<br>
  <input type="password" name="password" required><br><br>
  
  <input type="submit" name="submit" value="Registration" > <br><br><br><br><br><br>
</form>
    </div>



    <br><br><br>
</div>

</body>




</html>