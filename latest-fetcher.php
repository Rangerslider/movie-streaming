<?php
include 'database.php';


  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);


  $i=$count+13;
  $k=$i;
  $j=$k-2;
  $newim = "SELECT * FROM movies WHERE mid BETWEEN '$j' AND '$k' ORDER BY mid DESC" ;
  $newrecords = mysqli_query($conn,$newim);
    while($fetchr = mysqli_fetch_assoc($newrecords)){

      echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$fetchr['imgpath']."' height='250' width='300' style='margin-top: 30px;margin-left:50px;margin-right:50px;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:300px;padding-bottom:15px;margin-bottom:30px;margin-left:50px;margin-right:20px;' value='".ucwords($fetchr['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";


    }

    ?>
