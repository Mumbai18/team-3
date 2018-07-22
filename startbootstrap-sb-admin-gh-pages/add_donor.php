<!DOCTYPE html>
<html lang="en">

<?php
include('connection1.php');
include('include/header.php');
$error="";
if(isset($_POST["submit"]))
{
//    $name=$_POST['inputName'];
    $password=$_POST['password'];
    $role=$_POST['roles'];
    $sql="insert into user(username,password,role) values('$_POST[username]','$_POST[password]','$_POST[roles]')";
    $ress=mysqli_query($conn, $sql);
    if(!$ress){
        die("QUERY FAILED ".mysqli_error($conn));
    }
    $error="<div class='alert alert-success'>User created successfully<a class='close' data-dismiss='alert'>&times;</a></div>";
//    if (isset($_SERVER["HTTP_REFERER"])) {
//        header("Location: " . $_SERVER["HTTP_REFERER"]);
//    }
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
                    <input class="form-control" id="inputName" name="username" placeholder="Enter User Name">
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <select name="roles">
                        <option value="Donor">Donor</option>
                        <option value="Core">Core Committee Member</option>
                        <option value="Educon">EduCon Committee Member</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary" name="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php


include('include/footer.php');
?>
</body>

</html>
