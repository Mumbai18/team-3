<!DOCTYPE html>
<?php
    include('include/header.php');
    include('connection.php');
?>
<html lang="en">

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control"name="firstname" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" name="lastname" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
              <br>
              <div class="btn-group">
                <select name="Role">
              <option value="None">None</option>
              <option value="Donor">Donor</option>
              <option value="Volunteer">Volunteer</option>
              <option value="Committee">Committee</option>
              <option value="Core-Committee">Core-Committee</option>
              </select>
</div>
<br><br>

            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input class="form-control" name="phone" id="exampleInputEmail1" type="Phone" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" name="cpassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
        <center>  <button name="submit" style="height:50px;width:200px;background-color:blue; color:white; ">login</button></form>
        <div class="text-center"></center>
          <a class="d-block small mt-3" href="login_user.php">Login Page</a>
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
     $sql = "select * from user where email ='$_POST[email]'";
     $result = mysqli_query($con,$sql);
		 echo mysqli_num_rows($result);
     if(mysqli_num_rows($result)>=1)
        {
					?>
					<script type="text/javascript">
				 window.location="register.php";
				 alert('Username exists');
				 </script>
        <?php }
			else{
			$sql2="insert into user (FirstName,LastName,,email,password) values ('','$_POST[firstname]',$_POST[lastname],'$_POST[email]','$_POST[password]',$Role)";
			$ress=mysqli_query($con, $sql2);
			  ?>
			  <script type="text/javascript">
			  window.location="login_.php";
				alert('Registration successfull');
			  </script>
			  <?php
			}
		}

	?>
  <!-- Bootstrap core JavaScript-->
  <?php
      include('include/footer.php');
  ?>
</body>

</html>
