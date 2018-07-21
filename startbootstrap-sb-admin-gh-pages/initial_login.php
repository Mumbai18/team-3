<!DOCTYPE html>
<html lang="en">

<?php
    include('connection.php');
    include('include/header.php');
?>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Application</div>
        <div class="card-body">
            <form  class="login-form" action="" method="post">
                <div class="form-group">
                    <input class="form-control" id="inputName" name="name" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <input class="form-control" id="inputContact" name="number" type="number" placeholder="Enter Contact Number">
                </div>
                <div class="form-group">
                    <input type="number" id="inputAge" name="age" class="form-control" placeholder="Enter Age">
                </div>

                <div class="form-group">
                    <input type="number" id="inputQualification" name="qualif"class="form-control" placeholder="Enter Current Qualification">
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

$eact=" ";
if (isset($_POST['sport'])){
$sport= $_POST['sport']; // Displays value of checked checkbox.
$eact=$eact.$sport;
}

if (isset($_POST['drawing'])){
$drawing= $_POST['drawing'];
$eact=$eact.$drawing;// Displays value of checked checkbox.
}

if(isset($_POST["submit"]))
{$sql="insert into students (id,name,number,age,qualif,income,f_help,e_act) values('','$_POST[name]','$_POST[number]','$_POST[age]','$_POST[qualif]','$_POST[income]','$_POST[f_help]','$eact')";
	$ress=mysqli_query($con, $sql);
}
include('include/footer.php');
?>
</body>

</html>
