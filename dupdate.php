
<?php

  $link=mysqli_connect("localhost","root","","register");
  
  if($link===false)
  {
	  die("Error could not connect".mysqli_connect_error());
  }


   $sid=$_POST['stu_id'];
  $ffname=$_POST['stu_fname'];
  $llname=$_POST['stu_lname'];
  $eemail=$_POST['stu_email'];
  $aaddress=$_POST['stu_address'];



  $sql="update info set fname='$ffname',lname='$llname',email='$eemail',address='$aaddress' where id=$sid";
 
  $result=@mysqli_query($sql,$link);
 
 if ($link->query($sql) === TRUE) {
    echo "Record Updated successfully";
} else {
    echo "Error updated record: " . $link->error;
}

 mysqli_close($link);

?>

<html>
<head></head>
<body>
<form action ="registration.php">
<center>
<button type="SUBMIT" >Back</button>
</center>
</form>
</body>
</html>