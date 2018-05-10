
<?php
include("connection.php");
$msg="";
$email=$_COOKIE['em'];
	   $name=$_REQUEST['name'];
		$mob=$_REQUEST['number'];
        $city=$_REQUEST['city'];
        $address=$_REQUEST['address'];
    
      $runupdate=mysqli_query($con,"update users set name='$name',mobile='$mob',city='$city',address='$address' where email='$email'");
    
    if($runupdate==true)
    {
        $msg="data updated";
		
		
    }
    else
    {
        $msg="update users set name='$name',mobile='$mob',city='$city',address='$address' where email='$email'";
    }

echo $msg;
    



















?>
