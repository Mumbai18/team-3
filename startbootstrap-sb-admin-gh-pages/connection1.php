<?php
$servername = "54.169.150.246";
$username = "root";
$password = "pass@123";
$db="team_3";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$con = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
