

<html>

<head>
    <title><h1>Registration Form<h1></title>
	<style >
	
	</style>
	
</head>

<center>
<body>
 
  <form action="rget.php" method="get">
  <h1 style="color:green">REGISTRATION FORM<h1>
  
  <table width="450px">
  <tr>
   <td><label for="ID" >ID</label></td>
    
   <td><input type="  text" name="stu_id" maxlength="50" size="30"></td>
   </tr>
   
   <tr><td><label for="FNAME" >FNAME</label></td><td><input type="  text" name="stu_fname" maxlength="50" size="30"></td></tr>
   <tr><td><label for="LNAME" >LNAME</label></td><td><input type="  text"  name="stu_lname" maxlength="50" size="30"></td><tr>
   <tr><td><label for="EMAIL" >EMAIL</label></td><td><input type="  text" name="stu_email"maxlength="50" size="30"></td><tr>
   <tr><td><label for="ADDRESS" >ADDRESS</label></td><td><input type="  text"  name="stu_address" maxlength="50" size="30"></td><tr>
   </table>
   <table>
   <p align="left">
   <tr><td colspan="8" style="text:align:center"><button type="SUBMIT" >REGISTER</button maxlength="50" size="50"></td></tr>
   </p>
   </table>
  </form>
 
  
  <form action="table.php">
   <table>
   <p align="right">
   <tr><td colspan="8" style="text:align:center"><button type="SUBMIT" >CHECK RECORD</button maxlength="50" size="50"></td></tr>
   </p>
   </table> 
  </form>
  <form action="update.php" >
   <table>
   <p align="right">
   <tr><td colspan="8" style="text:align:center"><button type="SUBMIT" >UPDATE</button maxlength="50" size="50"></td></tr>
   </p>
   </table>
  </form>
  

  <form action="delete.php" method="post">
  <table width="450px">
   <tr><td><label for="ID">ID</label></td><td><input type="text"  name="id"></td></tr>
   <p align="right">
   <tr><td colspan="8" style="text:align:center"><button type="SUBMIT" >DELETE</button maxlength="50" size="50"></td></tr>
   </p>
   
   </table>
  </form>




</body>
</center>
</html>