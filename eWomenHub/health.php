<?php
session_start();

 ?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />
	<link rel="stylesheet" href="CSS/health.css">
	<link rel="stylesheet" href="CSS/header.css">
   <link rel="stylesheet" href="CSS/footer.css">

    <title>Health Care</title>
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

	  <?php
	                  $sql_liv='select image from health where h_id=5 and status=1';
	                  $res_liv = mysqli_query($link,$sql_liv);
	                  while($row=mysqli_fetch_array($res_liv))
	                 {   ?>

   <center><img src="<?php echo $row['image']; ?>" class="logo1"></center>  <?php } ?>

   <div><center><h1>HEALTH CARE</h1></center></div>

   <?php
	                          $sql_txt='select text from home_decor where h_id=5 and status=1';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
   <div><p><i> <?php echo $row['text']; ?>
   </i></p></div>
   <?php } ?>

      <?php
	  $sql_liv='select image from health where h_id=1 and status=1';
	  $res_liv = mysqli_query($link,$sql_liv);
	  while($row=mysqli_fetch_array($res_liv))
	  {   ?>

   <div class="conatiner wave">
     <div class="row">
	     <div class="col-md-6">
		           <figure>
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>

					    <?php
	                          $sql_txt='select text from health where h_id=1 and status=1';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>

                       <figcaption><center><b><?php echo $row['text']; ?></b></center></figcaption> <?php } ?>
			       </figure><br>

				   <?php
	                         $sql_link='select link from health where h_id=1 and status=1';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Check your BMI</a></center> <?php } ?>
		      </div>

			  <div class="col-md-6">
		           <figure>
				   <?php
	                  $sql_liv='select image from health where h_id=2 and status=1';
	                  $res_liv = mysqli_query($link,$sql_liv);
	                  while($row=mysqli_fetch_array($res_liv))
	                   {   ?>

				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>

					   <?php
	                          $sql_txt='select text from health where h_id=2 and status=1';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                       <figcaption><center><b><?php echo $row['text']; ?></b></center></figcaption>  <?php } ?>
			       </figure><br>

				   <?php
	                         $sql_link='select link from health where h_id=2 and status=1';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">See how to exercise</a></center> <?php } ?>
		      </div>

	 </div>
   </div>

   <div class="conatiner wave">
     <div class="row">

			  <div class="col-md-6">
		           <figure>
				   <?php
	                     $sql_liv='select image from health where h_id=3 and status=1';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>

				       <img src = "<?php echo $row['image']; ?>">  <?php } ?>

					   <?php
	                          $sql_txt='select text from health where h_id=3 and status=1';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                       <figcaption><center><b><?php echo $row['text']; ?></b></center></figcaption>  <?php } ?>
			       </figure><br>

				   <?php
	                         $sql_link='select link from health where h_id=3 and status=1';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Get knowledge on first aid</a></center>  <?php } ?>
		      </div>

			  <div class="col-md-6">
		           <figure>
				    <?php
	                     $sql_liv='select image from health where h_id=4 and status=1';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
					    <?php
	                          $sql_txt='select text from health where h_id=4 and status=1';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                       <figcaption><center><b><?php echo $row['text']; ?></b></center></figcaption> <?php } ?>
			       </figure><br>
				   <?php
	                         $sql_link='select link from health where h_id=4 and status=1';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Get knowledge on regular diet</a></center> <?php } ?>
		      </div>
	 </div>
   </div>
  <div class="container">
   <div class="row">
   <div class="col-md-12">
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
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


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


