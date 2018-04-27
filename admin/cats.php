<?php
include("connect.php");
$msg="";


$catname=$_REQUEST['catname'];

	$oldata=mysqli_query($con,"select * from cat where catname='$catname'");
	if(mysqli_num_rows($oldata)>0)
	{
		$msg="Catname is already existing..";

	}
	else
	{
		$runsql=mysqli_query($con," insert into cat (catname) values('$catname')");
    
		if($runsql==true){

			 $msg="data save";
		}
		else{
			$msg="data insertion fail";
		}
		
	}
	
echo $msg;














?>