<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management - Campus Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Attendance Management</h2>

        <form>
            <!-- Select Date -->
            <div class="mb-3">
                <label for="attendanceDate" class="form-label">Select Date:</label>
                <input type="date" class="form-control" id="attendanceDate" required>
            </div>

            <!-- Select Class -->
            <div class="mb-3">
                <label for="classSelect" class="form-label">Select Class:</label>
                <select class="form-select" id="classSelect" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="class1">FE</option>
                    <option value="class2">SE</option>
                    <option value="class3">TE</option>
                    <option value="class3">BE</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="classSelect" class="form-label">Select Division:</label>
                <select class="form-select" id="classSelect" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="class1">A</option>
                    <option value="class2">B</option>
                    <option value="class3">C</option>
                    <option value="class3">D</option>
                </select>
            </div>

            <!-- Attendance Table -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Roll No</th>
                            <th>Student Name</th>
                            <th>Present</th>
                            <th>Absent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Bryan David</td>
                            <td>
                                <input type="radio" name="attendance1" value="present" required>
                            </td>
                            <td>
                                <input type="radio" name="attendance1" value="absent">
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Vaidehi Deshmukh</td>
                            <td>
                                <input type="radio" name="attendance2" value="present" required>
                            </td>
                            <td>
                                <input type="radio" name="attendance2" value="absent">
                            </td>
                        </tr>
                        <!-- You can dynamically generate rows like this for each student -->
                    </tbody>
                </table>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Save Attendance</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>