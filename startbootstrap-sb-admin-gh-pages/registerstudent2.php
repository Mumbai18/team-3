<!DOCTYPE html>

<?php
include 'connection1.php'
 ?>
     <html lang="en">

     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    </head>
    <body class="bg-dark">
        <div class="container" style="background:white;">
         <div class="card-header">Register yourself</div>
         <div class="card-body">
           <form method="post" action="" enctype="multipart/form-data"">
             <div class="form-group">
            </div>

             <div class="form-group">
                           <input class="form-control" id="email" name="email"  placeholder="Enter your email address">
              <label for="exampleInputEmail1">Address Proof</label>
               <input class="form-control" id="add" name="add"  placeholder="Enter your address"><br>
  <br>

               <input class="form-control" id="city" name="city" type="text" aria-describedby="eduHelp" placeholder="Enter your city"><br>

               <input class="form-control" id="state" name="state" type="text" aria-describedby="eduHelp" placeholder="Enter your state"><br>
            <br>
              <input type="file"name="filee" id="filee" class="form-control " required></div>

            <div class="form-group">
              <label for="exampleInputEmail1">Profile picture </label><br>
              Please upload a picture :
        <input type="file"name="filee" id="filee" class="form-control " required><br>

               </div>

             <div class="form-group">
               <div class="form-row">
                 <div class="col-md-6">
                   <label for="exampleInputName">Education History</label>
                   <table>
<tr>
        <td>
            Standard

        </td>

        <td>
           Marks
        </td>

        <td>
            Institute
        </td>
        <td>
         Board
        </td>

        <td>
           Year
        </td>
    </tr>

    <tr>
        <td>


        </td>

        <td>
            <input class="form-control" type="text" id="qual2" name="qual2"  />

        </td>

        <td>
            <input  class="form-control" type="text" id="qual3" name="qual3"/>

        </td>
        <td>
            <input class="form-control" type="text" id="qual4" name="qual4"  />

        </td>

        <td>
            <input class="form-control" type="text" id="qual5" name="qual5"/>

        </td>
    </tr>

        <tr>
        <td>
            <input class="form-control" type="text" id="qual6" name="qual6"/>

        </td>

        <td>
            <input class="form-control" type="text" id="qual7" name="qual7"  />

        </td>

        <td>
          <input  class="form-control" type="text" id="qual8" name="qual8"/>

        </td>
        <td>
            <input class="form-control" type="text" id="qual9" name="qual9"  />

        </td>

        <td>
            <input class="form-control" type="text" id="qual10" name="qual10"/>

        </td>
    </tr>
</table>
             <input class="form-control" id="expense" name="expense" type="file" aria-describedby="emailHelp">
                   <input class="form-control" id="edu" name="edu" type="text" aria-describedby="eduHelp" placeholder="Enter your education history"><br>
                  <input class="form-control" id="education" name="education" type="file" aria-describedby="eduHelp" placeholder="Enter your education history"><br>

                 </div>


                 <div class="col-md-6">
                  <br>
                  <label for="exampleInputLastName">Achievements</label><br>
                   <input  type="checkbox"  name="sport" value="sport"> Sports<br>
                  <input type="checkbox"  name="drawing" value="drawing" > Drawing<br>

                 </div>
               </div>
             </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Aspiration</label><br>
              <input  type="radio"  name="aspiration" value="medical"> Medical<br>
                  <input type="radio"  name="aspiration" value="engineer" >Engineer<br>
                  <input  type="radio"  name="aspiration" value="commerce"> Commerce<br>
                <input type="radio"  name="aspiration" value="ca" >CA<br>

                            </div>
              <label for="exampleInputEmail1">Aspiration</label>
              <input class="form-control" id="aspiration" name="aspiration" type="text" aria-describedby="emailHelp" placeholder="Enter
               goals">
            </div>

             <label for="exampleInputEmail1">Family earning details</label><br>
              <div class="form-group">

             Mom :
             Name:
                           <input class="form-control" id="mom" name="mom" type="text" aria-describedby="eduHelp"><br>
              <input class="form-control" id="earn1" name="earn1" type="text" aria-describedby="eduHelp" placeholder="Earning in INR"><br>
              <input class="form-control" id="expense" name="expense" type="file" aria-describedby="emailHelp">
              Dad :
              Name:
                           <input class="form-control" id="dad" name="dad" type="text" aria-describedby="eduHelp"><br>

             <input class="form-control" id="earn2" name="earn2" type="text" aria-describedby="eduHelp" placeholder="Earning in INR"><br>
              <input class="form-control" id="expense1" name="expense1" type="file" aria-describedby="emailHelp">

             </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Address Proof</label>

              <input class="form-control" id="addressproof" name="addressproof" type="file" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

             <label for="exampleInputEmail1">Family expense details</label>
             <div class="form-group">
                <input class="form-control" id="famexpense" type="text" name="famexpense" aria-describedby="emailHelp">

             </div>


            Family expense proof :<div class="form-group">


             <input class="form-control" id="bill" name="bill" type="file" aria-describedby="emailHelp">
             </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Family member details</label>
              <input class="form-control" id="memberdetails" name="memberdetails" type="text" aria-describedby="emailHelp" placeholder="Enter no of family members">
             </div>

           <div class="form-group">
             <label for="exampleInputEmail1">Details of fund requirement</label>
              Financial :
               <table>

<tr>
        <td>
Amount
        </td>

        <td>
Institute
        </td>

        <td>
       Date
        </td>
      </tr>

<tr>
      <td>
 <input class="form-control" id="amount" name="amount" type="text" aria-describedby="emailHelp">

        </td>
        <td>
        <input class="form-control" id="institute" name="institute" type="text" aria-describedby="emailHelp">
        </td>

        <td>
         <input class="form-control" id="date" name="date" type="text" aria-describedby="emailHelp">
        </td>
      </tr>
    </table>
            </div>

    <br>

    Non-financial:
    <input  type="checkbox"  name="nonfinancial" value="car"> Career Guidance<br>
          <input type="checkbox"  name="nonfinancial" value="eng" > English Speaking<br>
    <input class="btn btn-primary btn-block" type="submit" name="submit" value="Submit">

    </form>
            </div>



         </div>
       </div>
     </div>


     <?php
      if(isset($_POST["submit"]))
  {
    // echo "test";
   // echo $_POST['add'];
   $city=$_POST['city'];
   echo "$city";
   $add=$_POST['add'];
   echo "$add";
   $state=$_POST['state'];
   echo "$state";
   //$pinc=$_POST['pincode'];

   $edu = $_POST['edu'];//Text field
   echo "$edu";
    $eact=" ";
    $error="";
    if (isset($_POST['sport'])){

        $sport= $_POST['sport']; // Displays value of checked checkbox.
        $eact=$eact.$sport;
    }

    if (isset($_POST['drawing'])){
        $drawing= $_POST['drawing'];
        $eact=$eact.$drawing;// Displays value of checked checkbox.
    }
    echo "$eact";
    $achieve=$eact;
         $email=$_POST["email"];
    //$achieve = $_POST["achieve"];
    $aspiration = $_POST['aspiration'];
    $mom=$_POST['mom'];

    $earn1= $_POST['earn1'];
    $dad=$_POST['dad'];
    $earn2=$_POST['earn2'];
    $fam=$_POST['famexpense'];
    $institute=$_POST['institute'];
    echo"$mom";
    echo"$dad";
    echo"$earn1";
    echo"$earn2";
    $mem=$_POST['memberdetails'];
    echo"$mem";
    if (isset($_POST['aspiration'])){
        $aspiration = $_POST['aspiration'];
    }
    echo "$aspiration";
    //
    $aspiration="Medical";
    $amount=$_POST['amount'];
    echo "$amount";
    $date=$_POST['date'];
    echo "$date";
    //var_dump($_POST);

/*    $sql= "Insert into student(id,basic_address,city,state,pincode,education_details,achievements,aspiration,dad_name,dad_income,dad_profession,mom_name,mom_income,mom_profession,no_of_siblings,expense,financial_amount,financial_institute,deadline,non_financial,profile_pic,recommended_amount) values('103','$add','$city','$state','0','$edu','$achieve','$aspiration','$dad','$earn2','0','$mom','$earn1','0','$mem','0','0','$institute','$date','0','0','$amount')";
    $result=mysqli_query($con,$sql);


    echo "$sql";
    //var_dump($result);
    //$result=mysqli_query($con,$sql);
    if(!$result)
      echo mysqli_error($conn);exit;
  */

          //Address
           $fnm=$_FILES["filee"]["name"];
           $dst="files\\".$fnm;
             $dst1="".$fnm;
$sql="Insert into Files (email,file,name) values('$email','address','$dst')";
           move_uploaded_file($_FILES["filee"]["tmp_name"],$dst);
           mysqli_query($con,$sql);
           echo $sql;

//Profile
           $fnm=$_FILES["filee"]["name"];
           $dst="files\\".$fnm;
             $dst1="".$fnm;
$sql="Insert into Files (email,file,name) values('$email','profile','$dst')";
           move_uploaded_file($_FILES["file2"]["tmp_name"],$dst);
           mysqli_query($con,$sql);
           echo $sql;




      }
  ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </div>

    </body>

    </html>
