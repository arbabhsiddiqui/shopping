<?php
include("connection.php");
$msg="";
$cartid=$_REQUEST['del'];
$y=mysqli_query($con,"delete from cart where cartid='$cartid'");

if($y==true){
	$msg="product remove";
}
else{
	$msg="error while removing product";
}
echo $msg;






?>