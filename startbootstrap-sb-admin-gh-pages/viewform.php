<?php
    include('connection1.php');
        $unamee=$_GET["id"];

        $sql="select * from Files where email='$unamee'";
//        echo $sql;
        $res=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($res))
        {
?>

<div class="row">
<div class="col-md-6 form-group">
   <div class="col-md-6 form-group"
          <a style="margin-left:10px;"><b>Email :<?php echo $row['email'];?></b> </a>
        </div>
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
  <?php echo $row["name"]; ?>
<img src="<?php echo $row["name"];?>"  width="200" height="200"/>
<div class="row">

</div>

    </div>
  </div>

<?php
} ?>
