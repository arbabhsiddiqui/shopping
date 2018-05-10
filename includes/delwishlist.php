<?php
include("../connection.php");
$msg="";
$wishid=$_REQUEST['del'];
$y=mysqli_query($con,"delete from wishlist where wishid='$wishid'");

if($y==true){
	$msg="product remove";
}
else{
	$msg="error while removing product";
}
echo $msg;






?>