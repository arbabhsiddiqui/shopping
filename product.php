<?php

include("connection.php");
$catid=$_REQUEST["catid"];  
$msg="";



if(!isset($_COOKIE["em"]))
{
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



       
<!-- latest   product   -->
     <div class="container-fluid pt-5 	bg-color">
     <?php
		  $f=mysqli_query($con,"select * from cat   where catid=$catid");
		 		$d=mysqli_fetch_array($f);
		 
		 ?>
		<div class="container">
           <div class="row mb-3">
           	<div class="col-sm-12 text-center text-light">
           		<h2><?php echo $d['catname']; ?></h2>
           	</div>
           </div>
            <div class="row pt-5 pb-5">
		        <?php 
                    $take=mysqli_query($con,"select p.productname,p.price,p.image,p.catid,p.productid,c.catid from product p,cat c where p.catid=c.catid and c.catid=$catid");
    	            if(mysqli_num_rows($take)>0)
    	            { 
		                $i=0;
                        while($t=mysqli_fetch_array($take))
                        {
					      $i++;
               ?>	
		       <div class="col-md-3 pt-2 pb-2">
		           <div class="card pt-2 pb-2">
	               <h5 class="text-center pb-2"><?php echo $t["productname"];?></h5>
			   
		               <img  src="admin/productImages/<?php echo $t["image"]; ?>" height="" class="productImages2">
				       <div class="card-body">
				           <form method="post">
								
								<h6>$<?php echo $t["price"];?></h6>
								<input type="hidden" class="form-control-sm" id="jemail" value="<?php echo $_COOKIE["em"];?> " disabled>
								<input type="hidden" class="form-control-sm" id="jproductid" value="<?php echo $t["productid"];?> ">
								<input type="hidden" class="form-control-sm" id="jprice" value="<?php echo $t["price"];?> " disabled>
								<p>qty</p>
								<input type="text" class="form-control" id="jqty<?php echo $i;?>"  value="1">
					      </form>
					      <?php
					        if(!isset($_COOKIE["em"])){
					      ?>
    				      <button data-toggle="modal" data-target="#myModal" class="btn btn-danger ">add to cart</button>
    				      <?php
                             }
					       else{
						  ?>
    				      <button class="btn btn-danger" onclick="cart(<?php echo $t['productid'];?>,<?php echo $t['price'];?>,<?php echo $i;?>)"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
    				      <?php
    					    }
                          ?>				
					  </div>
			       </div>
		      </div>
		      <?php
                }
                }
    	       else
    	        {    
              ?>
              <a style="color:white">OUT OF STOCK</a>
              <?php
               }
    	      ?>
		</div>
</div>
	  </div>   
      
<!--new product-->

    

	  
	  
<!-- address bar-->
 <div class="container-fluid offer  pt-3 bg-orange d-none d-md-block">
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
 
<?php
         
         include("footer.php");
         
         
         ?>
         
        
       
        
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>    