<?php



include("connect.php");







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
    <title>addcat</title>
    <script type="text/javascript">
	  function testcat()
		{
		  
		  var tcatname=document.getElementById("txtcatname").value;
	
		  if(tcatname==""){
			  alert("please enter cat name");
			   document.getElementById("txtcatname").focus();
                    return false;
		  }
		  else
			  {
				  var r=new XMLHttpRequest();
				var t=Math.random();
				r.onreadystatechange=function()
				{
					if(r.readyState==4)
						{
							alert(r.responseText);
						}
				}
				r.open("post","cats.php?s="+t+"&catname="+tcatname);
				r.send();
			  }
		  
		  
		  
	  }
	  
	  
	  
	  </script>
  </head>
  <body>
<!--   -->





<!--addcat form      -->
<div class="container-fluid pb-5 signupbg">
    <div class="row pt-5 pb-5">
        
        <div class="col-sm-4 formbg text-center">
        <form  method="post"  class="form-group text-center pt-5 pb-5">
            <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                 <h5 class="signupheading pb-3" >add cat</h5>  
               </div>
               <div class="col-sm-2"></div>
                
            </div>
            <div class="row pt-1 pb-3">
                <input type="text"  id="txtcatname" class="form-control" placeholder="name of cat">
            </div>
            <div class="row pt-4 text-center">
               <div class="col-sm-2"></div>
               <div class="col-sm-8 text-center">
                 <input type="button"  onclick="testcat()" class="btn btn-success btn-lg " value="add">
                  
               </div>
               <div class="col-sm-2"></div>
                
            </div>     
                    
                                    
        </form>    
        </div>
        <div class="col-sm-8 text-right ">
            
            <table class="table table-bordered text-light bg-dark">
                <thead>
                    <tr>
                        <th>SNO.</th>
                        <th>CatName</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q=mysqli_query($con,"select * from cat");
                    $i=0;
                    while($row=mysqli_fetch_array($q))
                    {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row["catname"]; ?></td>
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

