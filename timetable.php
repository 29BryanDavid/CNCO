<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Timetable</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
    <style>
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center">Weekly Timetable</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Day</th>
                <th>Subject</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody id="timetableBody">
            <?php
            // Generate Timetable
            $subjects = ['Web Development', 'AI & DS', 'HCI', 'Computer Network'];
            $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
            $startTime = 8; // Starting hour

            foreach ($days as $day) {
                // Shuffle subjects for random assignment
                shuffle($subjects);
                foreach ($subjects as $subject) {
                    $endTime = $startTime + 1;
                    echo "<tr>
                            <td>$day</td>
                            <td>$subject</td>
                            <td>{$startTime}:00 - {$endTime}:00</td>
                          </tr>";
                    $startTime = $endTime; // Update for next subject
                }
                $startTime = 8; // Reset time for next day
            }
            ?>
        </tbody>
    </table>
    <a href="studentdash.php" class="btn btn-primary">Back to Dashboard</a>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
