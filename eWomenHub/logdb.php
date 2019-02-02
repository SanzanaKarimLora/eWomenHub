
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }






$host = 'localhost';
$user = 'root';
$password = '';
$datab='ewomenhub';
$link = mysqli_connect($host, $user, $password,$datab);

/*if(!$link){
  echo 'Not connected to server';
}
if(!mysqli_select_db($link,'project')){
  echo 'Database not selected';
}
*/


$email2 = '';
$password2 = '';


if(isset($_POST["login"])){

    $email2 = $_POST["email2"];
    $password2 = $_POST["pass2"];

        //$passw2=md5($password2);
      	$query = mysqli_query($link,"SELECT * FROM user where user_email='$email2' ");
        $query2 = mysqli_query($link,"SELECT * FROM user where user_password='$password2' ");

              if((mysqli_num_rows($query) >0 )&& (mysqli_num_rows($query2) >0 ))
              {

                  header("location:homepage.php"); //redirect
                  $_SESSION['Email']=$email2;

                    $_SESSION['Password']=$password2;

                    $sql1 ="UPDATE health SET status=1 WHERE status=0";

                    $b1=mysqli_query($link, $sql1) or die(mysqli_error());


                    $sql2 ="UPDATE home_decor SET status=1 WHERE status=0";

                    $b2=mysqli_query($link, $sql2) or die(mysqli_error());

                    $sql3 ="UPDATE cooking  SET status=1 WHERE status=0";

                    $b3=mysqli_query($link, $sql2) or die(mysqli_error());
                    $sql4 ="UPDATE care SET status=1 WHERE status=0";

                    $b4=mysqli_query($link, $sql2) or die(mysqli_error());


              }

             else if((mysqli_num_rows($query) == 0) && (mysqli_num_rows($query2) >0  ) )
              {

                      echo "<h3>".'Email does not exist!!'."</h3>";


              }
             else if((mysqli_num_rows($query)>0   ) && (mysqli_num_rows($query2) == 0))
             {

                            echo "<h3>".'Password does not exist!!'."</h3>";

              }
              else
              {
                echo "<h3>".'Email and password does not exist!!'."</h3>";

            }

            }

mysqli_close($link);
?>
