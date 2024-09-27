<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        /* Body Styles */
        body {
            min-width: 100vw;
            background-image: url('1552466075phpCEqHdg.png'); /* Background image */
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Prevent repeating the image */
            background-position: center; /* Center the background image */
            color: white; /* Text color for better visibility */
        }

        /* Main Container Styles */
        .container1 {
            min-width: 100vw;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            padding: 20px; /* Add some padding */
        }

        /* Card Styles */
        .card {
            width: 18rem;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for cards */
            margin: 1rem; /* Add margin for spacing */
        }
    </style>
</head>

<body class="mx-0 my-0">
    <!-- Navbar for Admin Dashboard -->
    <?php 
    session_start();
    ?>
    <div class="container1 w-100 p-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Admin Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Manage
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Manage Students</a></li>
                                <li><a class="dropdown-item" href="#">Manage Attendance</a></li>
                                <li><a class="dropdown-item" href="#">Manage Notifications</a></li>
                                <li><a class="dropdown-item" href="#">Manage Schedule</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="container ms-3" style="min-width: 5rem;">
                        <div class="dropdown">
                            <a href="logout.php">
                                <button class="btn btn-danger" style="min-width: 5rem;" type="button">
                                    Logout
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container1 text-center my-3">
            <?php echo '<h1>Welcome '.$_SESSION['username'].'</h1>'; ?>
        </div>
    </div>

    <div class="container d-flex flex-row justify-content-around flex-wrap my-3">
        <!-- Attendance Card -->
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Manage Attendance</h5>
                <p class="card-text">View and update student attendance records.</p>
                <a href="#" class="btn btn-primary">Manage Attendance</a>
            </div>
        </div>

        <!-- Students Management Card -->
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Manage Students</h5>
                <p class="card-text">Add, edit, or remove students from the system.</p>
                <a href="#" class="btn btn-primary">Manage Students</a>
            </div>
        </div>

        <!-- Notifications Card -->
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Manage Notifications</h5>
                <p class="card-text">Send notifications to students and staff.</p>
                <a href="#" class="btn btn-primary">Manage Notifications</a>
            </div>
        </div>

        <!-- Schedule Management Card -->
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Manage Schedule</h5>
                <p class="card-text">Update class schedules for students.</p>
                <a href="#" class="btn btn-primary">Manage Schedule</a>
            </div>
        </div>
    </div>

    <!-- New Cards for Adding Students and Teachers -->
    <div class="container d-flex flex-row justify-content-around flex-wrap my-3">
        <!-- Add Student Card -->
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Add Student</h5>
                <p class="card-text">Click below to add a new student to the system.</p>
                <a href="adminaddstudent.php" class="btn btn-success">Add Student</a>
            </div>
        </div>

        <!-- Add Teacher Card -->
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Add Teacher</h5>
                <p class="card-text">Click below to add a new teacher to the system.</p>
                <a href="adminaddteacher.php" class="btn btn-success">Add Teacher</a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
