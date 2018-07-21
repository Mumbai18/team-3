<!DOCTYPE html>
<html lang="en">

<?php
include('include/header.php');
include('connection1.php');
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
                    <span class="nav-link-text">Student Unapproved List</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Student Approved List</span>
                </a>
            </li>


            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link" href="#">
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
                <a href="#">Core Committee</a>
            </li>
            <li class="breadcrumb-item active">Student List</li>
        </ol>
        <?php
            $query1="Select username,id from user where role='donor'";
            $res1=mysqli_query($conn,$query1);

        ?>
        <!--        student table-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example</div>
            <div class="card-body col-md-12">
                <div class="row">
                    <div class="table-responsive col-md-6 col-xs-12" style="table-layout: fixed">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <?php
                            if(mysqli_num_rows($res1)>0){
                            //we have data
                            while($row=mysqli_fetch_assoc($res1)){
                            $iddd=$row['id'];
                            $query2="select amount from donor where id=$iddd";
                            $res2=mysqli_query($conn,$query2);
                            $row2=mysqli_fetch_assoc($res2);
                        ?>
                        <tr>
                            <td><input type="checkbox" ></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row2['amount'];?></td>
                        </tr>

                        <?php }
                            }?>

                        </tbody>
                    </table>
                    </div>
                    <div class="table-responsive col-md-6 col-xs-12" style="table-layout: fixed"  >
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Suggested Amount</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <?php
                            $query="Select username,detail_id from user where id IN (Select id from student)";
                            $res=mysqli_query($conn,$query);
                            $result=mysqli_query($conn,"Select recommended_amount from student");
                            $count=1;
                            if(mysqli_num_rows($res)>0){
                            //we have data
                                $row3=mysqli_fetch_assoc($result);
                            while($row=mysqli_fetch_assoc($res)) {

                                ?>

                                <tr>
                                    <td><input type="checkbox" onclick="toggleInput(<?php echo $count;?>)"></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row3['recommended_amount'];?></td>
                                    <td><input type="text" id="<?php echo $count; ?>" disabled=true></td>
                                </tr>

                                <?php
                                $count++;
                            }}
                            ?>
                            </tbody>
                        </table>
                    </div>
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
<script>
    function toggleInput(id){
        if(document.getElementById(id).disabled == false)
            document.getElementById(id).disabled=true;
        else
            document.getElementById(id).disabled=false;
    }

</script>
</html>
