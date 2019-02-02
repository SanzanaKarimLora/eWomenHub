<?php
      $host='localhost';
      $user='root';
      $password='';
      $db='ewomenhub';

      $link=mysqli_connect($host,$user,$password,$db);


$sql1 ="UPDATE health SET status=1 WHERE status=0";

$b1=mysqli_query($link, $sql1) or die(mysqli_error()); 


$sql2 ="UPDATE home_decor SET status=1 WHERE status=0";

$b2=mysqli_query($link, $sql2) or die(mysqli_error()); 

$sql3 ="UPDATE cooking SET status=1 WHERE status=0";

$b3=mysqli_query($link, $sql3) or die(mysqli_error()); 


$sql4 ="UPDATE care SET status=1 WHERE status=0";

$b4=mysqli_query($link, $sql4) or die(mysqli_error()); 


?>



<?php

     mysqli_close($link); 
 
 ?>