<!DOCTYPE html>
<html lang="en">

<?php
    include('connection1.php');
    include('include/header.php');
    $eact=" ";
    $error="";
    if (isset($_POST['sport'])){
        $sport= $_POST['sport']; // Displays value of checked checkbox.
        $eact=$eact.$sport;
    }

    if (isset($_POST['drawing'])){
        $drawing= $_POST['drawing'];
        $eact=$eact.$drawing;// Displays value of checked checkbox.
    }

    if(isset($_POST["submit"]))
    {
        $sql="insert into profile(name,dob,phone,email,qualification,income,expected_help,extra_curricular) values('$_POST[username]','$_POST[dob]','$_POST[number]','$_POST[email]','$_POST[qualif]','$_POST[income]','$_POST[f_help]','$eact')";
        $ress=mysqli_query($conn, $sql);
        if(!$ress){
            die("QUERY FAILED ".mysqli_error($conn));
        }
        $error="<div class='alert alert-success'>Application form successfully submitted<a class='close' data-dismiss='alert'>&times;</a></div>";
    }

?>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Application</div>
        <div class="card-body">
            <?php echo $error; ?>
            <form  class="login-form" action="" method="post">
                <div class="form-group">
                    <input class="form-control" id="inputName" name="username" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <input class="form-control" id="inputContact" name="number" type="number" placeholder="Enter Contact Number">
                </div>
                <div class="form-group">
                    <input type="date" id="inputDOB" name="dob" class="form-control" placeholder="Enter DOB">
                </div>
                <div class="form-group">
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <input type="text" id="inputQualification" name="qualif" class="form-control" placeholder="Enter Current Qualification">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="income" id="inputFamilyIncome" placeholder="Enter Family Income">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="f_help" id="inputHelp" placeholder="Enter Financial Help Needed">
                </div>

                <div class="checkbox">
                    <label>Extra Curricular Activities
                    <input type="checkbox" name="sport" value="sports">Sports
                    <input type="checkbox" name="drawing" value="drawing">Drawing</label>
                </div>

                <div class="form-group">

                </div>
                <center>  <button name="submit" style="height:50px;width:200px;background-color:blue; color:white; ">Register</button>
            </form>

        </div>
    </div>
</div>
<?php


include('include/footer.php');
?>
</body>

</html>
