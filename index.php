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
    <script>
	  function addtocart(){
		  
		  
		  
		  
		  
	  }
	  
	  
	  
	  
	  </script>
    
    
  </head>
  <body>
<!--   -->
<!-- login model   -->
 <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content bg-info">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-light">login here</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post" class="form-group">
            <div class="row pb-2"><input type="text" name="id" class="form-control pt-1 pb-1" placeholder="userid/email"></div>
            <div class="row pb-2"><input type="password" name="pwd" class="form-control pt-1 pb-1" placeholder="password"></div> 
            <div class="row pt-2 ">
             <div class="col-sm-6">
                 
				<input type="submit" class="btn btn-success" name="btnlogin" value="login">
				 
                 
             </div>
             <div class="col-sm-6">
                 <a href="signup.php" class="btn btn-primary ">signup</a>
             </div>
            </div>  
              <p><?php echo $msg; ?></p>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


   
<!--   slider-->
 <div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/phone.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
       <h1 class="display-3">BEST WINTER COLLECTION</h2>
       <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
       <button class="btn btn-black btn-lg">Shop Now.</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/phone.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
       <h1 class="display-3">BEST WINTER COLLECTION</h2>
       <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="btn btn-black btn-lg">Shop Now.</button>
      </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
<!-- address bar-->
 <div class="container-fluid offer pt-3 pb-3 bg-orange d-none d-md-block">
	<div class="container">
		<div class="row">
			<div class="col-md-4 m-right">
				<h4>FREE SHIPPING</h4>
				<p>on order over 300rs</p>
			</div>
			<div class="col-md-4 m-right">
				<h4>CALL US ANYTIME</h4>
				<p>+91----------</p>
			</div>
			<div class="col-md-4">
				<h4>OUR  LOCATION</h4>
				<p>Lucknow,India</p>
			</div>
		</div>
	</div>
</div>

<!-- latest   product   -->
     <div class="container-fluid bg-color">
<div class="container pt-5">
	<div class="row">
		<h3>Top seller</h3>
	</div>
	<div class="underline"></div>
</div>


<div class="container mt-5">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<img src="img/pexels-photo-206410.jpeg" class="card-img-top">
				<div class="card-body">
					<h5>White Top</h5>
					<h5>$60.00</h5>
					<?php
					if(!isset($_COOKIE["em"])){
					?>
    				<button data-toggle="modal" data-target="#myModal" class="btn btn-danger ">add to cart</button>
    				<?php

					}
					else{
						?>
    				<button class="btn btn-danger" onclick="addtocart()"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
    				<?php
    														}

					
					?>
					
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="card">
				<img src="img/pexels-photo-458768.jpeg" class="card-img-top">
				<div class="card-body">
					<h5>White Top</h5>
					<h5>$60.00</h5>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>
		
		
		<div class="col-md-3">
			<div class="card">
				<img src="img/pexels-photo-247855.jpeg" class="card-img-top">
				<div class="card-body">
					<h5>White Top</h5>
					<h5>$60.00</h5>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>
		
		
		<div class="col-md-3">
			<div class="card">
				<img src="img/pexels-photo-235497.jpeg" class="card-img-top">
				<div class="card-body">
					<h5>White Top</h5>
					<h5>$60.00</h5>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>
	</div>
</div>
      
      
<!--new product-->


    
<div class="container-fluid pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<h4>MOST WANTED</h4>
				</div>
				<div class="row">
				    <div class="underline-green"></div>
				</div>
				<div class="media mt-5">
					<img src="img/belts-823257_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>FITT Belts</h5>
						<h6>$3.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
				
				
				<div class="media mt-5">
					<img src="img/fashion-731827_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>magnolia dress</h5>
						<h6>$34.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/jeans-428614_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Rocadi Jeans</h5>
						<h6>$3.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
				<div class="row">
					<h4>SCARFS</h4>
				</div>
				<div class="row">
				    <div class="underline-blue"></div>
				</div>
				<div class="media mt-5">
					<img src="img/a-neckerchief-1317830_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Istwic Scarf</h5>
						<h6>$3.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
				
				
				<div class="media mt-5">
					<img src="img/a-neckerchief-1315912_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Jennifer Scarf</h5>
						<h6>$34.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/a-neckerchief-1315916_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Andora Scarf</h5>
						<h6>$3.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
			</div>
			
			
			
			<div class="col-md-4">
				<div class="row">
					<h4>ON SALE</h4>
				</div>
				<div class="row">
				    <div class="underline-black"></div>
				</div>
				<div class="media mt-5">
					<img src="img/woman-1484279_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Marina Style</h5>
						<h6>$3.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
				
				
				<div class="media mt-5">
					<img src="img/key-692199_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Marina Style</h5>
						<h6>$34.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/cute-955782_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Manago Shirt</h5>
						<h6>$3.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
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