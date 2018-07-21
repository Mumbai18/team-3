<?php

include('connection1.php');
$idd=$_GET['id'];
$sql2="update profile set status=1 where id='$idd'";

if(mysqli_query($con, $sql2)){
  
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
  }
?>
<script>window.location='committee_dashboard.php';</script>
 ?>
