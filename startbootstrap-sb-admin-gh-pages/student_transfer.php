<?php

include('connection1.php');
$idd=$_GET['id'];
$sql = "select username from user where id=$idd";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$s_name=$row['username'];
$sql2="insert into donor_student (donor_name,student_name,year,donor_id,student_id) values('donor1','$s_name','2018',1001,$idd)";
$row=mysqli_query($con, $sql2);
if(!$row)
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
  
 ?>
<script> window.location='donor_connected.php';</script>

 <!-- ?> -->