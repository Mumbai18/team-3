<!DOCTYPE html>
<?php
    include('include/header.php');
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
                <input class="form-control"name="FirstName" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" name="LastName" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
              <div class="btn-group">
    <button type="button" class="form-control btn btn-default dropdown-toggle" data-toggle="dropdown">
        Select Role<span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="#">Donor</a></li>
        <li><a href="#">Volunteer</a></li>
        <li><a href="#">CoreCommittee</a></li>
    </ul>
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
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
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
  <!-- Bootstrap core JavaScript-->
  <?php
      include('include/footer.php');
  ?>
</body>

</html>
