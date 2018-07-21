    <!DOCTYPE html>
  
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
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register yourself</div>
        <div class="card-body">
          <form method="POST" action="registerstudent2.php">


             <div class="form-group">
              <label for="exampleInputEmail1">Address Proof</label>
               <input class="form-control" id="add" name="add" type="text" aria-describedby="eduHelp" placeholder="Enter your address"><br>
               <input class="form-control" id="city" name="city" type="text" aria-describedby="eduHelp" placeholder="Enter your city"><br>
               <input class="form-control" id="state" name="state" type="text" aria-describedby="eduHelp" placeholder="Enter your state"><br>

              <input class="form-control" id="addressproof" name="addressproof" type="file" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Profile picture </label><br>
              Please upload a picture :
               <input class="form-control" id="profile_pic" name="profile_pic" type="file" aria-describedby="eduHelp"><br>
               
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
            <input class="form-control" type="text" id="qual1" name="qual1"/>
            
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

                </div>
                
                <div class="col-md-6">
                  <br>
                  <label for="exampleInputLastName">Achievements</label><br>
                   <input  type="checkbox"  name="achieve" value="sports"> Sports<br>
                  <input type="checkbox"  name="achieve" value="music" > Music<br>
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

            <label for="exampleInputEmail1">Family earning details</label><br>
             <div class="form-group">
              
             Mom :<br>
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

    <br>
    
    Non-financial:

            </div>

            <input  type="checkbox"  name="nonfinancial" value="car"> Career Guidance<br>
                  <input type="checkbox"  name="nonfinancial" value="eng" > English Speaking<br>
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Submit">
          
          </form>
          
        </div>
      </div>
    </div>

     <?php
      if(isset($_POST["submit"]))
  {
      //$res=0;
    $edu=$_POST['edu'];
 $achieve=$_POST['achieve'];
 $aspiration=$_POST['aspiration'];
 $earn1=$_POST['earn1'];
 $earn2=$_POST['earn2'];
 $add=$_POST['add'];
 $memberdetails=$_POST['memberdetails'];
 $fund=$_POST['fund'];
 $famexpense=$_POST['famexpense']; 
  $bill=$_POST['bill'];

       $fnm=$_FILES["memberdetails"]["name"];
       $dst="memberdetails\\";
       move_uploaded_file($_FILES["memberdetails"]["tmp_name"],$dst);
       $fnm1=$_FILES["bill"]["name"];
       $dst="bill\\";
       move_uploaded_file($_FILES["bill"]["tmp_name"],$dst);
       $fnm=$_FILES["memberdetails"]["name"];
       $dst="memberdetails\\";
       move_uploaded_file($_FILES["memberdetails"]["tmp_name"],$dst);
       $fnm=$_FILES["fund"]["name"];
       $dst="fund\\";
       move_uploaded_file($_FILES["fund"]["tmp_name"],$dst);
       $fnm=$_FILES["rent"]["name"];
       $dst="rent\\";
       move_uploaded_file($_FILES["rent"]["tmp_name"],$dst);
       $fnm=$_FILES["addressproof"]["name"];
       $dst="addressproof\\";
       move_uploaded_file($_FILES["addressproof"]["tmp_name"],$dst);
     //$sql = "select * from user where email ='$_POST[email]'";
     //$result = mysqli_query($con,$sql);
     //echo mysqli_num_rows($result);
     if(mysqli_num_rows($result)>=1)
        {
          ?>
          <script type="text/javascript">
         window.location="register.php";
         alert('Username exists');
         </script>
        <?php }
      else{
       
      
        ?>
        <script type="text/javascript">
        window.location="registeruser.php";
        //alert('Registration successfull');
        </script>
        <?php
      }
    }

  ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

    </html>
