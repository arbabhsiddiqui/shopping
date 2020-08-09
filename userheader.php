<?php
include("connection.php");
?>
<script>
function fun(){
		 
					var t=Math.random
					var r=new XMLHttpRequest();
					r.onreadystatechange=function()
					{
						if(r.readyState==4)
							{
								 
								document.getElementById("cart").innerHTML =r.responseText ;
								
							}
					}
					r.open("post","includes/autoupdatecart.php?s=" + t);
					r.send();
	}
	 setInterval("fun()",1000);
	function fun2(){
		var t=Math.random
					var r=new XMLHttpRequest();
					r.onreadystatechange=function()
					{
						if(r.readyState==4)
							{
								 
								document.getElementById("wish").innerHTML =r.responseText ;
								
							}
					}
					r.open("post","includes/autoupdatewishlist.php?s=" + t);
					r.send();
	}
 setInterval("fun2()",1000);



</script> 
<!--    top bar-->
          <div class="container-fluid bg-topbar header-top d-none d-md-block">
	    <div class="row text-light pt-2 pb-2">
		    <div class="col-sm-6">
		    <div class="row">
		    	<div class="col-md-4">moodyinks@gmail.com</div>
		    </div>
		   	</div>
		   	<div class="col-sm-6">
		   		<div class="row">
	   			 <div class="col-md-3 text-center">
					<a href="welcome.php"><i class="fas fa-user"></i></a>
				</div>
	   			 <div class="col-md-3  text-center"><a href="wishlistpage.php"><i  id="wish" class="fab fa-gratipay"></i>
			     
			    </a>
				</div>
	   			 <div class="col-md-3  text-center"><a href="cartsave.php"><i id='cart' class="fas fa-shopping-basket" ></i>
	   			 
			    </div>
		   			 <div class="col-md-3 text-right">
					<a href="logout.php">Logout</a>
				</div>
		   		</div>
		   	</div>
			    
			    
			   
                
		      
			    
			  
		    </div>
	    </div>
    
<!--    top bar ends-->

    <!--nav bar    -->
    <div class="container-fluid bg-navbar">
	    <nav class="container navbar navbar-expand-lg navbar-dark ">
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <?php
                $q=mysqli_query($con,"select * from cat");
                    while($row=mysqli_fetch_array($q))
                    {
                     $cid=$row["catid"];  
                     $take=mysqli_query($con,"select p.productname,p.price,p.image,p.catid,c.catid from product p,cat c where p.catid=c.catid and c.catid=$cid");
         				if(mysqli_num_rows($take)>0)
    					{
        	  ?>
       		  <li class="nav-item ">
        		<a class="nav-link" href="product.php?catid=<?php echo $row['catid'];?>"><?php echo $row["catname"]; ?></a>
        	  </li>
              <?php
                        }
                       else
                        {
              ?>
              <li class="nav-item ">
     				<a class="nav-link" ><?php echo $row["catname"]; ?></a>   
              </li>
              <?php
                        }
             }
              ?>
              
              <li class="nav-item">
                <a class="nav-link" href="ordersend.php">order list</a>
              </li>
              <li class="nav-item d-block d-md-none">
                <button data-toggle="modal" data-target="#myModal" class="btn btn-none nav-link">
			     Account   
			    </button>  
              </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
           </form>
         </div>
     </nav>
   </div>
<!--     navbar ends-->
     
   