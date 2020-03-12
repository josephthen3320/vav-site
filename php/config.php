<?php

$servername =   "localhost";
$username   =   "root";
$password   =   "";
$db   =   "vis-a-vis";

// Create connection
$conn   =   new mysqli($servername, $username, $password, $db);

// Check Connection
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

// echo "Connected succesfully";
?>