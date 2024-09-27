<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE username='$loginUsername'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($loginPassword, $row['password'])) {
            // Successful login
            $_SESSION['username'] = $loginUsername;
            $_SESSION['role'] = $row['role'];
            echo "Login successful! Welcome, " . $loginUsername;
        } else {
            // Incorrect password
            echo "Invalid username or password.";
        }
    } else {
        // User not found
        echo "Invalid username or password.";
    }
}

$conn->close();
?>
