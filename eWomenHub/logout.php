<?php

$host='localhost';
$user='root';
$password='';
$db='ewomenhub';

$link=mysqli_connect($host,$user,$password,$db);

session_start();
if (isset($_SESSION['Email']))
{
    unset($_SESSION['Email']);


}
session_destroy();

/*$sql1 ="UPDATE health SET status=0 WHERE status=1";

$b1=mysqli_query($link, $sql1) or die(mysqli_error());


$sql2 ="UPDATE home_decor SET status=0 WHERE status=1 and (h_id=3 or h_id=4)";

$b2=mysqli_query($link, $sql2) or die(mysqli_error());

$sql3 ="UPDATE care SET status=0 WHERE status=1 and (h_id=3 or h_id=4)";

$b3=mysqli_query($link, $sql2) or die(mysqli_error());


$sql4 ="UPDATE cooking SET status=0 WHERE status=1 and (h_id=3 or h_id=4)";

$b4=mysqli_query($link, $sql2) or die(mysqli_error());*/

include "hide.php";

header("location:homepage.php");

mysqli_close($link);

 ?>
