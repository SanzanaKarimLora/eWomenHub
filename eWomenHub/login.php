
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>


<!doctype html>
<html>
      <head>
        <meta charset="utf-8">
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
<div class="loginBox">
  <img src="images/user.png" class="user">
  <h2>Log In Here</h2>
  <form method="post" action="login.php">
  <p>Email</p>
      <input type="text" name="email2" placeholder="Enter Email">
    <p>Password</p>
<input type="password" name="pass2" placeholder="............">
  <input class="one" type="submit" name="login" value="Sign In">
  <p class="message"> Not yet a member? <a href="reg.php">Sign Up</a> </p>
</form>
</div>


</body>
</html>
<?php include "logdb.php";  ?>
