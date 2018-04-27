<?php
if(!isset($_COOKIE["cok"]))
{
	header("location:index.php");
}
else{
    include("adminheader.php");
}

include("../connection.php");
$msg="";
$email=$_COOKIE["cok"];


if(isset($_REQUEST['changeimg'])){
    $picname=$_FILES["f1"]["name"];
    $picname=$email.stristr($picname,".");
        //$size=$_FILES["f1"]["size"];
    //$type=$_FILES["f1"]["type"];
   move_uploaded_file($_FILES["f1"]["tmp_name"],"images/$picname");
    $q=mysqli_query($con,"update admin set image='$picname' where email='$email'");
    
}



$q=mysqli_query($con,"select * from admin where email='$email'");
		$row=mysqli_fetch_array($q);
		$pwd=$row["pwd"];
        $img=$row["image"];



if(isset($_REQUEST['btnupdate'])){
    
    
            $oldpwd=$_REQUEST['oldpwd'];
            $newpwd=$_REQUEST['newpwd'];
    
            if($pwd==$oldpwd){
                
            $runupdate=mysqli_query($con, "update admin set pwd='$newpwd' where email='$email'");
    
    if($runupdate==true)
    {
        $msg="data updated";
    }
    else
    {
        $msg="updation fail";
    }
    }
    else{
        $msg="password don't match";
    }
    
    
    
    
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


    
     <!-- change img model   -->
 <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content bg-info">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-light">change your pic</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" class="form-group">
            <div class="row pb-2"><input type="file" name="f1" class="form-control pt-1 pb-1"></div>
             <div class="row pt-2 ">
             <div class="col-sm-6">
                 
				<input type="submit" class="btn btn-success" name="changeimg" value="change">
				 
                 
             </div>
           
            </div>  
              
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
 
    
    
      
<!-- welcome section     -->
      
         <div class="container-fluid pt-4 text-light welcomebg " >
            <div class="row "> 
<!--sidebar-->
                <div class="col-sm-4   pt-4   ">
                    <div class="row ">
				        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <img src="images/<?php echo $img; ?>" alt="sample" class="img-fluid">
                            <div class="row pt-3">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3">
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-outline-danger text-center ">
			                         change   
			                        </button>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>				
                    
                    </div>
                    <div class="row pt-3 text-center">
                       <div class="col-sm-12">
                        <h5>welcome</h5>
                        </div>
                    </div>
                    <div class="row text-center">
                       <div class="col-sm-12">
                        <h5><?php echo $email; ?></h5>
                        </div>
                    </div>
                </div>
                
<!--update area  -->
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 text-center ">
                            <h2>Change Password</h2>
                            <form method="post">
                                 <div class="form-group pt-1 pb-1">
                                    <label for="password"> old password:</label>
                                    <input type="password" class="form-control " name="oldpwd" >
                                </div>
                                 <div class="form-group pt-1 pb-1">
                                    <label for="password"> newpassword:</label>
                                    <input type="password" class="form-control " name="newpwd" >
                                </div>
                                <div class="form-group pt-1 pb-1">
                                    <label for="confirmpassword">confrim password</label>
                                   <input type="password" class="form-control">
                                </div>
                                <div class="row">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-6">
                                   <input type="submit" name="btnupdate" class="btn btn-info" value="update"> 
                                   
                                 
                                 </div>
                                <div class="col-sm-3">
                                    
                                </div>
                               </div>
                               <div class="row pb-4">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-6">
                                
                                  <h4 class="text-light"><?php echo $msg; ?></h4>
                                 </div>
                                <div class="col-sm-3"></div>
                               </div>
                           
                            </form>
                          
                        </div>
                        <div class="col-sm-2">
                              
                        </div>
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
