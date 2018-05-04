<?php
include("connection.php");
$msg="";




?>
<script>
function login(){
	var id=document.getElementById("id").value;
	var pwd=document.getElementById("pwd").value;
	 
	
	if(id==''){
		alert("enter your email id");
		document.getElementById("id").focus();
		false();
	}
	
	
	else if(pwd==''){
		alert("enter your password ");
		document.getElementById("pwd").focus();
		false();
	}
	else{
		var r=new XMLHttpRequest();
		var t=Math.random();
		r.onreadystatechange=function(){
			if(r.readyState==4){
				alert(r.responseText);
				window.location="welcome.php";
			}
		}
		r.open("post","login.php?s="+t+"&id="+id+"&pwd="+pwd);
		r.send();
		
		
		
		
	}
}

</script>


    <div class="container-fluid bg-dark header-top d-none d-md-block">
	    <div class="container">
		    <div class="row text-light pt-2 pb-2">
			    <div class="col-md-5"><i class="fa fa-envelope-o" aria-hidden="true"></i>moodyinks@gmail.com</div>
			    <div class="col-md-3">
				
			    </div>
			    <div class="col-md-2"><i class="fa fa-user-o" aria-hidden="true"></i> <button data-toggle="modal" data-target="#myModal" class="btn btn-none ">
			     Account   
			    </button></div>
			    <div class="col-md-2"><i class="fa fa-cart-plus" aria-hidden="true"></i> My Cart - $0.00</div>
		    </div>
	    </div>
    </div>
    
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
            <div class="row pb-2"><input type="text" id="id" class="form-control pt-1 pb-1" placeholder="userid/email"></div>
            <div class="row pb-2"><input type="password" id="pwd" class="form-control pt-1 pb-1" placeholder="password"></div> 
            </form>
            <div class="row pt-2 ">
             <div class="col-sm-6">
                 
				 <button  class="btn btn-success" onclick="login()" >login</button>
				 
                 
             </div>
             <div class="col-sm-6">
                 <a href="signup.php" class="btn btn-primary ">signup</a>
             </div>
            </div>  
             
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
 
    
    
    <!--nav bar    -->
    <div class="container-fluid bg-black">
	    <nav class="container navbar navbar-expand-lg navbar-dark bg-black">
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
                    $q=mysqli_query($con,"select * from cat");
                    
                    while($row=mysqli_fetch_array($q))
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
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
              <li class="nav-item d-block d-md-none">
                <button data-toggle="modal" data-target="#myModal" class="btn btn-none nav-link">
			     Account   
			    </button>  
              </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
         </div>
     </nav>
   </div>

















































