<?php

include("../connection.php");
$msg="";


if(!isset($_COOKIE["em"])){
	$msg="please login  ";
}
else{
	$email=$_COOKIE['em'];
$productid=$_REQUEST['id'];
	
	$olddata=mysqli_query($con,"select * from wishlist where email='$email' and productid='$productid'");
		if(mysqli_num_rows($olddata)>0){
			
			$del=mysqli_query($con,"delete from wishlist where email='$email' and productid='$productid'");
			if($del==true){
			$msg="productremove";	
			}
			else{
				$msg="error while saving deleting data";
			}
		}
else{
	$runsql=mysqli_query($con,"insert into wishlist(productid,email)values('$productid','$email')");
	if($runsql==true){
			$msg="productadd"; 
	
	}
	else{
		$msg="error while saving data";
	}
}
}



echo $msg;





















?>