<?php
$link=mysqli_connect("localhost","root","","register");

if($link===false)
{
	die("ERROR:could not connect database".mysqli_connect_error());
}

$sql="select * from info";

$result=mysqli_query($link,$sql);
if(!$result)
{
	die('could not getdata'.mysql_error());
}

   

?>


<html>
<title>
<head> fetch data Student Record</head>
</title>
<body>
    <table align="center" border="2px" style ="width:600px" >
	<tr>
	  <th colspan="5px"><h2> student record</h2></th>
	  </tr>
	  <t>
	  <th>id</th>
	  <th>fname</th>
	  <th>lname</th>
	  <th>email</th>
	  <th>address</th>
	  </t>

     <?php
	    while($row=mysqli_fetch_assoc($result))
		{	 //echo "hjarsa";
	 ?>
	 
	     <tr>
		   <td><?php  echo "{$row['id']}"; ?></td>
		   <td><?php  echo "{$row['fname']}"; ?></td>
		   <td><?php  echo "{$row['lname']}"; ?></td>
		   <td><?php  echo "{$row['email']}"; ?></td>
		   <td><?php  echo "{$row['address']}"; ?></td>
		 
		 </tr>
		 <?php
		}
		?>
	
	</table>

</body>
</html>



<html>
<head></head>
<body>
<form action ="registration.php">
<button type="SUBMIT" >Back</button>
</form>
</body>
</html>