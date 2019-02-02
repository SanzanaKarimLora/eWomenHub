<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />
  
	<link rel="stylesheet" href="CSS/data_listing.css">
	<link rel="stylesheet" href="CSS/header.css">
	<link rel="stylesheet" href="CSS/footer.css">

    <title>SERVICES</title>
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
	
 <div class="container">  
 
  <?php
	                  $sql_liv='select image from home_decor where h_id=5';
	                  $res_liv = mysqli_query($link,$sql_liv);
	                  while($row=mysqli_fetch_array($res_liv))
	                 {   ?>
				   
   <center><img src="<?php echo $row['image']; ?>" class="logo"></center>  <?php } ?>
   
   <table border="1" width="100%">
       <thead>
	       <th>Images</th> 
		   <th>Text</th> 
		   <th>Link</th> 
	   </thead>
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from home_decor where h_id=1';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from home_decor where h_id=1';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from home_decor where h_id=1';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">See how to decorate living room</a></center> <?php } ?>
		 </td>
	   </tr>
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from home_decor where h_id=2';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from home_decor where h_id=2';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from home_decor where h_id=2';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">See how to decorate dining room</a></center> <?php } ?>
		 </td>
	   </tr>
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from home_decor where h_id=3';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from home_decor where h_id=3';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from home_decor where h_id=3';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">See how to decorate bed room</a></center> <?php } ?>
		 </td>
	   </tr>
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from home_decor where h_id=4';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from home_decor where h_id=4';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from home_decor where h_id=4';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">See how to decorate kitchen </a></center> <?php } ?>
		 </td>
	   </tr>
        
   </table>
   
    <?php
	                  $sql_liv='select image from cooking where h_id=1';
	                  $res_liv = mysqli_query($link,$sql_liv);
	                  while($row=mysqli_fetch_array($res_liv))
	                 {   ?>
				   
   <center><img src="<?php echo $row['image']; ?>" class="logo"></center>  <?php } ?>
   
   <table border="1" width="100%">
       <thead>
	       <th>Images</th> 
		   <th>Text</th> 
		   <th>Link</th> 
	   </thead>
	   
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from cooking where h_id=3';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from cooking where h_id=3';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from cooking where h_id=3';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch the recipe on you tube</a></center> <?php } ?>
		 </td>
	   </tr>
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from cooking where h_id=4';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from cooking where h_id=4';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from cooking where h_id=4';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch the recipe on you tube </a></center> <?php } ?>
		 </td>
	   </tr>

	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from cooking where h_id=5';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from cooking where h_id=5';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from cooking where h_id=5';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch the recipe on you tube </a></center> <?php } ?>
		 </td>
	   </tr> <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from cooking where h_id=6';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from cooking where h_id=6';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from cooking where h_id=6';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch the recipe on you tube </a></center> <?php } ?>
		 </td>
	   </tr> <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from cooking where h_id=7';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from cooking where h_id=7';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from cooking where h_id=7';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch the recipe on you tube </a></center> <?php } ?>
		 </td>
	   </tr> <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from cooking where h_id=8';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from cooking where h_id=8';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from cooking where h_id=8';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch the recipe on you tube </a></center> <?php } ?>
		 </td>
	   </tr> <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from cooking where h_id=9';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from cooking where h_id=9';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from cooking where h_id=9';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch the recipe on you tube </a></center> <?php } ?>
		 </td>
	   </tr> <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from cooking where h_id=10';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from cooking where h_id=10';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from cooking where h_id=10';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch the recipe on you tube</a></center> <?php } ?>
		 </td>
	   </tr>
        
   </table>
   
    <?php
	                  $sql_liv='select image from home_decor where h_id=5';
	                  $res_liv = mysqli_query($link,$sql_liv);
	                  while($row=mysqli_fetch_array($res_liv))
	                 {   ?>
				   
   <center><img src="<?php echo $row['image']; ?>" class="logo"></center>  <?php } ?>
   
   <table border="1" width="100%">
       <thead>
	       <th>Images</th> 
		   <th>Text</th> 
		   <th>Link</th> 
	   </thead>
	   
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from care where h_id=3';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from care where h_id=3';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from care where h_id=3';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch it on you tube?</a></center> <?php } ?>
		 </td>
	   </tr>
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from care where h_id=4';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from care where h_id=4';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from care where h_id=4';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch it on you tube? </a></center> <?php } ?>
		 </td>
	   </tr>

	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from care where h_id=5';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from care where h_id=5';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from care where h_id=5';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch it on you tube? </a></center> <?php } ?>
		 </td>
	   </tr> <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from care where h_id=6';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from care where h_id=6';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from care where h_id=6';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch it on you tube?</a></center> <?php } ?>
		 </td>
	   </tr> <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from care where h_id=7';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from care where h_id=7';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from care where h_id=7';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch it on you tube? </a></center> <?php } ?>
		 </td>
	   </tr> 
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from care where h_id=8';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from care where h_id=8';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from care where h_id=8';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch it on you tube? </a></center> <?php } ?>
		 </td>
	   </tr> <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from care where h_id=9';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from care where h_id=9';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from care where h_id=9';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch it on you tube?</a></center> <?php } ?>
		 </td>
	   </tr> <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from care where h_id=10';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from care where h_id=10';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from care where h_id=10';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">Watch it on you tube? </a></center> <?php } ?>
		 </td>
	   </tr>
        
   </table>
   
    <?php
	                  $sql_liv='select image from health where h_id=5';
	                  $res_liv = mysqli_query($link,$sql_liv);
	                  while($row=mysqli_fetch_array($res_liv))
	                 {   ?>
				   
   <center><img src="<?php echo $row['image']; ?>" class="logo"></center>  <?php } ?>
   
   <table border="1" width="100%">
   
    <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from health where h_id=1';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from health where h_id=1';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from health where h_id=1';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">See how to decorate living room</a></center> <?php } ?>
		 </td>
	   </tr>
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from health where h_id=2';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from health where h_id=2';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from health where h_id=2';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">See how to decorate dining room</a></center> <?php } ?>
		 </td>
	   </tr>
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from health where h_id=3';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from health where h_id=3';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from health where h_id=3';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">See how to decorate bed room</a></center> <?php } ?>
		 </td>
	   </tr>
	   
	   <tr>
	       <td>
		            <?php
	                     $sql_liv='select image from health where h_id=4';
	                     $res_liv = mysqli_query($link,$sql_liv);
	                     while($row=mysqli_fetch_array($res_liv))
	                     {   ?>
		 
				       <img src = "<?php echo $row['image']; ?>"> <?php } ?>
		 </td>
		 
		 <td>
		      <?php
	                          $sql_txt='select text from health where h_id=4';
	                          $res_txt = mysqli_query($link,$sql_txt);
	                          while($row=mysqli_fetch_array($res_txt))
	                         {   ?>
                            <?php echo $row['text']; ?> <?php } ?>
		 </td>
		 
		 <td>
		     <?php
	                         $sql_link='select link from health where h_id=4';
	                         $res_link = mysqli_query($link,$sql_link);
	                         while($row=mysqli_fetch_array($res_link))
	                         {   ?>
				   <center><a href="<?php echo $row['link']; ?>">See how to decorate kitchen </a></center> <?php } ?>
		 </td>
	   </tr>
        
   </table>
   
    
   
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