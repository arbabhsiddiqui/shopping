<?php





include("connect.php");
  $msg="";



if(!isset($_COOKIE["cok"])){
	include("header.php");
}
else{
    include("adminheader.php");
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
 
 <?php
//	  $t="select * from orderdetail group by oderid";
//	  
	  
	  
	  ?>
   

 <div class="container pt-5 pb-5">
 	<div class="row text-center">
 		<div class="col-sm-12 ">
 			
 			<h3>all pending orders</h3>
 			<?php
						$email=$_COOKIE['em'];
						$q=mysqli_query($con,"select * from orderdetail group by orderid ");
						$i=0;
						$tqty=0;
				$total=0;
					
						while($row=mysqli_fetch_array($q))
						{
							$i++;
							
							$id=$row['orderid'];
				?>
				<div class="row pt-2 pb-2 ">
 				<div class="col-sm-12 ">
 				<button type="button" class="btn btn-bg btn-primary" data-toggle="collapse" data-target="#<?php echo 'a'.$i;?>">
 				 order number is: <?php echo $row['orderid']." " ?>
 				</button>
  <div id="<?php echo 'a'.$i;?>" class="collapse bg-dark pt-5 pb-5">
 <table class="table table-borderd text-light bg-dark  ">
					<thead>
						<th>s.no</th>
						<th>image</th>
						<th>orderid</th>
						<th>productid</th>
						<th>price</th>
						<th>qty</th>
					</thead>
					<tbody>
 					<tr>
 					<?php
							$j=0;
 					$x=mysqli_query($con,"select o.detailid,o.orderid,o.productid,
						o.qty,o.price,p.productid,p.image from orderdetail o ,product p  where p.productid=o.productid and orderid='$id'");
							while($row1=mysqli_fetch_array($x)){
								$j++;
								$total+=($row1['price']*$row1['qty']);
								$tqty+=$row1['qty'];
								?>
							<td><?php echo $j; ?></td>
							<td><img src="productImages/<?php echo $row1['image'] ?>" alt="" width=50px;></td>
							<td><?php echo $row1['orderid'] ?></td>
							<td><?php echo $row1['productid']?></td>
							<td><?php echo $row1['price']?></td>
							<td><?php echo $row1['qty']?></td>
						</tr>
						
						
						
						<?php
						}
				?>		
					</tbody>
					<tfooter>
						<th>total</th>
						<th></th>
						<th></th>
						<th></th>
						
						<th><?php echo $total;?></th>
						<th><?php echo $tqty;?></th>
					</tfooter>
					
					
					
					
				</table>
				<button class="btn btn-danger " >order complete</button>
				</div>
 				
 				

 				</div>
 				</div>
 				<?php }?>
 			
 		
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