<?php

include 'header.php';
include '../../conn.php';
?>


<!--h3>DEACTIVATED TEST</h3-->
<br>
<table class="table table-bordered">
<th>Test ID</th><th>Test Title</th><th>No of Questions</th><th>Created on</th><th>Description</th>
<?php
$result = mysqli_query($con,"select * from quiz where status = '2'");

 while($row=mysqli_fetch_assoc($result))
 {

 echo "<tr><td>".$row['eid']."</td><td>".$row['title']."</td><td>".$row['total']."</td><td>".$row['date'].'</td><td>'.$row['intro'].'</td><td><a class="btn btn-danger" href=deactivate.php?id='.$row["eid"].'>Deactivate</a></td></tr>';


 }



?>
</table>
<?php

include 'footer.php';

?>
