<?php

include("connection.php");
$msg="";

$email=$_COOKIE["em"];
$id=$_REQUEST["id"];
$price=$_REQUEST["price"];
$qty=$_REQUEST["qty"];
$oldqty=0;

$olddata=mysqli_query($con,"select * from cart where email='$email' and productid='$id'  ");

 if(mysqli_num_rows($olddata)>0){
$row=mysqli_fetch_array($olddata);
$oldqty=$row['qty'];
	$qty+=$oldqty;
	$q1=mysqli_query($con,"update cart set qty='$qty' where email='$email' and productid='$id' ");
	$msg="product add";
}
else{

$q=mysqli_query($con,"insert into cart (email,productid,price,qty)values('$email','$id','$price','$qty')");

if($q==true)
{
	$msg="product add";
}
else
{
		$msg="error while adding ";
}
}
 echo $msg;

?>



