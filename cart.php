<?php

include("connection.php");
$msg="";

$email=$_COOKIE["em"];
$id=$_REQUEST["id"];
$price=$_REQUEST["price"];
$qty=$_REQUEST["qty"];
$q=mysqli_query($con,"insert into cart (email,productid,price,qty)values('$email','$id','$price','$qty')");

if($q==true)
{
	$msg="done";
}
else
{
		$msg="done";
}
 echo $msg;

?>



