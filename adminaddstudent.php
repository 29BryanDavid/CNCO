<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.css">
  <title>Hello, world!</title>
  <style>

    .container {
      margin: 0%;
      width: "99vw";
    }

    .container1 {
      min-width: 98vw;
    }
  </style>
</head>

<body class="mx-0 my-0">
    <?php  
    session_start();
    $servername = "localhost";
$username = "root"; // Change to your phpMyAdmin username
$password = ""; // Change to your phpMyAdmin password
$dbname = "student_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$studentdatainserted=false;

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $s_name = $_POST['student_name'];
    $rollno = $_POST['Student_roll_no'];
    $email = $_POST['student_email'];
    $year = $_POST['student_year'];
    $div = $_POST['student_division'];
    $department = $_POST['student_department'];
    $studentdatainserted=false;

    $sql="INSERT INTO `student` (`username`, `Division`, `year`, `dept`, `Roll_no`, `email`) VALUES ('$s_name', '$div', '$year', '$department', '$rollno', '$email')";

    if ($conn->query($sql) === TRUE) {
        $studentdatainserted=true;

    } else{

    }
    



 }
    
    ?>
  <div class="container1  p-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Goto
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Attendence</a></li>
                <li><a class="dropdown-item" href="#">Notifications</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Schedule</a></li>
              </ul>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>




  </div>

<?php 
if($studentdatainserted)
{
    echo '
        <div class="alert alert-success" role="alert"> Data Inserted Successfully! </div>
        ';
}



?>



  <div class="container border my-5 py-5" style="margin: auto;">
    <h2 class="text-center my-4">Register New Student</h2>
    <form method="POST" action="#" method="post">
      <div class="mb-3">

        <label for="sessionDate" class="form-label">Student Name</label>
        <input type="text" class="form-control" id="name" name="student_name" aria-describedby="name" placeholder="Enter name">
      </div>
      <div class="mb-3">
        <label for="sessionDate" class="form-label">Student Roll No</label>
        <input type="text" class="form-control" id="name" name="Student_roll_no" aria-describedby="name" placeholder="Ex. 01">
      </div>
      <div class="mb-3">
        <label for="sessionDate" class="form-label">Student Email ID</label>
        <input type="email" class="form-control" id="name" name="student_email"aria-describedby="name" placeholder="Ex. Abc@gmail.com">
      </div>
      <div class="mb-3">
        <label for="sessionDate" class="form-label">Student year</label>
        <input type="text" class="form-control" id="name" name="student_year" aria-describedby="name" placeholder="Ex. SE TE ">
      </div>
      <div class="mb-3">
        <label for="sessionDate" class="form-label">Student Division</label>
        <input type="text" class="form-control" id="Division" name="student_division" aria-describedby="name" placeholder="Ex. A ">
      </div>
      
      <div class="mb-3">
        <label for="sessionDate" class="form-label">Student Department</label>
        <input type="text" class="form-control" id="name" name="student_department" aria-describedby="name" placeholder="Ex. computer Science">
      </div>


      <div class="text-center">
        <button type="submit" class="btn btn-success">Add Student</button>
      </div>
    </form>
  </div>




  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>


</body>
