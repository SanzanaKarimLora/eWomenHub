<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Personal Care Page by eWomenHub.com</title>
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="CSS/care.css">
  <link rel="stylesheet" href="CSS/header.css">
  <link rel="stylesheet" href="CSS/footer.css">

  </head>
  <body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.js"></script>
   <?php
      include "header.php";
	?>
   <!--header -->
   <?php
         $host='localhost';
         $user='root';
         $password='';
         $db='ewomenhub';

         $link=mysqli_connect($host,$user,$password,$db);
        ?>
   <div class="container">
    <div  class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4" >

        	  <?php
        	                  $sql_liv='select image from care where h_id=1 and status=1';
        	                  $res_liv = mysqli_query($link,$sql_liv);
        	                  while($row=mysqli_fetch_array($res_liv))
        	                 {   ?>
        <img id="logo" src="<?php echo $row['image']; ?>"> <?php } ?>

      </div>
      <div class="col=md-4">
          </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div id="an" class="col-md-8">
        <h1>"Mind * Body * Spirit"</h1>
      </div>
    </div>
  </div>
 <!--end of header -->
<div class="container">
  <div class="row">
    <?php
                    $sql_liv='select image from care where h_id=2 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <img id="img" src="<?php echo $row['image']; ?>"> <?php } ?>
  </div>
</div>

<div class="container">
  <div class="row">
    <h2 style="font-weight:bold;">Skin Care</h2>
  </div>
<div class="row" style="background-color:pink;">
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from care where h_id=3 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
   <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
   <?php
                    $sql_liv='select text from care where h_id=3 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <p> <?php echo $row['text']; ?> <br></br> <?php } ?>

      				   <?php
      	                         $sql_link='select link from care where h_id=3 and status=1';
      	                         $res_link = mysqli_query($link,$sql_link);
      	                         while($row=mysqli_fetch_array($res_link))
      	                         {   ?>
       <a href="<?php echo $row['link']; ?>" target="_blank">Watch it on you tube?</a> </p> <?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from care where h_id=4 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
  <?php
                    $sql_liv='select text from care where h_id=4 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <p> <?php echo $row['text']; ?> <br></br> <?php } ?>


              <?php
                              $sql_link='select link from care where h_id=4 and status=1';
                              $res_link = mysqli_query($link,$sql_link);
                              while($row=mysqli_fetch_array($res_link))
                              {   ?>
   <a href="<?php echo $row['link']; ?>" target="_blank">Watch it on you tube?</a> </p> <?php } ?>
  </div>

  <div class="col-md-3">
    <?php
                    $sql_liv='select image from care where h_id=5 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
  <?php
                    $sql_liv='select text from care where h_id=5 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <p> <?php echo $row['text']; ?> <br></br> <?php } ?>


             <?php
                             $sql_link='select link from care where h_id=5 and status=1';
                             $res_link = mysqli_query($link,$sql_link);
                             while($row=mysqli_fetch_array($res_link))
                             {   ?>
    <a href="<?php echo $row['link']; ?>" target="_blank" >Watch it on you tube?</a>  </p> <?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from care where h_id=6 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
  <?php
                    $sql_liv='select text from care where h_id=6 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <p> <?php echo $row['text']; ?> <br></br> <?php } ?>

   				   <?php
   	                         $sql_link='select link from care where h_id=6 and status=1';
   	                         $res_link = mysqli_query($link,$sql_link);
   	                         while($row=mysqli_fetch_array($res_link))
   	                         {   ?>
    <a href="<?php echo $row['link']; ?>" target="_blank" >Watch it on you tube?</a>  </p> <?php } ?>
  </div>
</div>
</div>


<div class="container">
  <div class="row">
    <h2 style="font-weight:bold;">Hair Care</h2>
  </div>
<div class="row" style="background-color:lightgreen;">
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from care where h_id=7 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
   <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
    <?php
                    $sql_liv='select text from care where h_id=7 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <p> <?php echo $row['text']; ?> <br></br> <?php } ?>

      				   <?php
      	                         $sql_link='select link from care where h_id=7 and status=1';
      	                         $res_link = mysqli_query($link,$sql_link);
      	                         while($row=mysqli_fetch_array($res_link))
      	                         {   ?>
      <a href="<?php echo $row['link']; ?>" target="_blank">Watch it on you tube?</a> </p> <?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from care where h_id=8 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
  <?php
                    $sql_liv='select text from care where h_id=8 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <p> <?php echo $row['text']; ?> <br></br> <?php } ?>

              <?php
                              $sql_link='select link from care where h_id=8 and status=1';
                              $res_link = mysqli_query($link,$sql_link);
                              while($row=mysqli_fetch_array($res_link))
                              {   ?>
   <a href="<?php echo $row['link']; ?>" target="_blank">Watch this on you tube?</a> </p> <?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from care where h_id=9 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
  <?php
                    $sql_liv='select text from care where h_id=9 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <p> <?php echo $row['text']; ?> <br></br> <?php } ?>

   				   <?php
   	                         $sql_link='select link from care where h_id=9 and status=1';
   	                         $res_link = mysqli_query($link,$sql_link);
   	                         while($row=mysqli_fetch_array($res_link))
   	                         {   ?>
						 <a href="<?php echo $row['link']; ?>" target="_blank">Find the link here</a>  </p> <?php } ?>
  </div>
  <div class="col-md-3">
    <?php
                    $sql_liv='select image from care where h_id=10 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
 <img class="snacks" src="<?php echo $row['image']; ?>"><?php } ?>
 <?php
                    $sql_liv='select text from care where h_id=10 and status=1';
                    $res_liv = mysqli_query($link,$sql_liv);
                    while($row=mysqli_fetch_array($res_liv))
                   {   ?>
    <p> <?php echo $row['text']; ?> <br></br> <?php } ?>

   				   <?php
   	                         $sql_link='select link from care where h_id=10 and status=1';
   	                         $res_link = mysqli_query($link,$sql_link);
   	                         while($row=mysqli_fetch_array($res_link))
   	                         {   ?>
<a href="<?php echo $row['link']; ?>" target="_blank">Find how you can solve this!</a>  </p> <?php } ?>
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
