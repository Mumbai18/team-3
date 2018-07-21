<?php
define("SERVER","54.169.150.246"); //defines constants
define("USERNAME","Hasti");
define("PASSWORD", "hasti");
define("DB","team_3");
//create a connection
$connection = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
//check the connection
if(!$connection){
    die("Connection failed ".mysqli_connect_error());
}
echo "Connection successfull";
?>