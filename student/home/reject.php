<?php

include '../../conn.php';

$id = $_GET['id'];
mysqli_query($con,"update login set status = 2 where uname = '$id'");
header("Location:teacher.php");


?>
