<?php
// Database configuration
$host = "localhost:3306"; 
$username = "root"; 
$password = ""; 
$database = "cms";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
