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
		
	  /*function addtocart(){
	 var email=document.getElementById('jemail').value;
	  var productid=document.getElementById('jproductid').value;
		var price=document.getElementById('jprice').value;
		  var qty=document.getElementById('jqty').value;
		   alert(qty);		
				  var r=new XMLHttpRequest();
				var t=Math.random();
				r.onreadystatechange=function()
				{
					if(r.readyState==4)
						{
							alert(r.responseText);
						}
				}
				r.open("post","cart.php?s="+t+"&email="+email+"&productid="+productid+"&price="+price+"&qty="+qty);
				r.send();
		  
		  
	  
	  }--*/
	   	  function cart(x,p,i)		
		{
			
			var q=document.getElementById("jqty"+i).value;
			if(q=="")
				{
					alert("Please enter quantity");
					document.getElementById("jqty"+i).focus();
				}
			else if(q>=24)
				{
					alert("you can't order  more than 24 prduct at once");
					document.getElementById("jqty"+i).value="";
					document.getElementById("jqty"+i).focus();
				}
			else 
				{
					var t=Math.random
					var r=new XMLHttpRequest();
					r.onreadystatechange=function()
					{
						if(r.readyState==4)
							{
								alert(r.responseText);
								document.getElementById("jqty"+i).value="";
							}
					}
					r.open("post","cart.php?s=" + t +"&id=" + x +"&price=" + p +"&qty=" + q);
					r.send();
				}
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
        <div class="modal-header text-center">
          <h4 class="modal-title text-light text-center">login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form  method="post" class="form-group">
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
       <h1 class="display-3">BEST WINTER COLLECTION</h1>
       <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
       <button class="btn btn-black btn-lg">Shop Now.</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/phone.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
       <h1 class="display-3">BEST WINTER COLLECTION</h1>
       <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
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

<!--   latest product  -->
<div class="container-fluid section-b-bg pt-5 pb-5">
<!--  latest product heading  -->
    <div class="container pt-2">
	    <div class="row">
		    <h3>Top seller</h3>
	    </div>
	    <div class="underline"></div>
    </div>
<!--latest product heading ends-->
    <div class="container pt-2">
	    <div class="row text-light">
				 <?php
					$i=0;
					$q1=mysqli_query($con,"select * from product");

					$st=rand(1,mysqli_num_rows($q1)-4);
					$q=mysqli_query($con,"select * from product limit $st,4");
					while($row=mysqli_fetch_array($q)){
					$i++;
				  ?>
					<div class="col-sm-3 pt-2 pb-2">
						<div class="card text-center">
							<img height="230" src="admin/productImages/<?php echo $row['image']?>" alt="productimg" >
							<div class="card-body">
								<form method="post">
									<h5><?php echo $row["productname"];?></h5>
									<h6>$<?php echo $row["price"]?></h6>
									<input type="hidden" class="form-control-sm" id="jemail" 
									  value="<?php echo $_COOKIE['em'];?> " disabled>
									<input type="hidden" class="form-control-sm" id="jproductid"
									  value="<?php echo $row['productid'];?>">
									<input type="hidden" class="form-control-sm" id="jprice"
									  value="<?php echo $row['price'];?> " disabled>
									<p>qty</p>
									<input type="text" class="form-control-sm" id="jqty+'<?php echo $i;?>'"  value="1">
								</form>
								 <?php
								   if(!isset($_COOKIE['em'])){
								 ?>
								   <input type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" value="add to cart">
									 
								<?php
									} else {
								?>
								   <input type="button" class="btn btn-primary" onclick="cart(<?php echo $row['productid'];?>,
									 <?php echo $row['price']; ?>,<?php echo $i;?>)" value="Add To Cartz">
							   <?php
								 }
							   ?>
						 </div>
					  </div>
				   </div>
					<?php	
						}
						?>

			</div>
		</div>




<div class="container pt-5 pb-5">
	<div class="row">
		    	<div class="col-sm-12">
		    		<h4>most selling product</h4>
		    	</div>
		    </div>	
	<div class="row pt-2">
		<?php 
					$i=0;
					$q2=mysqli_query($con,"select * from product");

					$st1=rand(1,mysqli_num_rows($q2)-4);
					$q3=mysqli_query($con,"select * from product limit $st1,4");
					while($row2=mysqli_fetch_array($q3)){
					$i++;
		?>
		<div class="col-sm-6 pt-5">
		    <div class="row">
		    	<div class="col-sm-2 productImages">
		    		<img src="admin/productImages/<?php echo $row2['image']?>">
		    	</div>
		    	<div class="col-sm-4"></div>
		    	<div class="col-sm-4">
		    		<h6><?php echo $row2['productname'];?></h6>
		    		<h6>price:<?php echo $row2['price'];?></h6>
		    		<p class="text-justify">product details: Lorem ipsum dolor sit amet, </p>
		    		<form method="post">
							<input type="hidden" class="form-control" id="jemail" 
									  value="<?php echo $_COOKIE['em'];?> " disabled>
							<input type="hidden" class="form-control" id="jproductid"
									  value="<?php echo $row['productid'];?>">
									<input type="hidden" class="form-control" id="jprice"
									  value="<?php echo $row['price'];?> " disabled>
									<p>qty</p>
									<input type="text" class="form-control" id="jqty+'<?php echo $i;?>'"  value="1">
								</form>
								 <?php
								   if(!isset($_COOKIE['em'])){
								 ?>
								   <input type="button" data-toggle="modal" data-target="#myModal" class="btn btn-outline-info " value="add to cart">
									 
								<?php
									} else {
								?>
								   <input type="button" class="btn btn-outline-info" onclick="cart(<?php echo $row['productid'];?>,
									 <?php echo $row['price']; ?>,<?php echo $i;?>)" value="Add To Cartz">
							   <?php
								 }
							   ?>
								
		    	</div>
		    </div>
			
			
			
		</div>
		
		<?php }?>
	</div>
</div>










</div>																				
<!-- latest product ends     -->
      
<!--new product-->



      
        
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