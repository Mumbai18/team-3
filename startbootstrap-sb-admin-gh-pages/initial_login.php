<!DOCTYPE html>
<html lang="en">

<?php
    include('include/header.php');
?>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Application</div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <input class="form-control" id="inputName" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <input class="form-control" id="inputContact" type="number" placeholder="Enter Contact Number">
                </div>
                <div class="form-group">
                    <input type="number" id="inputAge" class="form-control" placeholder="Enter Age">
                </div>

                <div class="form-group">
                    <input type="number" id="inputQualification" class="form-control" placeholder="Enter Current Qualification">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" id="inputFamilyIncome" placeholder="Enter Family Income">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" id="inputHelp" placeholder="Enter Financial Help Needed">
                </div>

                <div class="checkbox">
                    <label>Extra Curricular Activities
                    <input type="checkbox" value="sports">Sports
                    <input type="checkbox" value="drawing">Drawing</label>
                </div>

                <div class="form-group">

                </div>
                <a class="btn btn-primary btn-block" href="index.html">Submit</a>
            </form>

        </div>
    </div>
</div>
<?php
include('include/footer.php');
?>
</body>

</html>
