<?php
$servername = "localhost"; // Replace with your MySQL server name
$username = "chanda"; // Replace with your MySQL username
$password = "Chanda@187."; // Replace with your MySQL password
$dbname = "ict461"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
