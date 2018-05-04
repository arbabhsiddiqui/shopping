<?php
include("connection.php");
$msg="";
   	$id=$_REQUEST['id'];
    $pwd=$_REQUEST['pwd'];
    
    
    $runsql=mysqli_query($con,"select * from users where email='$id' and pwd='$pwd'");
    
    if(mysqli_num_rows($runsql)>0)
	{
		setcookie("em","$id");
        }
    
    else{
        $msg="user not found";
    }
echo $msg;
    
    
    
    
















?>