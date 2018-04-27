<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>addcat</title>
    <script type="text/javascript">
		function saverecord()
		{
			var a=document.getElementById("txtrno").value;
			var b=document.getElementById("txtname").value;
			if(a=="")
			{
				alert("PLease enter rollno");
				document.getElementById("txtrno").focus();
			}
			else if(b=="")
			{
				alert("PLease enter name");
				document.getElementById("txtname").focus();
			}
			else
			{
				var r=new XMLHttpRequest();
				var t=Math.random();
				r.onreadystatechange=function()
				{
					if(r.readyState==4)
						{
							alert(r.responseText);
						}
				}
				r.open("post","savestu.php?s="+t+"&rno="+a+"&name="+b);
				r.send();
			}
			
		}
	</script>
    
  </head>
  <body>
<div class="container-fluid pb-5">
        
        <div class="col-sm-12  text-center">
        <form  method="post"  class="form-group text-center pt-5 pb-5">
            <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                 <h5 class="signupheading pb-3" >add cat</h5>  
               </div>
               <div class="col-sm-2"></div>
                
            </div>
            <div class="row pt-1 pb-3">
               RollNO:<br/>
                <input type="text" id="txtrno" class="form-control" />
                <br/>
                Name:<br/>
                <input type="text" id="txtname" class="form-control" />
            </div>
            <div class="row pt-4 text-center">
               <div class="col-sm-2"></div>
               <div class="col-sm-8 text-center">
                 <input type="button" onclick="saverecord()" class="btn btn-success btn-lg " value="Save">
               </div>
               <div class="col-sm-2"></div>
                
            </div>     
                    
                                    
        </form>    
        </div>
    
  </body>
</html>

