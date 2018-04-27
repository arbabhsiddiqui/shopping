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
   
    <title>Hello, world!</title>
    
    
    
  </head>
  <body>
<!--   -->

	<div class="container-fluid bg-dark pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 " >
				<table class="table table-borderd text-light">
					<thead>
						<th>image</th>
						<th>product name</th>
						<th>price</th>
						<th>qty</th>
					</thead>
					<tbody>
					<?php
						$email=$_COOKIE['em'];
						$total=0;
						$tqty=0;
						$q=mysqli_query($con,"select p.image,p.productname,c.price,c.qty from product p,cart c where p.productid=c.productid and c.email='$email'");
						$i=0;
						while($row=mysqli_fetch_array($q))
						{
							$i++;
							$total+=($row['price']*$row['qty']);
							$tqty+=$row['qty'];
						?>
						<tr>
							<td><img height=50; src="admin/productImages/<?php echo $row["image"]; ?>" class=""></td>
							<td><?php echo $row['image'] ?></td>
							<td><?php echo $row['price']?></td>
							<td><?php echo $row['qty']?></td>
						</tr>
						
						
						
						
						<?php
							
							
						}
						
						?>
						
					</tbody>
					<tfooter>
						<th>total</th>
						<th>total</th>
						<th><?php echo $total;?></th>
						<th><?php echo $tqty;?></th>
					</tfooter>
					
					
					
					
				</table>	
					
				</div>
				<div class="col-sm-4  text-center text-light">
					<div class="row">
						<div class="col-sm-12">
							<h3>order list</h3>
						</div>
					</div>
					<form method="post">
						<div class="row">
							<div class="col-sm-12">
							<p>name</p>	
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-12">
								<input type="text" class="form-control-sm">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-sm-12">
								<p>shipping address</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<input type="text" class="form-control-sm">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-sm-12">
								<p>phone number</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<input type="text" class="form-control-sm">
							</div>
						</div>
						
						<div class="row pt-3">
							<div class="col-sm-12">
							<input type="button" class="btn btn-outline-success" value="order now">
																					</div>
						</div>
						
						
						
						
					</form>
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