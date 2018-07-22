<!DOCTYPE html>
<html lang="en">

<?php
  include('connection1.php');
    include('include/header.php');
?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Jain Social Group EduCon Committee</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Student List</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="approved_list.php">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Approved List</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="add_donor.php">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Add Donor</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link" href="registerstudent2.php">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Add Student</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link" href="StudentProfiles.php">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Student Profiles</span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">EduCon Committe</a>
            </li>
            <li class="breadcrumb-item active">First Scrutiny List</li>
        </ol>

<!--        student table-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example</div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Email Id</th>
                            <th>Current Qualification</th>
                            <th>Family Income</th>
                            <th>Expenses</th>
                            <th>Extra Curricular</th>
                            <th>Approve and send sms </th>
                        </tr>
                        </thead>

                        <?php
$res=mysqli_query($con,"select * from profile where status=0");
//echo "Hello";
while($row=mysqli_fetch_array($res))
{
?>
                        <tr>
                            <td> <?php echo $row['name']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['qualification']?></td>
                            <td><?php echo $row['income']?></td>
                            <td><?php echo $row['expected_help']?></td>
                            <td><?php echo $row['extra_curricular']?></td>
                            <td>  <a href='update_student_status.php?id=<?php echo $row["id"];?>'>Approve</a></td>
                        </tr>
<?php
} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Your Website 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
