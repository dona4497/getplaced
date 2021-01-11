<?php              
include '../conn.php';
    $tid=$_POST["tid"];
    $fname=$_POST["first-name"];
    $lname=$_POST["last-name"];
	$dep=$_POST["course"];
	$str=$_POST["stream"];
    $email=$_POST["email"];
	$phno=$_POST["phone"];
	$uname=$_POST["uname"];
	
	$password1=$_POST["pass"];
	$password2=$_POST["rpass"];
	$secqn=$_POST["sqn"];
	$ans=$_POST["ans"];
	$name=$fname.$lname;
	if ($password1==$password2) {
		$result=mysqli_query($con,"insert into teacher(tid,uname,name,course,stream,email,phno) values('$tid','$uname','$name','$dep','$str','$email','$phno')");
		$result=mysqli_query($con,"insert into login(uname,pwd,status,sec_q,ans,type) values('$uname','$password2','0','$secqn','$ans','teacher')");


header('location:/getplaced/guest/startpage/index.html');
}
?>