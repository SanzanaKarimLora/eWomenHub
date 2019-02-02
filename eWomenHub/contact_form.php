<?php
session_start();

 ?>



<?php


$error = '';
$name = '';
$email = '';
$msg = '';
$host='localhost';
$user='root';
$password='';
$db='ewomenhub';
   
$link=mysqli_connect($host,$user,$password,$db);

function text_set($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
	}
	else
	{
		$name = text_set($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name))     /*The preg_match() function searches string for pattern, returning true if pattern exists, and false otherwise.The ^ and $ require the whole string match*/ 
		{
			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
		}
	}
	if(empty($_POST["email"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
	}
	else
	{
		$email = text_set($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
		}
	}
	
	if(empty($_POST["msg"]))
	{
		$error .= '<p><label class="text-danger">Enter Message</label></p>';
	}
	else
	{
		$msg = text_set($_POST["msg"]);
	}

	if($error == '')
	{
   
   
   if(!$link)
   {
	   echo 'Not connected to server';
   }
   
   if(!mysqli_select_db($link,$db))
   {
	   echo 'Database not selected';
   }
   
   $sql='INSERT INTO contact_info (Name,Email,Message)  VALUES ("'.$name.'","'.$email.'","'.$msg.'")';
   
   if(!mysqli_query($link,$sql))
   {
	   $error.= 'Not sent';
   }
   else
   {
	    $error = '<label class="text-success">Your Message Has Successfully Sent</label>';
		$name = '';
		$email = '';
		$pw = '';
   }
	}
}

?>
<?php
    mysqli_close($link);
?>
<!DOCTYPE html>

<html>

   <head>
   
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />
	<link rel="stylesheet" href="CSS/contact.css">
	<link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
      <title>Contact Us</title>
   </head>
   
   <body>
     <?php 
          include "header.php"; 
	  ?>
   
       <div class = "container contact-form">
	       <h1> Say something you want </h1>
		   <h2> We are always ready to help you</h2>
		   <hr>
		
		   
		  <div class = "row">
		         <div class="col-md-6">
				      <address>
					     Baridhara, Dhaka<br>
					     Email: <a href ="mailto:demo@gmail.com">eWomenHub.com</a><br>
						 phone:0123456778
					  </address>
					  
				 </div>
				 
				 <div class="col-md-6">
				 <form method="post">
					
					<?php echo $error; ?>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" placeholder="Enter Name" class="form-control" required value="<?php echo $name; ?>" />
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Enter Email" required value="<?php echo $email; ?>" />
					</div>
					
					<div class="form-group">
						<label>Message</label>
						<textarea class = "form-control" rows="8" name = "msg" placeholder="Type your messege" required value="<?php echo $msg; ?>" ></textarea>
					</div>
					<div class="form-group" align="center">
						<input type="submit" name="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
		  </div>
	   </div>
      
	  <?php 
         include "footer.php"; 
	   ?>
	  <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
   </body>
</html>