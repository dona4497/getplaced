<?php

include 'header.php';
include '../../conn.php';
?>


<h3>New Teacher Registrations</h3>
<br>
<table class="table table-bordered">
<th>Name</th><th>Email</th><th>phone</th><th>Course</th><th>Stream</th>
<?php
$result = mysqli_query($con,"select teacher.*,login.* from teacher,login where teacher.uname=login.uname and login.status = 0");

 while($row=mysqli_fetch_assoc($result))
 {

 echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phno']."</td><td>".$row['course'].'</td><td>'.$row['stream'].'</td><td><a class="btn btn-success" href=approve1.php?id='.$row["uname"].'>Approve</a></td><td><a class="btn btn-danger" href=reject1.php?id='.$row["uname"].'>Reject</a></td></tr>';


 }



?>
</table>
<?php

include 'footer.php';

?>
