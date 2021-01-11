<?php
include 'header.php';
include '../../conn.php';
/*global $video_path;
$video_path ='videos/';

$query = "SELECT * FROM videos ORDER BY id DESC";
$sql=mysqli_query($GLOBALS['db'],$query);
$row=mysqli_fetch_array($sql);
?>

<video width="100%" controls>
<source src="<?php echo $GLOBALS['video_path'].$row['product_video'];?>">
</video>*/
 

/*$fetchVideos = mysqli_query($con, "SELECT filename, fileextension FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       //$location = $row['location'];
 	$videos_field= $row['filename'];
 	?>
//$video_show= "videos/";
       echo "<div >";

       <source src="/path/to/video/<?php echo $videos_field; ?>" type="video/mp4">
      // echo "<video src='".$videos_field."' controls width='320px' height='200px' >";
       echo "</div>";
  

	  <?php
   }*/





 $query = "SELECT  filename, fileextension FROM videos ORDER BY ID DESC LIMIT 5"  ;

        $result=    mysqli_query($con, $query);
        echo "<h3>Study Material Page: Please use the below materials to prepare for trainings</h3>";

/*$result= mysqli_query( "SELECT  filename, fileextension FROM videos ORDER BY ID DESC LIMIT 5" ) 
or die("SELECT Error: ".mysql_error()); */

print "<table border=1>\n"; 
while ($row = mysqli_fetch_array($result)){ 
$videos_field= $row['filename'];
$video_show= "videos/$videos_field";
//$descriptionvalue= $row['description'];
$fileextensionvalue= $row['fileextension'];

print "<tr>\n"; 
/*print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";*/
print "\t<td>\n"; 
echo "<div align=center><video width='320' controls><source src='$video_show' type='video/$fileextensionvalue'>Your browser does
not support the video tag.</video></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n";  





/*$result= mysql_query( "SELECT  filename, fileextension FROM videos ORDER BY ID DESC LIMIT 5" ) 
or die("SELECT Error: ".mysql_error()); 

print "<table border=1>\n"; 
while ($row = mysql_fetch_array($result)){ 
$videos_field= $row['filename'];
$video_show= "videos/";
//$descriptionvalue= $row['description'];
$fileextensionvalue= $row['fileextension'];
print "<tr>\n"; 
print "\t<td>\n"; 
//echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
/*echo "<div align=center><video width='320' controls><source src='$video_show' type='videos/$fileextensionvalue'>Your browser does
not support the video tag.</video></div>";*/
/*print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n";  */

?> 