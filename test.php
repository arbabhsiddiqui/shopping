<?php





include("connection.php");
  $msg="";



if(!isset($_COOKIE["em"])){
	include("header.php");
}
else{
    include("userheader.php");
}


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
   
    <title>Hello, world!</title>
    
    
    
  </head>
  <body>



      <div class="container">
      	<div class="row">
      		<div class="col-sm-2"></div>
      		<div class="col-sm-8  text-center pt-5 pb-5">
      			
      			<img src="test/body.png"  class="img-fluid" style="height:500px; width:auto">
      			<img src="test/ss.jpg"  class="img-fluid" style="height:400px; width:auto;position:absolute;left:210px;top:100px">
      			
      			<img src="test/cam.jpg" alt="" style="height:100px; width:auto;position:absolute;left:210px;top:100px"	>
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      			
      		</div>
      		<div class="col-sm-2"></div>
      	</div>
      </div>
      
      
      

      
        
 <?php
		 include("footer.php");?>
         

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
	</html>