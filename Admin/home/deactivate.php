<?php

include '../../conn.php';

$id = $_GET['id'];
mysqli_query($con,"update quiz set status = '1' where eid = '$id'");
header("Location:test2.php");


?>
