<?php
include("connection.php");
?> 
<!--    top bar-->
          <div class="container-fluid bg-topbar header-top d-none d-md-block">
	    <div class="container">
		    <div class="row text-light pt-2 pb-2">
			    <div class="col-md-4"><i class="fa fa-envelope-o" aria-hidden="true"></i>moodyinks@gmail.com</div>
			    
			    <div class="col-md-2">
					<a href="logout.php">Logout</a>
				</div>
                <div class="col-md-2">
					<a href="welcome.php">Edit profile</a>
				</div>
		      <div class="col-md-2"><a href="wishlist.php">wishlist
			    <?php
				$email=$_COOKIE['em'];	
				$q=mysqli_query($con,"select * from wishlist where  email='$email' ");	
						
					
					   echo mysqli_num_rows($q);?>
			    </a>
				</div>
			    <div class="col-md-2"><a href="cartsave.php"> My Cart
			    <?php
				$email=$_COOKIE['em'];	
				$q=mysqli_query($con,"select * from cart where  email='$email' ");	
						
					
					   echo " : ".mysqli_num_rows($q);
			?>
			    </a>
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
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  cat
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php
                    $sq=mysqli_query($con,"select * from cat");
                    
                    while($row=mysqli_fetch_array($sq))
                    {
                    $cid=$row["catid"];  
                    ?>
                    <?php 
                $take=mysqli_query($con,"select p.productname,p.price,p.image,p.catid,c.catid from product p,cat c where p.catid=c.catid and c.catid=$cid");
    if(mysqli_num_rows($take)>0)
    {
        ?>
        <a class="dropdown-item" href="product.php?catid=<?php echo $row["catid"];?>"><?php echo $row["catname"]; ?></a>
               
                <?php
    }
                        else
                        {
                            ?>
                            <a class="dropdown-item" ><?php echo $row["catname"]; ?></a>
                    
                                    <?php
                        }
                    ?>
                            
                        
                    <?php    
                    }
                    ?>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
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
     
   