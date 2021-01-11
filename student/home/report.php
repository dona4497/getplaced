<?php
session_start();
$pro=$_SESSION["user"];
include '../../conn.php';
include 'header.php';
$val1=0;
$val2=0;
$val3=0;
$val4=0;
$result=mysqli_query($con,"select quiz.*,history.* from quiz,history where quiz.eid=history.eid and history.email='$pro'");
while($row=mysqli_fetch_assoc($result))
 {
   $eid=$row['eid'];

      $score=$row['score'];
      $qns=$row['level'];
      $corr=$row['sahi'];
      $wrng=$row['wrong'];
      $val1= intval($corr) * intval($qns);
      $val2= intval($score);
     /* $val1= intval($val1) + intval($score) * intval($qns);
      $val2= intval($val2) + (intval($score) * intval($corr) - intval($wrng) * 3);*/



 }
 if($val1>0 && $val2>0)
 {
$val1=$val1/10;
$val2=$val2/10;
}
else if($val1>0 && $val2<0)
{
  $val1=$val1/10;
  $val2=0;
}
else if($val1<0 && $val2>0)
  {
    $val2=$val2/10;
    $val1=0;
  }
 ?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Percentage', 'Learning'],
          ['Progress',     <?php echo $val1 ?>],
          ['For improvement',      <?php echo $val2 ?>]
        ]);

        var options = {
          title: 'My Course Tracker',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>

    <table class="table table-bordered" >
    <th>exam ID</th><th>Date</th><th>Exam Title</th><th>Total Score</th></th><th>Your Score</th>
    <?php
    $result=mysqli_query($con,"select quiz.*,history.score,history.email from quiz,history where quiz.eid=history.eid and history.email='$pro'");
    while($row=mysqli_fetch_assoc($result))
     {
          $score=$row['score'];
          $qns=$row['total'];
          $corr=$row['sahi'];
          $wrng=$row['wrong'];
          $val3= intval($corr) * intval($qns);
          //$val4= intval($score) * intval($corr) - intval($wrng) * 3;
          $val4= intval($score);


          echo "<tr><td>".$row['eid']."</td><td>".$row['date']."</td><td>".$row['title']."</td><td>".$val3."</td><td>".$val4."</td></tr>";

        }




    ?>
    </table>
  </body>
</html>
