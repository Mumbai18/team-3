<!DOCTYPE html>
<html lang="en">

<?php
include('include/header.php');
include('connection1.php');
$query = "SELECT st.city, count(*) as number FROM donor_student ds, student st WHERE ds.student_id = st.id GROUP BY st.city";
$result = mysqli_query($conn, $query);
if(isset($_POST['allocate_money'])){
    $value1=$_POST['optradio'];
    $value2=$_POST['tickBox'];
    $funds=$_POST['amount'];
    $countRand=rand(15,199);
    $query="INSERT into donor_student (donor_id,student_id,donor_name,student_name,funds_allocated,year) values (12+$countRand,13+$countRand,'$value2','$value1',$funds,2018)";
    $result=mysqli_query($conn,$query);
    if(!$result)
        echo mysqli_error($conn);
    $q="Select id from user where username='$value2'";
//    echo $q;exit;
    $r=mysqli_query($conn,$q);
    $row=mysqli_fetch_assoc($r);
    $id=$row['id'];
//    echo $id;exit;
    $q="Select amount,id from donor where id=$id";
    $r=mysqli_query($conn,$q);
    $roww=mysqli_fetch_assoc($r);
    $finalAmount=$roww['amount']-$funds;
    $id=$roww['id'];
    $r=mysqli_query($conn,"UPDATE donor SET amount=$finalAmount where id=$id");
    if(!$r)
        echo mysqli_error($conn);
}


?>
<head>  
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawPieChart);
      google.charts.setOnLoadCallback(drawLineChart);
      google.charts.setOnLoadCallback(drawBarChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawPieChart() {

        // Create the data table.
        var data = new google.visualization.arrayToDataTable([
                ['Area', 'Number'],
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo "['".$row["city"]."', ".$row["number"]."],";
                }
                ?>
            ]);

        // Set chart options
        var options = {'title':'How Many Students were Funded Last Year',
                       'width':350,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('perArea'));
        chart.draw(data, options);
      }
      function drawLineChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Donations'],
          ['2004',  1000],
          ['2005',  1170],
          ['2006',  660],
          ['2007',  1030]
        ]);


        // Set chart options
        var options = {'title':'How Much was Donated',
                       'width':350,
                       'height':300
                    };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('perAmount'));
        chart.draw(data, options);
      }
      function drawBarChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Donaters'],
          ['2004',  15],
          ['2005',  10],
          ['2006',  66],
          ['2007',  100]
        ]);


        // Set chart options
        var options = {'title':'Number of Donaters',
                       'width':350,
                       'height':300
                    };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('perDonater'));
        chart.draw(data, options);
      }
    </script>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">Jain Social Group EduCon Committee</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Student List</span>
                </a>
            </li>


            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link" href="##historic">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Historic Data</span>
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
                <form method="post">
                    <div class="row">
                        <div class="table-responsive col-md-6 col-xs-12" style="table-layout: fixed">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <!--                            <th>Name</th>-->
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <?php
                                $count=1;
                                if(mysqli_num_rows($res1)>0){
                                    //we have data
                                    while($row=mysqli_fetch_assoc($res1)){
                                        $iddd=$row['id'];
                                        $query2="select amount from donor where id=$iddd";
                                        $res2=mysqli_query($conn,$query2);
                                        $row2=mysqli_fetch_assoc($res2);
                                        ?>
                                        <tr>
                                            <td><input name="tickBox" type="radio" value="<?php echo $row['username'];?>" /><?php echo $row['username']; ?></td>
                                            <td><?php echo $row2['amount'];?></td>
                                        </tr>

                                        <?php
                                        $count++;
                                    }
                                }?>

                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive col-md-6 col-xs-12" style="table-layout: fixed"  >
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <!--                                <th>Name</th>-->
                                    <th>Suggested Amount</th>
                                    <!--                                <th>Amount</th>-->
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
                                            <td><input type="radio" name="optradio" value="<?php echo $row['username'];?>" ><?php echo $row['username']; ?></td>
                                            <td><?php echo $row3['recommended_amount'];?></td>
                                        </tr>

                                        <?php
                                        $count++;
                                    }}
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Enter the amount" name="amount" class="form-control">
                    </div>
                    <button type="submit" name="allocate_money" class="btn btn-primary">Allocate money</button></form>
            </div>
        </div>
<!--    </div>-->

        <div class="card mb-3" id="#historic">
            <div class="card-header">
                <i class="fa fa-table"></i> Historic Data</div>
                <div class="card-body col-md-12">
                    <div class="row">
                        <div id="perArea"></div>
                        <div id="perAmount"></div>
                        <div id="perDonater"></div>
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
