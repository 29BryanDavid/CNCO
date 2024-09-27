<!DOCTYPE html>
<html>
<head>
    <title>D.Y Patil College Of Technological Institute - Login & Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url("institute-of-engineering-and-technology.jpg");
            background-size: cover;
        }
        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 20px;
            font-weight: bold;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 70px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .tab {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .tab button {
            padding: 10px;
            cursor: pointer;
            background-color: #f1f1f1;
            border: none;
            outline: none;
        }
        .tab button.active {
            background-color: #007bff;
            color: white;
        }
        .form-container {
            display: none;
        }
        .form-container.active {
            display: block;
        }
        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
        footer p {
            margin: 5px 0;
        }
        footer a {
            color: #007bff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        footer ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        footer li {
            margin: 0 15px;
        }
    </style>
</head>
<body>

    <header>
        Dr. D Y Patil Institute of Technology, Pimpri, Pune
    </header>

    <div class="container">
        <div class="tab">
            <button class="tablinks active" onclick="openForm(event, 'Login')">Login</button>
            <button class="tablinks" onclick="openForm(event, 'Register')">Register</button>
        </div>

        <!-- Login Form -->
        <div id="Login" class="form-container active">
            <h2>Login</h2>
            <form id="loginForm" action="login.php" method="POST">
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="username" required>
                
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>

        <!-- Registration Form -->
        <div id="Register" class="form-container">
            <h2>Register</h2>
            <form id="registrationForm" action="registerhandle.php" method="POST">
                <label for="regUsername">Username</label>
                <input type="text" id="regUsername" name="username" required>
                
                <label for="regPassword">Password</label>
                <input type="password" id="regPassword" name="password" required>
                
                <label for="regPasswordconfirm">Confirm Password</label>
                <input type="password" id="regPasswordconfirm" name="passwordconfirm" required>
                
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="">Select Role</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="administrator">Administrator</option>
                </select>

                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <footer>
        <p>To Know More About Us, Visit:</p>
        <ul>
            <li><a href="https://engg.dypvp.edu.in/" target="_blank">Our Website</a></li>
            <li><a href="https://www.instagram.com/d_y_patil_pimpri/?hl=en" target="_blank">Instagram Page</a></li>
            <li><a href="https://www.facebook.com/DPU.Engineering/" target="_blank">Facebook Page</a></li>
        </ul>
        <p>We Believe in Shaping the Best</p>
    </footer>

    <script>
        // Function to switch between forms
        function openForm(evt, formName) {
            var i, formContainer, tablinks;
            
            // Hide all forms
            formContainer = document.getElementsByClassName("form-container");
            for (i = 0; i < formContainer.length; i++) {
                formContainer[i].style.display = "none";
                formContainer[i].classList.remove("active");
            }

            // Remove the "active" class from all tab links
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current form and mark the button as active
            document.getElementById(formName).style.display = "block";
            document.getElementById(formName).classList.add("active");
            evt.currentTarget.className += " active";
        }
    </script>
</body>
</html>
