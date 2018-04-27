<?php

include("connect.php");
$msg="";




if(isset($_REQUEST['addpro'])){
	
	$catid=$_REQUEST['catid'];
    $proname=$_REQUEST['productname'];
    $price=$_REQUEST['price'];
    
//    $oldproname=mysqli_query($con,"select * from product where productname='$proname'");
//	if(mysqli_num_rows($oldproname)>0)
//	{
//		$proname=$proname.rand();
//
//	}
    $picname=$_FILES["f1"]["name"];
    $picname=$proname.rand().stristr($picname,".");
    move_uploaded_file($_FILES["f1"]["tmp_name"],"images/$picname");
    
    $runsql=mysqli_query($con,"insert into product (catid,productname,price,image)values('$catid','$proname','$price','$picname')");
    
    if($runsql==true){
    echo " <script>alert('data save')</script>";
    }
    else{
      echo " <script>alert('data not save')</script>";
    }
}
	
   


if(!isset($_COOKIE["cok"]))
{
	header("location:index.php");
}
else{
    include("adminheader.php");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>welcome</title>
  </head>
  <script>
	
	  function testproduct(){

		  
		  
		  var catid=document.getElementById("jcatid").value;
		  var productname=document.getElementById("jproductname").value;
		  var price=document.getElementById("jprice").value;
		  var jimage=document.getElementById("jimage").value;

		  if(catid==""){
			  alert("please select cat id");
			  document.getElementById("jcatid").focus();
			  return false;
		  }
		    else if(productname==""){
			  alert("please select product name");
			  document.getElementById("jproductname").focus();
			  return false;
		  }
		  else  if(jprice==""){
			  alert("please select price");
			  document.getElementById("jprice").focus();
			  return false;
		  }
		  else if(jcatid==""){
			  alert("please select image");
			  document.getElementById("jimage").focus();
			  return false;
		  }
		  
		  
		  
	  }

	</script>
  
  <body>
<!--   -->


     

<div class="container-fluid bg-dark">
    <div class="row pt-5 pb-5">
        
        <div class="col-sm-4 formbg text-center">
        <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                 <h5 class="signupheading pb-3" >add product</h5>  
               </div>
               <div class="col-sm-2"></div>
                
            </div>
        <form method="post" enctype="multipart/form-data">
            <div class="row pt-1 pb-3">
               <div class="col-sm-12">
                <select name="catid" id="jcatid" class="form-control">
                  <option disabled selected value >select a cat.</option>
                    <?php
                    $q=mysqli_query($con,"select * from cat");
                    $i=0;
                    while($row=mysqli_fetch_array($q))
                    {
                        $i++;
                    ?>
                       <option value="<?php echo $row['catid']; ?>">
                           <?php echo $row["catname"]; ?>
                       </option>
                        
                    <?php    
                    }
                    ?>
                    
                   
                </select>
                </div>
            </div>
            <div class="row pt-1 pb-3">
               <div class="col-sm-12">
                <input type="text" name="productname" id="jproductname" class="form-control" placeholder="name of product">
                </div>
            </div>
           
            <div class="row pt-1 pb-3">
               <div class="col-sm-12">
                <input type="text" name="price" id="jprice" class="form-control" placeholder="price of product">
                </div>
            </div>
             <div class="row pt-1 pb-3">
               <div class="col-sm-12">
                <input type="file" name="f1" id="jimage" class="form-control" >
                </div>
            </div>
            <div class="row pt-4 text-center">
               <div class="col-sm-2"></div>
               <div class="col-sm-8 text-center">
                 <input type="submit" name="addpro" onclick="return testproduct()" class="btn btn-success btn-lg " value="add">
                <p class="text-light"><?php echo $msg;?></p>
               </div>
               <div class="col-sm-2"></div>
                
            </div>
            
            
            
        </form>
        </div>
        <div class="col-sm-8 text-right">
               <table class="table table-bordered text-light bg-dark">
                <thead>
                    <tr>
                        <th>SNO.</th>
                        <th>Catids</th>
                        <th>productname</th>
                        <th>price</th>
                        <th>image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q=mysqli_query($con,"select * from product");
                    $i=0;
                    while($row=mysqli_fetch_array($q))
                    {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row["catid"]; ?></td>
                            <td><?php echo $row["productname"]; ?></td>
                            <td><?php echo $row["price"]; ?></td>
                            <td><img src="images/<?php echo $row["image"]; ?>" style="width:50px" /></td>
                        </tr>
                    <?php    
                    }
                    ?>
                </tbody>
            </table>
            
           
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
