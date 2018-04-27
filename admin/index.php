<?php

include("connect.php");
$msg="";



if(isset($_REQUEST['btnadmin'])){
    

$email=$_REQUEST['email'];
$pwd=$_REQUEST['pwd'];
    
$testsql=mysqli_query($con,"select * from admin where email='$email' and pwd='$pwd'");
    
    if(mysqli_num_rows($testsql)>0){
        
        setcookie("cok","$email");
        header("location:welcome.php");
    }
    else{
        $msg="invalid user";
    }




    
    
    
}
 
if(!isset($_COOKIE["cok"]))
{
	include("header.php");
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
  <body>
<!--   -->



<!--adminlogin form      -->
<div class="container-fluid pt-5  signupbg">
    <div class="row pt-5 pb-5">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 formbg text-center">
        <form  method="post"  class="form-group text-center pt-5 pb-5">
            <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                 <h5 class="signupheading pb-3" >admin login</h5>  
               </div>
               <div class="col-sm-2"></div>
                
            </div>
            <div class="row pt-1 pb-3">
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
            <div class="row pt-1 pb1">
                <input type="password" name="pwd" class="form-control" placeholder="password">
            </div>
                                                 
           <div class="row pt-4 text-center">
               <div class="col-sm-2"></div>
               <div class="col-sm-8 text-center">
                 <input type="submit" name="btnadmin" class="btn btn-success btn-lg " value="login">
                <h1 class="text-light"><?php echo $msg?></h1>
               </div>
               <div class="col-sm-2"></div>
                
            </div>     
                    
                                    
        </form>    
        </div>
        <div class="col-sm-4 text-right"></div>
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

