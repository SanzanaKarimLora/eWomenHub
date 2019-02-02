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
  <title>resgistration page</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">

</head>
<body>
<div class="login">
  <img src="images/user.png" class="user">
  <h2 class="header">Registration Form</h2>
<form action="reg.php" method="post">
  <p>Username</p>
  <input type="text" name="user" placeholder="Enter your name">
  <p>Email</p>
  <input type="text" name="email" placeholder="Enter Email">
  <p>Password</p>
<input type="password" name="pass" placeholder="............">
<input class="two" type="submit" name="register" value="Sign Up">
<p class="message"> Already registered? <a href="login.php">Sign In</a> </p>
</form>
</div>


</body>
</html>
<?php include "db.php";  ?>
