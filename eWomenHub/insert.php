<?php
session_start();

 ?>


<?php
   
   $host='localhost';
   $user='root';
   $password='';
   $db='ewomenhub';
   
   $link=mysqli_connect($host,$user,$password,$db);
   
   if(!$link)
   {
	   echo 'Not connected to server';
   }
   
   if(!mysqli_select_db($link,$db))
   {
	   echo 'Database not selected';
   }
   $NAME=$_POST['username'];
   $EMAIL=$_POST['email'];
   $MESSAGE=$_POST['message'];
   $sql="INSERT INTO contact_info (Name,Email,Message)  VALUES ('$NAME','$EMAIL','$MESSAGE')";
   
   if(!mysqli_query($link,$sql))
   {
	   echo 'Not inserted';
   }
   else
   {
	   echo 'Inserted';
   }
   
   header("refresh:2 url=contact_form.php");

?>

<?php
    mysqli_close($link);
?>