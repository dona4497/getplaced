<?php
include 'header.php';
include '../../conn.php';
$result = mysqli_query($con,"select * from material");
echo "<h3>Study Material Page: Please use the below materials to prepare for trainings</h3>";
echo "<br/>";
echo "<div class='container'>";
echo "<div class='row' cellpadding='10px'>";
while($row=mysqli_fetch_assoc($result))
 {
	  $id=$row['filename'];

	  ?>


			<div class=" col text-center">
        <h6><?php echo $id ?></h6>
        <video controls width="450" height="450"
             autoplay loop muted
              poster="poster.png">
         <source src="../../video/<?php echo $id ?>" type="video/mp4">
         <p>Your browser doesnt support HTML video. Here is a <a href="../../video/test.mp4">link to the video</a> instead.</p>
       </video>

			</div>




	  <?php

 }

?>

</div>
</div>
