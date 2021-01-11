<?php

include '../../conn.php';

$id = $_GET['id'];
mysqli_query($con,"update quiz set status = '2' where eid = '$id'");
echo '<script>alert("File uploaded successfully")</script>';
//header("Location:test2.php");

header("Location:test.php");
?>
