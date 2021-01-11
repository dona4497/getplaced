<?php

include 'header.php';
include '../../conn.php';
?>


<h3>New Student Users</h3>
<br>
<table class="table table-bordered">
<th>Name</th><th>Email</th><th>phone</th><th>ID</th><th>Department</th>
<?php
$result = mysqli_query($con,"select stud_personal.*,stud_eq.course,login.uname from stud_personal,stud_eq,login where stud_personal.std_id = stud_eq.std_id and stud_personal.uname=login.uname and login.status = 0");

 while($row=mysqli_fetch_assoc($result))
 {

 echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phno']."</td><td>".$row['std_id'].'</td><td>'.$row['course'].'</td><td><a class="btn btn-success" href=approve.php?id='.$row["uname"].'>Approve</a></td><td><a class="btn btn-danger" href=reject.php?id='.$row["uname"].'>Reject</a></td></tr>';


 }


?>
</table>
<?php

include 'footer.php';

?>
