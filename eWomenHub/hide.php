<?php
      $host='localhost';
      $user='root';
      $password='';
      $db='ewomenhub';

      $link=mysqli_connect($host,$user,$password,$db);


$sql1 ="UPDATE cooking
        SET status = 0
        WHERE h_id IN (7,8,9,10);";

$b1=mysqli_query($link, $sql1) or die(mysqli_error()); 


$sql2 ="UPDATE home_decor SET status=0 WHERE h_id IN(3,4)";

$b2=mysqli_query($link, $sql2) or die(mysqli_error());

$sql3 ="UPDATE care
        SET status = 0
        WHERE h_id IN (7,8,9,10);";

$b3=mysqli_query($link, $sql3) or die(mysqli_error()); 


$sql4 ="UPDATE health SET status=0 WHERE h_id IN(3,4)";

$b4=mysqli_query($link, $sql4) or die(mysqli_error()); 

?>



<?php

     mysqli_close($link); 
 
 ?>