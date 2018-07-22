<!DOCTYPE html>
<html lang="en">

<?php
    include('include/header.php');
    include('connection1.php');
?>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form  class="login-form" action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input class="form-control" name="email" id="exampleInputEmail1" type="name" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember Password</label>
                    </div>
                </div>
                 <button name="submit" style="height:50px;width:200px;background-color:blue; color:white;">login</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="register.html">Register an Account</a>
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
      $pass=$_POST['password'];
     $sql = "select * from user where username ='$email' and role = 'donor' and password ='$pass'";
     $result = mysqli_query($con,$sql);
		 //echo mysqli_num_rows($result);
     if(mysqli_num_rows($result)>=1)
        {
					?>
					<script type="text/javascript">
				 window.location="donor_connected.php";
				 </script>
        <?php }

        $sql2 = "select * from user where username ='$email' and role = 'committee' and password ='$pass'";
        $result2 = mysqli_query($con,$sql2);
   		 //echo mysqli_num_rows($result);
        if(mysqli_num_rows($result2)>=1)
           {
   					?>
   					<script type="text/javascript">
   				 window.location="committee_dashboard.php";
   				 </script>
           <?php }


           $sql3 = "select * from user where username ='$email' and role = 'student' and password ='$pass'";
           $result3 = mysqli_query($con,$sql3);
      		 //echo mysqli_num_rows($result);
           if(mysqli_num_rows($result3)>=1)
              {
      					?>
      					<script type="text/javascript">
      				 window.location="Student_dash.php";
      				 </script>
              <?php }
              if(mysqli_num_rows($result3)>=1)
              {
      					?>
      					<script type="text/javascript">
      				 window.location="committee.php";
      				 </script>
              <?php }



}
    include('include/footer.php');
?>
</body>
</html>
