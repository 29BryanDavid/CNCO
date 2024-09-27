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
        body {}

        .container {
            margin: 0%;
            width: "100vw";
        }

        .container1 {
            min-width: 100vw;
        }
    </style>
</head>

<body class="mx-0 my-0">
<?php 
    session_start();
    ?>
    <div class="container1 w-100 p-0">
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

                    <div class="conatiner ms-3 " style="min-width:5rem;">
                        <div class="dropdown">
                            <a href="http://localhost/campusproject/logout.php"><button class="btn   btn-danger" style="min-width:5rem;" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                            <?php echo 'logout'; ?>
                            </button></a>
    
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
                        <h5 class="card-title">Attendence</h5>
                        <p class="card-text">Add Students Attendence here!</p>
                        <a href="teacherattendancepage.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>

            <div class="container py-3">
                <div class="card" style="width: 18rem;">
                  
                    <div class="card-body">
                        <h5 class="card-title">Schedule</h5>
                        <p class="card-text">Schedule task for Students here!</p>
                        <a href="timetable.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>

            <div class="container py-3">
                <div class="card" style="width: 18rem;">
                   
                    <div class="card-body">
                        <h5 class="card-title">Notifications</h5>
                        <p class="card-text">Write something to send!</p>
                        <a href="annoucement.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
               

        

        </div>
    </div>





    </div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>


</body>

</html>