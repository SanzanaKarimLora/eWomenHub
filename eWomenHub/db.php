
 <?php


     if(!isset($_SESSION))
     {
         session_start();
     }



$error='';
$username = '';
$email = '';
$password = '';
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
function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["register"]))
{


	if(empty($_POST["user"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
    echo 	$error;
	}
	else
	{
		$username = clean_text($_POST["user"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$username))
		{
			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
      echo 	$error;
  	}
		}

	if(empty($_POST["email"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
    echo 	$error;
	}

	else
	{
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
      echo 	$error;
  	}
		}

  if(empty($_POST["pass"]))
  {
    $error .= '<p><label class="text-danger">Please Enter your Password</label></p>';
    echo 	$error;
	}




	if($error == '')
	{
    //$username = '';
    //$email = '';
  //  $password = '';

  $username=$_POST["user"];
      $email = $_POST["email"];
      $password = $_POST["pass"];

        $passw=md5($password);
      	$query = "INSERT INTO user (user_name, user_email, user_password)
      			  VALUES('$username', '$email', '$password')";
              if(!mysqli_query($link,$query))
              {
                $error.=  'Not registered!!';
                echo   $error;
              }
              else
              {
                 $error = '<label class="text-success"> Successfully Registered!</label>';
                 echo $error;
               $username = '';
               $email = '';
               $password = '';
              }
              /*if(!mysqli_query($link,$query)){
                echo 'Not registered!!';
              }
              else{

                echo "<h2>".'Registered Successfully!!'."</h2>";

              }*/

            }
          }


 mysqli_close($link); ?>
