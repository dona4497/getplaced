<?php include 'header.php'; ?>
<form action="#" method="post">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 align="center">Add Material</h1></td>
</tr><center>

<table border='0' width='480px' align='center'>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Select Material:</b></td>
    <td><input type="file" name="demo" required accept="video/*"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>



<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><b><input type='submit' name='REGISTER' value="Add Notification"></b></td>
</tr>
</table>
</table>
</table>
</form>
</body>
</html>



<?php
include '../../conn.php';
if(isset($_POST['REGISTER']))
{

	$cat=$_POST['demo'];

				$result=mysqli_query($con,"insert into material(filename) values('$cat')");
            $number="9745547284";
            $text=$cat;

        $url="https://www.way2sms.com/api/v1/sendCampaign/";
        $message = urlencode("$text");// urlencode your message
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
        curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=83D7JVOQ30XK0ETPRI4UT6YT9U1AVC2B&secret=52ZIV5MTDYNIPRMO&usetype=stage&phone=$number&senderid=nibinbabu997@gmail.com&message=$message");// post data
        // query parameter values must be given without squarebrackets.
         // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        //echo $curl;
        curl_close($curl);
        //echo $result;

}
include 'footer.php';
?>
