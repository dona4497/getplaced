<?php              
include '../conn.php';
    $stid=$_POST["sid"];
    $fname=$_POST["first-name"];
    $lname=$_POST["last-name"];
	$gender=$_POST["gender"];
	$dob=$_POST["dob"];
	$hname=$_POST["hname"];
	$place=$_POST["place"];
	$dist=$_POST["dist"];
	$pin=$_POST["pin"];
	$dep=$_POST["course"];
	$str=$_POST["stream"];
    $email_id=$_POST["email"];
	$phno=$_POST["phone"];
	$pg=$_POST["pper"];
	$deg=$_POST["gper"];
	$ptwo=$_POST["ptper"];
	$ten=$_POST["tenper"];
	
	$uname=$_POST["uname"];
	
	$password1=$_POST["pass"];
	$password2=$_POST["rpass"];
	
	$secqn=$_POST["sqn"];
	$ans=$_POST["ans"];
	$name=$fname.$lname;
	$addr=$place.$dist.$pin;

  



	if ($password1==$password2) {
	
		$result=mysqli_query($con,"insert into stud_personal(std_id,uname,name,email,phno,dob,gender,address) values('$stid','$uname','$name','$email_id','$phno','$dob','$gender','$addr')");
        $result1=mysqli_query($con,"insert into stud_eq(std_id,course,stream,perc10,percp2,percdeg,percpg) values('$stid','$dep','$str','$ten','$ptwo','$deg','$pg')");
        $result2=mysqli_query($con,"insert into login(uname,pwd,status,sec_q,ans,type) values('$uname','$password2','0','$secqn','$ans','student')");
		echo"Successfully registered";

header('location:/getplaced/guest/startpage/index.html');
}
?>