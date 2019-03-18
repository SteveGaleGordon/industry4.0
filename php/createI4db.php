<?php
$servername = "localhost";
$username = "I40";
$password = "Password1";


// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE StevesSipyIOTdb";
if (mysqli_query($conn, $sql)) {
    echo "Industry 4.0 Database created successfully";
} else {
    echo "Error creating Industry 4.0 database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>