<?php              
include '../conn.php';
    $hd=$_POST["hd"];
    $cont=$_POST["cont"];
	//$dt=date('y/m/d')
    $result=mysqli_query($con,"insert into tb_not(date,hd,note) values('0','$hd','$cont')");
echo"Notification added";
?>