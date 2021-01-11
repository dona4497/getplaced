<?php
session_start();
$pid=$_SESSION["user"];
include 'header.php';
include '../connection.php';
?>


<h3>New learning Additions</h3>
<br>
<table class="table table-bordered">
<th>Exam Id</th><th>Exam Title</th><th>Date</th><th>Desc</th><th>Mark</th>
<?php


$result = mysqli_query($con,"select quiz.*,history.* from quiz,history where quiz.eid=history.eid and history.email='$pid'");

 while($row=mysqli_fetch_assoc($result))
 {
 echo "<tr><td>".$row['eid']."</td><td>".$row['course_name']."</td><td>".$row['course_type']."</td><td>".$row['duration'].'</td><td>'.$row['date'].'</td><td><a class="btn btn-success" href=viewchapters.php?id='.$row["course_id"].'>Enter</a></td><td><a class="btn btn-danger" href=drop.php?id='.$row["course_id"].'>Drop Course</a></td></tr>';



 }



?>
</table>
<?php

include 'footer.php';

?>
