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
    <script>
	  
	  function order(){
		 
		  
		  var name=document.getElementById("jname").value;
		  
		  var address=document.getElementById("jaddress").
		  value;
		  var number=document.getElementById("jnumber").
		  value;
		  var amt=document.getElementById("jamt").
		  value;
		  
		  var re=/^[a-zA-Z]+[ ]+[a-zA-Z]+$/;
		  var numre=/^\d{10}$/;
		  
		  if(name==""){
			  alert("please enter name");
			  document.getElementById("jname");
		  }
		  else if(!name.match(re)){
			  alert("please enter your full name");
			  document.getElementById("jname");
		  }
		  else if(address==""){
			  alert("please enter address");
			  document.getElementById("jaddress");
		  }
		  else if(number==""){
			  alert("please enter number");
			  document.getElementById("jumber");
		  }
		  else if(!number.match(numre)){
			  alert("please enter a valid phone number");
			  document.getElementById("jumber");
		  }
		  else{
			  
			 var r=new XMLHttpRequest();
				var t=Math.random();
				r.onreadystatechange=function()
				{
					if(r.readyState==4)
						{
							if(r.responseText=='order confirm'){
								window.location="orderlist.php";
							}
							else{
							alert(r.responseText);
								window.location="index.php";
							}
						}
				}
				r.open("post","orderdetail.php?s="+t+"&name="+name+"&address="+address+"&num="+number+"&total="+amt);
				r.send();
			  
			  
		  }
		  
	  
	  
	  }
		
		
		function del(){
			var dels=document.getElementById("cartid").value;
			
			var rs=new XMLHttpRequest();
				var ts=Math.random();
				rs.onreadystatechange=function()
				{
					if(rs.readyState==4)
						{
							
							alert(rs.responseText);
							window.location="cartsave.php";
								
							}
						
				}
				rs.open("post","delcart.php?s="+ts+"&del="+dels);
				rs.send();
		}
	

		
	 </script>
    
    
  </head>
  <body>
<!--   -->

	<div class="container-fluid bg- pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 " >
					<?php
						$email=$_COOKIE['em'];
						$total=0;
						$tqty=0;
						$q=mysqli_query($con,"select p.image,p.productname,c.price,c.qty,c.cartid from product p,cart c where p.productid=c.productid and c.email='$email'");
						$i=0;
						
						if(mysqli_num_rows($q)==0){
							?>
							<div class="row pt-5">
								<div class="col-sm-12 pt-5 text-center">
									<a href="index.php" class="btn btn-outline-success mt-5">shop now</a>
								</div>
							</div>
							
							
							<?php
						}
						else{
							?>
							<table class="table table-borderd ">
							<thead>
								<th>image</th>
								<th>product name</th>
								<th>price</th>
								<th>qty</th>
						    </thead>
							<tbody>
							<?php
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
								<td>
								<form method="post">
								<input type="hidden"  id="cartid" value="<?php echo $row['cartid']?>">
								<input type="button" value="X<?php $i?>" onclick="del()" class="btn btn-outline-danger"></td>
								</form>
							</tr>
							<?php
							 }
							?>
							</tbody>
							<tfooter>
								<th>total</th>
								<th></th>
								<th><?php echo $total;?></th>
								<th><?php echo $tqty;?></th>
							</tfooter>
				       </table>	
						<?php
					        }
						?>
					</div>
				<div class="col-sm-4  text-center ">
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
								<input type="text" id="jname" class="form-control">
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-12">
								<input type="hidden" id="jamt" class="form-control" value=<?php echo $total;?>>
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-sm-12">
								<p>shipping address</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<input type="text"  id="jaddress" class="form-control">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-sm-12">
								<p>phone number</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<input type="text" id="jnumber" class="form-control">
							</div>
						</div>
						
						<div class="row pt-3">
							<div class="col-sm-12">
							<input type="button"  onclick="order()" class="btn btn-outline-success" value="order now">
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