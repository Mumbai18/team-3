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
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputName">Education History</label>
                   <input class="form-control" id="edu" name="edu" type="text" aria-describedby="eduHelp" placeholder="Enter your education history"><br>
                  <input class="form-control" id="education" name="education" type="file" aria-describedby="eduHelp" placeholder="Enter your education history"><br>

                </div>

                <div class="col-md-6">
                  <label for="exampleInputLastName">Achievements</label>
                  <input class="form-control" id="achieve" name="achieve" type="textarea" aria-describedby="achieveHelp" placeholder="Enter your achievement">

                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Aspiration</label>
              <input class="form-control" id="aspiration" name="aspiration" type="text" aria-describedby="emailHelp" placeholder="Enter aspiration goals">
            </div>

            <label for="exampleInputEmail1">Family earning details</label><br>
             <div class="form-group">

             Mom :
              <input class="form-control" id="earn1" name="earn1" type="text" aria-describedby="eduHelp" placeholder="Earning in INR"><br>
             <input class="form-control" id="expense" name="expense" type="file" aria-describedby="emailHelp">
             Dad :
              <input class="form-control" id="earn2" name="earn2" type="text" aria-describedby="eduHelp" placeholder="Earning in INR"><br>
             <input class="form-control" id="expense1" name="expense1" type="file" aria-describedby="emailHelp">

            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">Address Proof</label>
               <input class="form-control" id="add" name="add" type="text" aria-describedby="eduHelp" placeholder="Enter your address"><br>
              <input class="form-control" id="addressproof" name="addressproof" type="file" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <label for="exampleInputEmail1">Family expense details</label>
            <div class="form-group">
                <input class="form-control" id="famexpense" type="input" name="famexpense" aria-describedby="emailHelp">

            </div>

           Family expense proof :<div class="form-group">

              <input class="form-control" id="bill" name="bill" type="file" aria-describedby="emailHelp">

            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Family member details</label>
              <input class="form-control" id="memberdetails" name="memberdetails" type="email" aria-describedby="emailHelp" placeholder="Enter no of family members">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Details of fund requirement</label>
              <input class="form-control" id="fund" name="fund" type="email" aria-describedby="emailHelp">
            </div>


            <input class="btn btn-primary btn-block" type="submit" name="submit">Register

          </form>

        </div>
      </div>
    </div>

     <?php
      if(isset($_POST["submit"]))
  {

    $edu = $_POST["edu"];
    $achieve = $_POST["achieve"];
    $aspiration = $_POST["aspiration"];

    echo $_POST["aspiration"];
    }


  ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

    </html>
