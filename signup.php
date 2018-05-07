<?php
       

include("connection.php");
  $msg="";


    
    
    






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
            var jemail=document.getElementById("txtemail").value;
            var jname=document.getElementById("txtname").value;
			var jgender=document.getElementById("txtgender").value;
            var jmob=document.getElementById("txtmobile").value;
			var jcity=document.getElementById("txtcity").value;
			var jadd=document.getElementById("txtaddress").value;
			var jpwd=document.getElementById("txtpwd").value;
			var jcpwd=document.getElementById("txtcpwd").value;
			var jques=document.getElementById("txtquestion").value;
			var jans=document.getElementById("txtanswer").value;
			
			
			
			
            
            var re=/^[a-zA-Z0-9_]+[@][a-zA-Z0-9]+[.][a-zA-Z]{2,4}([.][a-zA-Z]{2,4})?$/;
			var rename=/^[a-zA-Z]+$/;
			var renum=/^\d{10}$/;
			var repwd=/^\w{8}\d[!@#$%^&*=+-/]$/;
			
            if(jemail=="")
                {
                    alert("Please enter email");
                    document.getElementById("txtemail").focus();
                    return false;
                }
            else if(!jemail.match(re))
                {
                    alert("Please enter valid email");
                    document.getElementById("txtemail").focus();
                    return false;
                }
            else if(jname=="")
                {
                    alert("Please enter name");
                    document.getElementById("txtname").focus();
                    return false;
                }
			else if(!jname.match(rename))
                {
                    alert("Please enter  valid name ");
                    document.getElementById("txtname").focus();
                    return false;
                }
            else if(jmob=="")
                {
                    alert("Please enter mobile");
                    document.getElementById("txtmobile").focus();
                    return false;
                }
			else if(!jmob.match(renum))
                {
                    alert("Please enter  valid mobile");
                    document.getElementById("txtmobile").focus();
                    return false;
                }
			else if(jcity=="")
                {
                    alert("Please enter city");
                    document.getElementById("txtcity").focus();
                    return false;
                }
			else if(!jcity.match(rename))
                {
                    alert("Please enter  valid city name ");
                    document.getElementById("txtcity").focus();
                    return false;
                }

			else if(jadd=="")
                {
                    alert("Please enter full address");
                    document.getElementById("txtaddress").focus();
                    return false;
                }
			else if(jpwd=="")
                {
                    alert("Please enter pawssord");
                    document.getElementById("txtpwd").focus();
                    return false;
                }
			else if(!jpwd.match(repwd))
                {
                    alert("Please add number and !@#$%^&*  anyone of these in your password ");
                    document.getElementById("txtpwd").focus();
                    return false;
                }
			else if(jcpwd=="")
                {
                    alert("Please enter confirm-password");
                    document.getElementById("txtcpwd").focus();
                    return false;
                }
			else if(jques=="")
                {
                    alert("Please enter select any question");
                    document.getElementById("txtquestion").focus();
                    return false;
                }
				else if(jans=="")
                {
                    alert("Please provide an answer");
                    document.getElementById("txtanswer").focus();
                    return false;
                }
			else{
				
					var r=new XMLHttpRequest();
				var t=Math.random();
				r.onreadystatechange=function(){
					if(r.readyState==4)
						{
							alert(r.responseText);
						}
				}
				r.open("post","registration.php?s="+t+"&email="+jemail+"&name="+jname+"&gender="+jgender+"&number="+jmob+"&city="+jcity+"&address="+jadd+"&pwd="+jpwd+"&question="+jques+"&answer="+jans);
				r.send();
				
				
				
				
				
				
				
			}


						

        }
      
      </script>
    
  </head>
  <body> 
  
  
  
  
   
<!--signup form      -->
<div class="container-fluid  signupbg">
    <div class="row pt-5 pb-5">
        <div class="col-sm-4">&nbsp;</div>
        <div class="col-sm-4 formbg text-center">
        <form  method="post"  class="form-group text-center pt-5 pb-5">
            <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                 <h5 class="signupheading pb-1" >create your account</h5>  
               </div>
               <div class="col-sm-2"></div>
                
            </div>
            <div class="row pt-1 pb-1">
                <input type="text" id="txtemail" name="email" class="form-control" placeholder="email">
            </div>
            <div class="row pt-1 pb-1">
                <input type="text" id="txtname" name="name" class="form-control" placeholder="name">
            </div>
            <div class="row pt-1 pb-1 radiobtn ">
                 <input type="radio"  class="radiobtn" id="txtgender" value="male" checked > Male
                  <input type="radio" class="radiobtn" id="txtgender" value="female"> Female
                  <input type="radio" class="radiobtn" id="txtgender" value="other"> Other  
            </div>
            <div class="row pt-1 pb-1">
                <input type="text" id="txtmobile" name="number" class="form-control" placeholder="number">
            </div>
            <div class="row pt-1 pb-1">
                <input type="text" id="txtcity" name="city" class="form-control" placeholder="city">
            </div>
            <div class="row pt-1 pb-1">
                <input type="text" id="txtaddress" name="address" class="form-control" placeholder="address">
            </div>
            <div class="row pt-1 pb-1">
                <input type="password" id="txtpwd" name="pwd" class="form-control" placeholder="password">
            </div>
            <div class="row pt-1 pb-1">
                <input type="password" id="txtcpwd" name="cpwd" class="form-control" placeholder="confirm-password">
            </div>
            <div class="row pt-1  pb-1">
                <select name="question" id="txtquestion" class="form-control">
                    <option value="q1">1Lorem ipsum dolor sit.</option>
                    <option value="q2">2Lorem ipsum dolor sit.</option>
                    <option value="q3">3Lorem ipsum dolor sit.</option>
                    <option value="q4">4Lorem ipsum dolor sit.</option>
                  </select>
                </div>
            <div class="row pt-1 ">
                <input type="text" id="txtanswer" name="answer" class="form-control" placeholder="answer">
            </div> 
              </form>                                          
           <div class="row pt-1 text-center">
               <div class="col-sm-2"></div>
               <div class="col-sm-8 text-center">
                 <button   onclick="return fun()" class="btn btn-outline-info btn-lg">
				  sign up </button>
               </div>
               <div class="col-sm-2"></div>
                
            </div>     
                    
                                    
         
        </div>
        <div class="col-sm-4 text-right">&nbsp;</div>
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