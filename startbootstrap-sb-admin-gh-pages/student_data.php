<!DOCTYPE html>
<html lang="en">

<?php
    include('connection1.php');
    include('include/header.php');
    $query1 = "SELECT * FROM user u, profile p WHERE u.id=203 and u.detail_id=p.id";
    $query2 = "SELECT * FROM student WHERE id=203";
    $result1=mysqli_query($conn, $query1);
    $result2=mysqli_query($conn, $query2);
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
                    <span class="nav-link-text">Student Data</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="approved_list.php">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Documents</span>
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
            <li class="breadcrumb-item active">Student Page</li>
        </ol>

<!--        student table-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Student Data
            </div>
            <div class="card-body">
                <?php
                    while($row=mysqli_fetch_array($result1))
                    {
                        echo "<br>"; 
                        echo $row['name'];
                        echo "<br>";   
                        echo $row['dob'];
                        echo "<br>";    
                        echo $row['phone'];
                        echo "<br>";    
                        echo $row['email'];
                        echo "<br>";    
                        echo $row['qualification'];
                        echo "<br>";    
                        echo $row['income'];
                        echo "<br>";
                    }

                ?>    
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
