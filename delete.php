<?php
 
 $link=mysqli_connect("localhost","root","","register");
  
  if($link===false)
  {
	  die("Error could not connect".mysqli_connect_error());
  }
 $sid=$_POST['id'];
 
 $sql="delete from info where id=$sid";
 
 $result=@mysqli_query($sql,$link);
 
 
 if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
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


 