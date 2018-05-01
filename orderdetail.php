<?php

include("connection.php");
$msg="";
$a=date("Y/m/d");
$email=$_COOKIE['em'];
$amt=$_REQUEST['total'];
$status="pending";
$number=$_REQUEST['num'];
$address=$_REQUEST['address'];
$name=$_REQUEST['name'];


$q=mysqli_query($con,"insert into productorder
(orderdate,email,amt,status,number,address,name)
values('$a','$email','$amt','$status','$number','$address','$name')");

$qid=mysqli_query($con,"select max(orderid) as orderid from productorder");
$row=mysqli_fetch_array($qid);
$oid=$row["orderid"];

$qc=mysqli_query($con,"select * from cart where Email='$email'");
while($row1=mysqli_fetch_array($qc))
{
	$pid=$row1["productid"];
	$qty=$row1["qty"];
	$price=$row1["price"];	
	$qdt=mysqli_query($con,"insert into orderdetail(orderid,productid,qty,price,email)values('$oid','$pid','$qty','$price','$email')");
}

$del=mysqli_query($con,"delete from cart where Email='$email'");

echo "order success";
?>



















