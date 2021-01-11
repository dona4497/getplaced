<!doctype html>
<?php include 'header.php'; ?>

<form action="" method="post" enctype="multipart/form-data">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>

	<center><tr>
   <td><h1 align="center">Add Notifications</h1></td>
</tr><center>

<table border='0' width='480px' align='center'>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align="center"><b>Notification Content:</b></td>
   
    <td><input type='text' name='cname' required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>



<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><b><input type='submit' name='REGISTER' value="Add Notification"></b></td>
</tr>
</table>
</table>
</table>
</form> 






<?php
include '../../conn.php';
 // Using database connection file here
//if(isset($_POST['submit']) && !empty($_POST['submit'])){
if(isset($_POST['REGISTER'])){
	$sql="INSERT INTO notification(notification)
VALUES ('$_POST[cname]')";
 mysqli_query($con,$sql);
 echo '<script>alert("Notification added successfully")</script>'; 
//echo "Notification added successfully";
//if(isset($_POST['submit'])){
 /*$fullname = $_POST['cname'];
$sql="INSERT INTO notification (notification) VALUES ('".$fullname."')";*/

//echo "Notification added successfully";

/*if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }*/
  //else
  //{
 
}

mysqli_close($con);

?>

</body>
</html>

