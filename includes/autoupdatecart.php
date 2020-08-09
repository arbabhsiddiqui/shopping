 <?php
include("../connection.php");

				$email=$_COOKIE['em'];	
				$q=mysqli_query($con,"select * from cart where  email='$email' ");	
						
					
					   echo " : ".mysqli_num_rows($q);
			?>