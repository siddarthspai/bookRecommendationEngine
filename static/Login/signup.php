
<?php
$con = mysqli_connect("localhost","root","root@123","ASD");
if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }



$sql="INSERT INTO auth

VALUES

('$_POST[username]','$_POST[email]','$_POST[pass]','$_POST[cpass]')";

 
mysqli_query($con,$sql);

header("Location:../landing/landing.php");

 

mysqli_close($con);

?>

