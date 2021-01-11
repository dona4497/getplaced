<?php

session_start();
$pid=$_SESSION["user"];
include 'header.php';
include '../../conn.php';
?>


<h3>All Notifications</h3>
<br>
<table class="table table-bordered">
<th>S.No</th><th>Notification</th>
<?php


$result = mysqli_query($con,"select * from notification order by id desc");

 while($row=mysqli_fetch_assoc($result))
 {
 echo "<tr><td>".$row['id']."</td><td>".$row['notification']."</td></tr>";



 }



?>
</table>
<?php

include 'footer.php';

?>
