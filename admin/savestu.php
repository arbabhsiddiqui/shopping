<?php
include("connect.php");
$rno=$_REQUEST["rno"];
$name=$_REQUEST["name"];
$q=mysqli_query($con,"insert into student (RollNumber,Name)values('$rno','$name')");
$msg="";
if($q==true)
{
	$msg="Record Saved";
}
else
{
	$msg="Error in saving record";
}
echo $msg;
?>