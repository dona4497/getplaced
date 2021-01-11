<?php
ob_start();
session_start();
include '../../conn.php';
$uname=$_POST["username"];
$pass=$_POST["pass"];
if ($uname=="admin" && $pass=="admin")
{
	header('location:../../admin/home/index.html');
}
else {

$res=mysqli_query($con,"select * from login where uname='$uname' and pwd='$pass'");
if($row=mysqli_fetch_assoc($res))
{
	$utype=$row["type"];
	$status=$row["status"];
  if($status == '0')
	{
		echo "<script>alert('Sorry, User not verified yet')</script>";
  echo "<script>window.location.href='login.html'</script>";

	}


	if($status == '2')
	{
		echo "<script>alert('Sorry, User Application is Rejected')</script>";
  echo "<script>window.location.href='login.html'</script>";

	}



else {

	if($utype=="student")
	{
		header('location:../../student/home/index.php');
		$_SESSION["user"]=$uname;
	}
	else if($utype=="teacher")
	{
		header('location:../../teacher/home/index.html');
		$_SESSION["user"]=$uname;
	}
	else
	{


		 echo "<script>alert('Username or password is incorrect')</script>";
		echo "<script>window.location.href='login.html'</script>";


	}
}
}
else {
	{


		 echo "<script>alert('oops! Username or password is incorrect. Please try again.')</script>";
		echo "<script>window.location.href='login.html'</script>";

	}
}
}

?>
