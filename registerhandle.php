<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  


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
        header("location: http://localhost/campusproject/first.html");
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo "";
        echo '
        <div class="alert alert-danger" role="alert">
  User Already Registered!
</div>
        ';
    }
}

$conn->close();
?>
</body>
</html>