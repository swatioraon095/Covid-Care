<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'covid_care';

// Create connection
$conn = new mysqli($server, $username, $password);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
if(!mysqli_select_db($conn, $database))
{
    exit('Error: could not select the database');
}

// // Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>

