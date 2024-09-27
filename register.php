<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change to your phpMyAdmin username
$password = ""; // Change to your phpMyAdmin password
$dbname = "student_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regUsername = $_POST['username'];
    $regPassword = $_POST['password'];
    $role = $_POST['role'];

    // Hash the password for security
    $hashedPassword = password_hash($regPassword, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (username, password, role) VALUES ('$regUsername', '$hashedPassword', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
