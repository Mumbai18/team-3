<!DOCTYPE html>
<?php
    include('include/header.php');
    include('connection1.php');
?>
<html lang="en">

<body class="bg-dark">
  	<div class="container">
    	<div class="card card-register mx-auto mt-5">
      		<div class="card-header">Register an Account</div>
      			<div class="card-body">
        			<form  class="login-form" action="registeruser.php" method="post">
          				<div class="form-group">
            				<div class="form-row">
              					<div class="col-md-6">
	                				<label for="exampleInputName">First Name</label>
	                				<input class="form-control"name="firstname" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              					</div>
              					<div class="col-md-6">
                					<label for="exampleInputLastName">Last Name</label>
                					<input class="form-control" name="lastname" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              					</div>
            				</div> 
            			</div>
          				<div class="form-group">
            				<label for="exampleInputEmail1">Phone</label>
            				<input class="form-control" name="phone" id="exampleInputEmail1" type="Phone" aria-describedby="emailHelp" placeholder="Enter email">
          				</div>
          				<div class="form-group">
            				<label for="exampleInputEmail1">Email Address</label>
            				<input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          				</div>
          				<div class="form-group">
            				<div class="form-row">
              					<div class="col-md-6">
		                			<label for="exampleInputPassword1">Password</label>
		                			<input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
	  	            			</div>
        	      				<div class="col-md-6">
            	    				<label for="exampleConfirmPassword">Confirm Password</label>
                					<input class="form-control" id="exampleConfirmPassword" name="cpassword" type="password" placeholder="Confirm password">
              					</div>
            				</div>
            			<div class="col-md-6" style="margin-top: 3%;">
                			<label for="exampleInputLastName">Register as: </label>
                				<div class="btn-group">
                					<select name="Role">
              							<option value="None">None</option>
			            				<option value="Donor">Donor</option>
			            				<option value="Volunteer">Volunteer</option>
			            				<option value="Committee">Committee</option>
			            				<option value="Core-Committee">Core-Committee</option>
              						</select>
								</div>
							</div>
          				</div>
        				<center>  
        					<button name="submit" style="height:50px;width:200px;background-color:blue; color:white; ">Register</button>
        					<div class="text-center">
        				</center>
        			</form>
          			<a class="d-block small mt-3" href="login.php">Login Page</a>
          			<a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        		</div>
      		</div>
    	</div>
	</div>

  <?php
			if(isset($_POST["submit"]))
	{
			//$res=0;
			$email = $_POST['email'];
      $Role = $_POST['Role'];
     //$sql = "select * from user where email ='$_POST[email]'";
     //$result = mysqli_query($con,$sql);
		 //echo mysqli_num_rows($result);
     //if(mysqli_num_rows($result)>=1)
      //  {
				//

        //echo "$_POST[firstname]";
			$sql2="insert into user (id,firstname,lastname,role,phone,email,password) values ('','$_POST[firstname]','$_POST[lastname]','$Role','$_POST[phone]','$email','$_POST[password]');";
			$ress=mysqli_query($con, $sql2);
			  ?>
			  <script type="text/javascript">
			  window.location="login.php";
				//alert('Registration successfull');
			  </script>
			  <?php
			}


	?>
  <!-- Bootstrap core JavaScript-->
  <?php
      include('include/footer.php');
  ?>
</body>

</html>
