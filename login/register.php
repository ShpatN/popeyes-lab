<?php
    include '../config.php'; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL query to insert user into the database
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "<p>Registration successful!</p>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Popeye's Lab</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>

        <form class="register-form" method="POST" action="register.php">
            
            <label for="name">Name</label>
            <div class="input-group">
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>

            <label for="email">Email</label>
            <div class="input-group">
                <input type="text" name="email" id="email" placeholder="Enter your email">
            </div>

            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Enter your password">
            </div>

            <label for="gender">Gender</label>
            <div class="input-group">
                <input type="radio" name="gender" id="male">Male
                <input type="radio" name="gender" id="female">Female
            </div>

            <label for="birthday">Date of birth</label>
            <div class="input-group">
                <input type="date" name="birthday" id="date">
            </div>

            <button type="submit" class="register-button">REGISTER</button>

            <p class="login">Already a member? <a href="LogIn.php">Login now</a></p>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const registerForm = document.querySelector(".register-form");
            registerForm.addEventListener("submit", function (event) {
                event.preventDefault(); 

                const name = document.getElementById("name").value.trim();
                const email = document.getElementById("email").value.trim();
                const password = document.getElementById("password").value.trim();
                const date = document.getElementById("date").value.trim();

                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const minPasswordLength = 6;
                const maxPasswordLength = 16;
                const passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

                if (name === "") {
                    alert("Name cannot be empty.");
                    return false;
                }

                if (email === "") {
                    alert("Email cannot be empty.");
                    return false;
                }

                if (!emailRegex.test(email)) {
                    alert("Invalid email address.");
                    return false;
                }

                if (password === "") {
                    alert("Password cannot be empty.");
                    return false;
                }

                if (password.length < minPasswordLength || password.length > maxPasswordLength) {
                    alert("Password should be between 6 and 16 characters.");
                    return false;
                }

                if (!passwordRegex.test(password)) {
                    alert("Password should contain at least one number and one special character.");
                    return false;
                }

                if (date === "") {
                    alert("Date cannot be empty.");
                    return false;
                }

                registerForm.submit();
            });
        });
    </script>
</body>
</html>
