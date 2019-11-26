
<?php
$con = mysqli_connect("localhost","root","root@123","ASD");
if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

$message="";

if(count($_POST)>0) {
	
	$result = mysqli_query($con,"SELECT * FROM auth WHERE Username='" . $_POST["username"] . "' and Password = '". $_POST["pass"]."'");
	
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
		echo $message;
		
	} else {
		header("Location:../landing/landing.php");
	}
	
}

?>
