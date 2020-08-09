<?php

if(!isset($_COOKIE["em"]))
{
	header("location:index.php");
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
    <link rel="stylesheet" href="css/flexbox.css">
   
    <title>wish list</title>
    <script>
	  function del(){
		  
		  var dels=document.getElementById("wishid").value;
			
			var rs=new XMLHttpRequest();
				var ts=Math.random();
				rs.onreadystatechange=function()
				{
					if(rs.readyState==4)
						{
							
							alert(rs.responseText);
							window.location="wishlistpage.php";
								
							}
						
				}
				rs.open("post"," includes/delwishlist.php?s="+ts+"&del="+dels);
				rs.send();
		}
	  
	  
	  
	  
	  </script>
    
    
  </head>
  <body>
<!--   -->

	<div class="container-fluid bg- pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center " >
					<?php
						$email=$_COOKIE['em'];
						$total=0;
						$tqty=0;
						$q=mysqli_query($con,"select p.image,p.productname,p.price,w.productid,w.email,w.wishid from product p,wishlist w where p.productid=w.productid and w.email='$email'");
						$i=0;
						
						if(mysqli_num_rows($q)==0){
							?>
							<div class="row ">
								<div class="col-sm-12>  text-center">
									<a href="index.php" class="btn btn-outline-success mt-5">shop now</a>
								</div>
							</div>
							
							
							<?php
						}
						else{
							?>
							<table class="table table-borderd ">
							<thead>
								<th>item</th>
								<th>name</th>
								<th>price</th>
							</thead>
							<tbody>
							<?php
								while($row=mysqli_fetch_array($q))
								{
									$i++;
									
							?>
							<tr>
								<td><img height=50; src="admin/productImages/<?php echo $row["image"]; ?>" class=""></td>
								<td><?php echo $row['productname'] ?></td>
								<td><?php echo $row['price']?></td>
								<td>
								<form method="post">
								<input type="hidden"  id="wishid" value="<?php echo $row['wishid']?>">
								<input type="button" value="X<?php $i?>" onclick="del()" class="btn btn-outline-danger"></td>
								</form>
							</tr>
							<?php
							 }
							?>
							</tbody>
							<tfooter>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<form method="post">
										<input type="button" class="btn btn-success" value="add to cart" >
									</form>
								</td>
							</tfooter>
				       </table>	
						<?php
					        }
						?>
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