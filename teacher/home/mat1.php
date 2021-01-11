<!doctype html>
<?php include 'header.php'; ?>
<html>
  <body>
<form action="" method='post' enctype="multipart/form-data">


  <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 align="center">Add Material</h1></td>
</tr></center>

<table border='0' width='480px' align='center'>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Select Material:</b></td>
    <td><input type='file' name='file'/></td>
</tr>
<tr> <td>&nbsp;</td> </tr>

<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center' ><b><input type='submit' name='submit' value='Upload'/></b></td>
</tr>
</table>
</table>
</table>
</form>





<?php 
include '../../conn.php';


    if(isset($_POST['submit'])){
        $name       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name'];  
        $position= strpos($name, "."); 
        $fileextension= substr($name, $position + 1);
        $fileextension= strtolower($fileextension);
        $success= -1;
        if(isset($name) and !empty($name)){
            $path= 'videos/'; 
            if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm")){
            $success=0;
            echo '<script>alert("The file extension must be .mp4, .ogg, or .webm in order to be uploaded")</script>';
             //echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
            }    
            else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")){
            $success=1;
             echo '<script>alert("File uploaded successfully")</script>'; 
            if(move_uploaded_file($temp_name, $path.$name)){
               //echo 'File uploaded successfully';
            }
             if($success == 1){
            $query = "INSERT INTO videos(filename, fileextension) VALUES('".$name."','".$fileextension."')";

              mysqli_query($con,$query);
               //echo 'File uploaded successfully';
           }
          

        }
      }
    }




/*$name = $_FILES['file']['name'];

//$tmp_name= $_FILES['file']['tmp_name'];

//$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

//$description= $_POST['description_entered'];

$success= -1;

/*$descript= 0;

if (empty($description))
{
$descript= 1;
}

if (isset($name)) {

$path= 'videos/';

if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
$success=0;
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
$success=1;
if (move_uploaded_file($name, $path.$name)) {
echo 'Uploaded!';
}
}
}
}*/
/*if($success == 1){
      $query = "INSERT INTO videos(filename, fileextension) VALUES('".$name."','".$fileextension."')";

              mysqli_query($con,$query);
              //echo "Upload successfully.";
/*mysql_query("INSERT INTO $videos ( filename, fileextension)
VALUES ( '$name', '$fileextension')");*/
//}
 
?>

</body>
</html>
