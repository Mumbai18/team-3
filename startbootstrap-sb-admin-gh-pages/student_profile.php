<!DOCTYPE html>

<html lang="en">

<?php
session_start();
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
 
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#"></a>
            </li>
            <li class="breadcrumb-item active">Student Profile</li>
            
            
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
                           <th>Name</th><th>Qualification:</th><th>Aspiration</th><th>Family Income</th><th>Expected Help</th><th>Add Student to List</th>
                        </tr>
                        </thead>

                        <?php
                        $host = "54.169.150.246"; //server
$db = "team_3"; //database name
$user = "root"; //dabases user name
$pwd = "pass@123"; //password


$link = mysqli_connect($host, $user, $pwd, $db);

 $query = "SELECT u.detail_id,u.id,p.name,p.qualification ,s.aspiration, (s.mom_income + s.dad_income) as asp,s.financial_amount FROM user u,profile p ,student s WHERE u.role like 'student' AND u.detail_id = p.id AND s.id=u.id";
$results = mysqli_query($link, $query);

while($row = mysqli_fetch_array($results))
{
  echo "<tr><td>"; 
  echo $row['name'];
  echo "</td><td>";   
  echo $row['qualification'];
  echo "</td><td>";    
  echo $row['aspiration'];
  echo "</td><td>";    
  echo $row['asp'];
   echo "</td><td>";    
  echo $row['financial_amount'];
  echo "</td><td>";    
  echo "<a href='donor_connected.php?id=".$row['id']."'>Add student</a>";
  echo "</td></tr>";  
}?>
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
