<?php
$con = mysqli_connect("localhost","root","root@123","ASD");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$sql="INSERT INTO auth
VALUES
('$_POST[username]','$_POST[email]','$_POST[pass]','$_POST[cpass]','$_POST[img]')";
 
mysqli_query($con,$sql);
setcookie("uname",$_POST[username] , time()+2*24*60*60); 

header("Location:./landing/landing.php");

mysqli_close($con);
?>

