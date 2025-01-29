<?php
    session_start();
    include '../config.php'; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['name'];
                $_SESSION['role'] = $user['role']; 

                header("Location: ../Main/Home.php");
                exit();
            } else {
                echo "<p>Invalid password!</p>";
            }
        } else {
            echo "<p>No user found with that email!</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LogIn.css">
    <title>Popeye's Lab</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <form class="login-form" method="POST" action="login.php">

            <label for="email">Email</label>
            <div class="input-group">
                <input type="text" name="email" id="login-email" placeholder="Type your email">
            </div>

            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="login-password" placeholder="Type your password">
            </div>

            <a href="forgot-password.php" class="forgot-password">Forgot password?</a>

            <button type="submit" class="login-button">LOGIN</button>

            <p class="register">Not a member yet? <a href="register.php">Register now</a></p>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    
            const loginForm = document.querySelector(".login-form");
            loginForm.addEventListener("submit", function (event) {
                event.preventDefault(); 

                const loginEmail = document.getElementById("login-email").value.trim();
                const loginPassword = document.getElementById("login-password").value.trim();

                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const minNumberofChars = 6;
                const maxNumberofChars = 16;
                const passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

                if (loginEmail === "" || loginPassword === "") {
                    alert("Email and password cannot be empty.");
                    return false;
                }

                if (!emailRegex.test(loginEmail)) {
                    alert("Invalid email address.");
                    return false;
                }

                if(loginPassword.length < minNumberofChars || loginPassword.length > maxNumberofChars){
                    alert("Password should contain between 6 and 16 characters");   
                    return false;
                }
                
                if(!passwordRegex.test(loginPassword)) {
                    alert("Password should contain at least one number and one special character");
                    return false;
                }

                loginForm.submit(); 
            });
        });
    </script>
</body>
</html>
