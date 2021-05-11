<?php 
$host = "localhost";
$username = "pwbhshsc_pwbhshsc";
$password = "74#pdFaYTNc8*3";
$database = "pwbhshsc_eatery";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>