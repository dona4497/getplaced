<?php

include '../../conn.php';

$id = $_GET['id'];
mysqli_query($con,"update login set status = 1 where uname = '$id'");
header("Location:Student.php");


?>