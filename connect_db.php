<?php
// error_reporting (1);
// $con=mysqli_connect('localhost','root','')or die("cannot connect to server");
// mysqli_select_db('pms')or die("cannot connect to database");




error_reporting(1);

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pms";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
// echo "Connected successfully";

// Use the connection for your database operations

// Close the connection
$conn->close();
?>