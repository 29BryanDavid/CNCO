<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.css">
  <title>Teacher Registration</title>
  <style>
    .container {
      margin: 0%;
      width: 99vw;
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

    $teacherDataInserted = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s_name = $_POST['teacher_name'];
        $email = $_POST['teacher_email'];
        $div = $_POST['teacher_division'];
        $department = $_POST['teacher_department'];

        $sql = "INSERT INTO `teacher` (`name`, `email`, `Division`, `department`) VALUES ('$s_name', '$email', '$div', '$department')";

        if ($conn->query($sql) === TRUE) {
            $teacherDataInserted = true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error; // Display error if insert fails
        }
    }
  ?>

  <div class="container1 p-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Teacher</a>
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
                <li><a class="dropdown-item" href="#">Attendance</a></li>
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

  <div class="container border my-5 py-5" style="margin: auto;">
    <h2 class="text-center my-4">Register New Teacher</h2>
    <form method="POST" action="#">
      <div class="mb-3">
        <label for="teacher_name" class="form-label">Teacher Name</label>
        <input type="text" class="form-control" name="teacher_name" id="teacher_name" placeholder="Enter name" required>
      </div>

      <div class="mb-3">
        <label for="teacher_email" class="form-label">Teacher Email ID</label>
        <input type="email" class="form-control" name="teacher_email" id="teacher_email" placeholder="Ex. Abc@gmail.com" required>
      </div>

      <div class="mb-3">
        <label for="teacher_division" class="form-label">Teaching in Division</label>
        <input type="text" class="form-control" name="teacher_division" id="teacher_division" placeholder="Ex. A" required>
      </div>

      <div class="mb-3">
        <label for="teacher_department" class="form-label">Working in Department</label>
        <input type="text" class="form-control" name="teacher_department" id="teacher_department" placeholder="Ex. Computer Science" required>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-success">Add Teacher</button>
      </div>

      <?php if ($teacherDataInserted): ?>
        <div class="alert alert-success mt-3" role="alert">
          Teacher added successfully!
        </div>
      <?php endif; ?>
    </form>
  </div>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-A4e2Vikd9Z4HeuB8FL1Oj6cKfSxU1Tdh7IEzGwbkhJ29V2g7T7gNSbR4M1V3bh2b" crossorigin="anonymous"></script>

</body>
</html>
