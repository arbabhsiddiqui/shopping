<?php
       

include("connection.php");
  $msg="";


    
    
    


if(isset($_REQUEST['btnsignup'])){

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
  
        $runsql=mysqli_query($con,"insert into users(email,name,gender,mobile,city,address,image,pwd,question,answer)values('$email','$name','$gender','$mobile','$city','$address','$img','$pwd','$question','$answer')");

        if($runsql==true){
			
           echo "<script>alert('account has been created')</script>";
            
			header("location:index.php");
        }
        else{
            $msg="error while saving data";
        }





    }



 include("header.php");
?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
   
    <title>Hello, world!</title>
    
    <script type="text/javascript">
      function fun()
        {
            var email=document.getElementById("txtemail").value;
            var name=document.getElementById("txtname").value;
            var mob=document.getElementById("txtmobile").value;
			var city=document.getElementById("txtcity").value;
			var add=document.getElementById("txtaddress").value;
			var pwd=document.getElementById("txtpwd").value;
			var cpwd=document.getElementById("txtcpwd").value;
			
			
			
			
            
            var re=/^[a-zA-Z0-9_]+[@][a-zA-Z0-9]+[.][a-zA-Z]{2,4}([.][a-zA-Z]{2,4})?$/;
            
            if(email=="")
                {
                    alert("Please enter email");
                    document.getElementById("txtemail").focus();
                    return false;
                }
            else if(!email.match(re))
                {
                    alert("Please enter valid email");
                    document.getElementById("txtemail").focus();
                    return false;
                }
            else if(name=="")
                {
                    alert("Please enter name");
                    document.getElementById("txtname").focus();
                    return false;
                }
            else if(mob=="")
                {
                    alert("Please enter mobile");
                    document.getElementById("txtmobile").focus();
                    return false;
                }
			else if(city=="")
                {
                    alert("Please enter city");
                    document.getElementById("txtcity").focus();
                    return false;
                }
			else if(add=="")
                {
                    alert("Please enter full address");
                    document.getElementById("txtaddress").focus();
                    return false;
                }
			else if(pwd=="")
                {
                    alert("Please enter pawssord");
                    document.getElementById("txtpwd").focus();
                    return false;
                }
			else if(cpwd=="")
                {
                    alert("Please enter confirm-password");
                    document.getElementById("txtcpwd").focus();
                    return false;
                }
			else if(pwd!=cpwd)
                {
                    alert("password don't match");
                    document.getElementById("txtpwd").focus();
                    return false;
                }


						

        }
      
      </script>
    
  </head>
  <body> 
  
  
  
  
   
<!--signup form      -->
<div class="container-fluid  signupbg">
    <div class="row pt-5 pb-5">
        <div class="col-sm-4">1</div>
        <div class="col-sm-4 formbg text-center">
        <form action="" method="post"  class="form-group text-center pt-5 pb-5">
            <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                 <h5 class="signupheading" >registration form</h5>  
               </div>
               <div class="col-sm-2"></div>
                
            </div>
            <div class="row pt-1 pb-1">
                <input type="text" id="txtemail" name="email" class="form-control" placeholder="email">
            </div>
            <div class="row pt-1 pb1">
                <input type="text" id="txtname" name="name" class="form-control" placeholder="name">
            </div>
            <div class="row pt-1 pb-1 radiobtn ">
                 <input type="radio"  class="radiobtn" name="gender" value="male" > Male
                  <input type="radio" class="radiobtn" name="gender" value="female"> Female
                  <input type="radio" class="radiobtn" name="gender" value="other"> Other  
            </div>
            <div class="row pt-1 pb1">
                <input type="text" id="txtmobile" name="number" class="form-control" placeholder="number">
            </div>
            <div class="row pt-1 pb1">
                <input type="text" id="txtcity" name="city" class="form-control" placeholder="city">
            </div>
            <div class="row pt-1 pb1">
                <input type="text" id="txtaddress" name="address" class="form-control" placeholder="address">
            </div>
            <div class="row pt-1 pb1">
                <input type="password" id="txtpwd" name="pwd" class="form-control" placeholder="password">
            </div>
            <div class="row pt-1 pb1">
                <input type="password" id="txtcpwd" name="cpwd" class="form-control" placeholder="confirm-password">
            </div>
            <div class="row pt-1 id="txtquestion" pb1">
                <select name="question" class="form-control">
                    <option value="q1">1Lorem ipsum dolor sit.</option>
                    <option value="q2">2Lorem ipsum dolor sit.</option>
                    <option value="q3">3Lorem ipsum dolor sit.</option>
                    <option value="q4">4Lorem ipsum dolor sit.</option>
                  </select>
                </div>
            <div class="row pt-1 pb1">
                <input type="text" id="txtanswer" name="answer" class="form-control" placeholder="answer">
            </div>                                          
           <div class="row pt-4 text-center">
               <div class="col-sm-2"></div>
               <div class="col-sm-8 text-center">
                 <input type="submit" name="btnsignup" onclick="return fun()" class="btn btn-outline-danger btn-lg">
                <p class="text-light"><?php echo $msg;?></p>
               </div>
               <div class="col-sm-2"></div>
                
            </div>     
                    
                                    
        </form>    
        </div>
        <div class="col-sm-4 text-right">3</div>
    </div>
</div>      

      
<?php include("footer.php")?>      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>