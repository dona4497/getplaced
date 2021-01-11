<?php

include 'header.php';
include '../../conn.php';
?>


<!--h3>New Mock Test</h3-->
<br>
<table class="table table-bordered">
<th>Test ID</th><th>Test Title</th><th>No of Questions</th><th>Created on</th><th>Description</th>
<?php
$result = mysqli_query($con,"select * from quiz where status = '1'");

 while($row=mysqli_fetch_assoc($result))
 {

 echo "<tr><td>".$row['eid']."</td><td>".$row['title']."</td><td>".$row['total']."</td><td>".$row['date'].'</td><td>'.$row['intro'].'</td><td><a class="btn btn-success" href=activate.php?id='.$row["eid"].'>Activate</a></td></tr>';
 

 }
// echo '<script>alert("File uploaded successfully")</script>';
// echo '<script>alert("Test Approved successfully")</script>';



?>
</table>
<?php
//echo '<script>alert("File uploaded successfully")</script>';
include 'footer.php';

?>
