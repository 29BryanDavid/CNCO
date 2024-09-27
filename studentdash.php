<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Dashboard</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
    <style>
        .container1 {
            min-width: 100vw;
        }
        .timetable {
            display: none; /* Initially hidden */
        }
    </style>
</head>
<body class="mx-0 my-0">
<?php session_start(); ?>
<div class="container1 w-100 p-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student Dashboard</a>
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
                            Options
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Attendance</a></li>
                            <li><a class="dropdown-item" href="#">Notifications</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" id="scheduleButton">Schedule</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="container ms-3" style="min-width:5rem;">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle btn-danger" style="min-width:5rem;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo 'Logout'; ?>
                        </button>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="http://localhost/campusproject/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container1 text-center my-3">
        <?php echo '<h1>Welcome '.$_SESSION['username'].'</h1>'; ?>
    </div>

    <div class="container1 d-flex flex-row max-vw-100 px-5">
        <div class="container py-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Attendance</h5>
                    <p class="card-text">Check your attendance here!</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="container py-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Schedule</h5>
                    <p class="card-text">Check your schedule here!</p>
                    <a href="timetable.php" class="btn btn-primary" id="scheduleButton">Generate Timetable</a>
                </div>
            </div>
        </div>

        <div class="container py-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Notifications</h5>
                    <p class="card-text">Check the notifications from here!</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container timetable my-3">
        <h2>Timetable</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Subject</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody id="timetableBody">
                <!-- Timetable will be populated here -->
            </tbody>
        </table>
    </div>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<script>
    document.getElementById('scheduleButton').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default action
        generateRandomTimetable();
    });

    function generateRandomTimetable() {
        const subjects = ['Web Development', 'AI & DS', 'HCI', 'Computer Network'];
        const timetableBody = document.getElementById('timetableBody');
        timetableBody.innerHTML = ''; // Clear previous entries
        const days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

        // Randomize the subjects and assign to days
        days.forEach(day => {
            // Shuffle subjects randomly
            const shuffledSubjects = subjects.sort(() => Math.random() - 0.5);
            let startTime = 8; // Start at 8 AM

            shuffledSubjects.forEach((subject, index) => {
                const row = document.createElement('tr');
                const endTime = startTime + 1; // Each subject is 1 hour
                row.innerHTML = `<td>${day}</td><td>${subject}</td><td>${startTime}:00 - ${endTime}:00</td>`;
                timetableBody.appendChild(row);
                startTime = endTime; // Update startTime for the next subject
            });
        });

        document.querySelector('.timetable').style.display = 'block'; // Show timetable
    }
</script>
</body>
</html>
