<?php

       

include("connection.php");
  $msg="";
		$email=$_REQUEST['email'];
        $name=$_REQUEST['name'];
        $gender=$_REQUEST['gender'];
        $mobile=$_REQUEST['number'];
        $city=$_REQUEST['city'];
        $address=$_REQUEST['address'];
        $img="sample.png";
        $pwd=$_REQUEST['pwd'];
        $question=$_REQUEST['question'];
        $answer=$_REQUEST['answer'];


		$oldsql=mysqli_query($con,"select * from users where email='$email'");
if(mysqli_num_rows($oldsql)>0){
	$msg="an account has been already created using this email";
}
  else{
        $runsql=mysqli_query($con,"insert into users(email,name,gender,mobile,city,address,image,pwd,question,answer)values('$email','$name','$gender','$mobile','$city','$address','$img','$pwd','$question','$answer')");

        if($runsql==true){
			$msg="account created succfully";
           
        }
        else{
            $msg="error while saving data";
        }
  }
echo $msg;

























?>