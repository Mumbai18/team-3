<!DOCTYPE html>
<html lang="en">

<?php
    include('connection1.php');
    include('include/header.php');
    $query1 = "SELECT * FROM user u, profile p WHERE u.id=203 and u.detail_id=p.id";
    $query2 = "SELECT * FROM student WHERE id=203";
    $query3 = "SELECT * FROM Files f, student st WHERE st.id=203 and st.email=f.email";
    $result1=mysqli_query($conn, $query1);
    $result2=mysqli_query($conn, $query2);
    $result3=mysqli_query($conn, $query3);
?>
<head>  
<link type="text/css" rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


</style>
</head>
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
                <div class="mainDetails">
        <div id="headshot" class="quickFade">
            <img src="headshot.jpg" alt="Alan Smith" />
        </div>
        
        <div id="name">
            <h1 class="quickFade delayTwo">
                    <?php
                        $row1 = mysqli_fetch_array($result1);
                        echo $row1['name'];
                    ?>    

            </h1>
            <div id="contactDetails" class="quickFade delayFour">
            <ul>
                <li class="bold">
                    <?php
                        $row = mysqli_fetch_array($result2);
                        echo $row['basic_address'];
                    ?> 
                </li>
                <li>
                    <?php
                        echo $row['city'];
                    ?> 
                </li>
                <li>
                    <?php
                        echo $row['state'];
                        echo "<br";
                        echo $row['pincode'];
                    ?> 
                </li>
            </ul>
        </div>
            
        </div>
        
        <div class="clear"></div>
    </div>
    
    <div id="mainArea" class="quickFade delayFive">
       <section>
            <article>
                <div class="sectionTitle">
                    <h1>Education</h1>
                </div>
                
                <div class="sectionContent">
                    <?php
                        echo (json_decode($row['education_details'], true));
                    ?> 
                    <!-- <table>
                        <tr>
                            <th>Standard</th>
                            <th>Marks</th>
                            <th>Institute</th>
                            <th>Board</th>
                            <th>Year</th>
    
                        </tr>
                        <tr>
                            <td>Xth</td>
                            <td>84.6%</td>
                            <td>Sardar Patel</td>
                            <td>CBSE</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td>IX</td>
                            <td>86.9%</td>
                            <td>Sardar Patel</td>
                            <td>CBSE</td>
                            <td>2017</td>
                        </tr>
                    </table> -->
                </div>
            </article>
            <div class="clear"></div>
        </section>
         <section>
            <div class="sectionTitle">
                <h1>Achievement</h1>
            </div>
            
            <div class="sectionContent">
                <article>
                    <h2>
                        <?php
                            echo $row['achievements']
                        ?>
                    </h2>
                </article>
            </div>
            <div class="clear"></div>
        </section>
        <section>
            <article>
                <div class="sectionTitle">
                    <h1>Family Income Details</h1>
                </div>
                <div class="sectionContent">
                    <table>
                        <tr>
                            <th>Relation</th>
                            <th>Monthly Income</th>
                        </tr>
                        <tr>
                            <td>Father</td>
                            <td>
                                <?php
                                    echo $row['dad_income'];
                                ?> 
                            </td>
                        </tr>
                        <tr>
                            <td>Mother</td>
                            <td><?php
                                    echo $row['mom_income'];
                                ?> 
                            </td> 
                        </tr> 
                    </table>
                </div>
            </article>
            <div class="clear"></div>
        </section>
        <section>
            <div class="sectionTitle">
                <h1>Family Expense Details</h1>
            </div>
            <div class="sectionContent">
                <article>
                    <h2>
                        <?php
                            echo $row['expense'];
                        ?> 
                    </h2>
                </article>
            </div>
            <div class="clear"></div>
        </section>
        <section>
            <div class="sectionTitle">
                <h1>Number of Family Members</h1>
            </div>
            
            <div class="sectionContent">
                <article>
                    <h2>
                        <?php
                            echo $row['no_of_siblings'];
                        ?> 
                    </h2>
                </article>
                
            </div>
            <div class="clear"></div>
        </section>
        <section>
            <div class="sectionTitle">
                <h1>Aspiration</h1>
            </div>
            
            <div class="sectionContent">
                <article>
                    <h2>
                        <?php
                            echo $row['aspiration'];
                        ?> 
                    </h2>
                </article>
                
            </div>
            <div class="clear"></div>
        </section>
        <section>
            <div class="sectionTitle">
                <h1>Non Financial Support</h1>
            </div>
            
            <div class="sectionContent">
                <article>
                    <h2>
                        <?php
                            echo $row['non_financial'];
                        ?>
                    </h2>
                </article>                
            </div>
            <div class="clear"></div>
        </section>   
        <section>   
            <div class="sectionTitle">
                <h1>List of Documents</h1>
            </div>
            <div class="sectionContent">
                <article>
                    <h2>
                        <?php
                            while($row=mysqli_fetch_array($result3))
                            {
                                echo $row['file'];
                                echo " - ";?>
                                <a href="files/<?php echo $row["name"];?>"><?php echo $row["name"] ?></a>
                                <?php echo "<br>";
                            }
                        ?>
                    </h2>
                </article>                
            </div>
            <div class="clear"></div>
        </section>
        <br>    
        <br>    
        <center>  
            <button name="submit" style="height:50px;width:200px;background-color:blue; color:white; ">Approve</button>
            <div class="text-center">
        </center>
        <br>    
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
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
