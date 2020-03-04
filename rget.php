<?php

$link=mysqli_connect("localhost","root","","register");

if($link===false)
{
	die("ERROR:could not connect database".mysqli_connect_error());
}



  $_GET["stu_id"]; 
 $_GET["stu_fname"];
  $_GET["stu_lname"];
 $_GET["stu_email"];
 $_GET["stu_address"];


$id=mysqli_real_escape_string($link,$_REQUEST['stu_id']);
$fname=mysqli_real_escape_string($link,$_REQUEST['stu_fname']);
$lname=mysqli_real_escape_string($link,$_REQUEST['stu_lname']);
$email=mysqli_real_escape_string($link,$_REQUEST['stu_email']);
$address=mysqli_real_escape_string($link,$_REQUEST['stu_address']);

$sql="insert into info(id,fname,lname,email,address)values('$id','$fname','$lname','$email','$address')";

echo "<br>";
echo "<br>";
if(mysqli_query($link,$sql))
  {
	 echo " Record inserted successfully "; 
  }
  else
  {
	  echo "could not be execute".mysqli_error($link);
  }
  mysqli_close($link);
?>



<html>
<head></head>
<body>
<form action ="registration.php">
<button type="SUBMIT" >Back</button>
</form>
</body>
</html>
