<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="automate";
$port = 3306;

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname, port: $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>