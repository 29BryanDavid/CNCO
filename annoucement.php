<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Teacher Dashboard</title>
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
    <h1 class="text-center">Teacher Dashboard</h1>
    
    <div class="my-4">
        <h2>Generate Announcement</h2>
        <button id="generateAnnouncement" class="btn btn-primary">Generate Announcement</button>
    </div>

    <div id="announcement" class="alert alert-info" style="display: none;"></div>

    <a href="teacherdash.php" class="btn btn-secondary">Back to Teacher Dashboard</a>
</div>

<script>
    document.getElementById('generateAnnouncement').addEventListener('click', function() {
        const topics = [
            "Exam Schedule Update",
            "New Course Introduction",
            "Guest Lecture Invitation",
            "Classroom Behavior Reminder",
            "Holiday Announcement",
            "Project Submission Guidelines",
            "Field Trip Notification"
        ];

        // Randomly select a topic
        const randomIndex = Math.floor(Math.random() * topics.length);
        const selectedTopic = topics[randomIndex];

        // Display the announcement
        document.getElementById('announcement').innerText = "Announcement: " + selectedTopic;
        document.getElementById('announcement').style.display = 'block';
    });
</script>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
