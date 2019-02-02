<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cooking Page by eWomenHub.com</title>
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="CSS/cooking.css">
  <link rel="stylesheet" href="CSS/header.css">
   <link rel="stylesheet" href="CSS/footer.css">
  </head>
  <body>
  <?php
          include "header.php";
	  ?>

	  <?php
      $host='localhost';
      $user='root';
      $password='';
      $db='ewomenhub';

      $link=mysqli_connect($host,$user,$password,$db);
     ?>
	 
    <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.js"></script>
   <!--header -->
   <div class="container">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <?php
                        $sql_liv='select image from cooking where h_id=1 and status=1';
                        $res_liv = mysqli_query($link,$sql_liv);
                        while($row=mysqli_fetch_array($res_liv))
                       {   ?>
        <img id="logo" src="<?php echo $row['image']; ?>"><?php } ?>
      </div>
      <div class="col-md-4">
     </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div id="ani" class="col-md-8">
        <h1>"Bon Appetit"</h1>
      </div>
    </div>
   </div>
 <!--end of header -->

<div class="container">
  <div class="row">
    <?php
                    $sql_liv='select image from cooking where h_id=2 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <img id="img" src="<?php echo $row['image']; ?>"><?php } ?>
  </div>
</div>

<div class="container">
  <div class="row">
    <h2 style="font-weight:bold; color:black;">Snacks</h2>
  </div>
<div class="row" style="background-color:lightblue;">
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from cooking where h_id=3 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
   <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
   
     <?php
                    $sql_liv='select text from cooking where h_id=3 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <p> <?php echo $row['text']; ?> <br></br> <?php } ?>
      <?php
                      $sql_link='select link from cooking where h_id=3 and status=1';
                      $res_link = mysqli_query($link,$sql_link);
                      while($row=mysqli_fetch_array($res_link))
                      {   ?>
       <a href="<?php echo $row['link']; ?>" target="_blank">Watch the recipe on you tube</a> </p><?php } ?>
      <a href="#pizza" class="btn btn-info" data-toggle="collapse">Google info</a>
      <div id="pizza" class="collapse">
  Pizza is a traditional Italian dish consisting of a yeasted flatbread typically
   topped with tomato sauce and cheese and baked in an oven. It can also be topped with additional
   vegetables, meats, and condiments, and can be made without cheese.
      </div>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from cooking where h_id=4 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
 
 <?php
                    $sql_liv='select text from cooking where h_id=4 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <p> <?php echo $row['text']; ?> <br></br> <?php } ?>
   <?php
                   $sql_link='select link from cooking where h_id=4 and status=1';
                   $res_link = mysqli_query($link,$sql_link);
                   while($row=mysqli_fetch_array($res_link))
                   {   ?>
     <a href="<?php echo $row['link']; ?>" target="_blank">Watch the recipe on you tube</a> </p><?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from cooking where h_id=5 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
 <?php
                    $sql_liv='select text from cooking where h_id=5 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <p> <?php echo $row['text']; ?> <br></br> <?php } ?>
   <?php
                   $sql_link='select link from cooking where h_id=5 and status=1';
                   $res_link = mysqli_query($link,$sql_link);
                   while($row=mysqli_fetch_array($res_link))
                   {   ?>
    <a href="<?php echo $row['link']; ?>" target="_blank">Watch the recipe on you tube</a>  </p><?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from cooking where h_id=6 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
 <?php
                    $sql_liv='select text from cooking where h_id=6 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <p> <?php echo $row['text']; ?> <br></br> <?php } ?>
   <?php
                   $sql_link='select link from cooking where h_id=6 and status=1';
                   $res_link = mysqli_query($link,$sql_link);
                   while($row=mysqli_fetch_array($res_link))
                   {   ?>
    <a href="<?php echo $row['link']; ?>" target="_blank">Watch the recipe on you tube</a>  </p><?php } ?>
  </div>
</div>
</div>



<div class="container">
  <div class="row">
    <h2 style="font-weight:bold; color:black;">Desserts</h2>
  </div>
<div class="row" style="background-color:orange;">
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from cooking where h_id=7 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
   <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
  <?php
                    $sql_liv='select text from cooking where h_id=7 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <p> <?php echo $row['text']; ?> <br></br> <?php } ?>
      <?php
                      $sql_link='select link from cooking where h_id=7 and status=1';
                      $res_link = mysqli_query($link,$sql_link);
                      while($row=mysqli_fetch_array($res_link))
                      {   ?>
      <a href="<?php echo $row['link']; ?>" target="_blank">Watch the recipe on you tube</a> </p><?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from cooking where h_id=8 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
 <?php
                    $sql_liv='select text from cooking where h_id=8 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <p> <?php echo $row['text']; ?> <br></br> <?php } ?>
   <?php
                   $sql_link='select link from cooking where h_id=8 and status=1';
                   $res_link = mysqli_query($link,$sql_link);
                   while($row=mysqli_fetch_array($res_link))
                   {   ?>
    <a href="<?php echo $row['link']; ?>" target="_blank">Watch the recipe on you tube</a> </p><?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from cooking where h_id=9 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
 <?php
                    $sql_liv='select text from cooking where h_id=9 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <p> <?php echo $row['text']; ?> <br></br> <?php } ?>
   <?php
                   $sql_link='select link from cooking where h_id=9 and status=1';
                   $res_link = mysqli_query($link,$sql_link);
                   while($row=mysqli_fetch_array($res_link))
                   {   ?>
    <a href="<?php echo $row['link']; ?>" target="_blank">Watch the recipe on you tube</a>  </p><?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from cooking where h_id=10 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
<?php
                    $sql_liv='select text from cooking where h_id=10 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <p> <?php echo $row['text']; ?> <br></br> <?php } ?>
   <?php
                   $sql_link='select link from cooking where h_id=10 and status=1';
                   $res_link = mysqli_query($link,$sql_link);
                   while($row=mysqli_fetch_array($res_link))
                   {   ?>
   <a href="<?php echo $row['link']; ?>" target="_blank">Watch the recipe on you tube</a>  </p><?php } ?>
  </div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12"> <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong> Want to learn more? </strong>
You should log in to get especial info and explore more.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times; </span>
</button>
<a href="login.php"><button type="button" class="btn btn-outline-info">Log in </button></a>
</div>

</div>
</div>
<?php
          include "footer.php";
	  ?>


</body>
</html>
