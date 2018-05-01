<?php
$email=$_COOKIE['em'];
$msg2='';
$orderid=0;
$productid=0;
$p=0;
$q=0;

$sqlget=mysqli_query($con,"select orderid from productorder where email='$email'");
while($row=mysqli_fetch_array($sqlget)){

	
 echo $row['orderid'].',';
}


$s=mysqli_query($con,"select * from cart where email='$email'");
while($row=mysqli_fetch_array($s)){

	
echo $productid+=$row['productid'].',';
	
	echo $p=$row['price'];
	 echo $q=$row['qty'];
	
}

