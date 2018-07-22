<!DOCTYPE html>
<html lang="en">

<?php
$license='Driving License';
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
                <a class="nav-link" href="committee_dashboard.php">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Approved List</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="pending_list.php">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Pending List</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="registeruser.php">
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
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php
        include('connection1.php');
            $unamee=$_GET["id"];

            $sql="select * from Files where email='$unamee'";
            echo $sql;
            $res=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($res))
            {
    ?>

    <div class="row">
    <div class="col-md-6 form-group">
       <div class="col-md-6 form-group"
              <a style="margin-left:10px;"><b><?php echo $row['name'];?></b> </a>
            </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 form-group">
  
    <img src="<?php echo $row["name"];?>"  width="200" height="200"/>
    <div class="row">

    </div>

        </div>
      </div>

    <?php
    } ?>



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
