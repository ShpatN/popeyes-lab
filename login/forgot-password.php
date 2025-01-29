<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot-password.css">
    <title>Popeye's Lab</title>
</head>
<body>
    <div class="container">
        <h1>Forgot your password?</h1>

        <p class="text">Please enter the email address you'd like your password reset information sent to</p>

        <form class="input-group">
            <label for="email">Enter email address</label>
            <div class="input">
                <input type="email" id="email" placeholder="Type your email">
            </div>

            <button type="submit" class="requestLink-button">Request reset link</button>

            <p class="login">Back to <a href="LogIn.php">Login</a></p>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    
            const loginForm = document.querySelector(".input-group");
            loginForm.addEventListener("submit", function (event) {
            event.preventDefault(); 

                const email = document.getElementById("email").value.trim();

                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (email === "") {
                    alert("Email cannot be empty.");
                    return false;
                }

                if (!emailRegex.test(email)) {
                    alert("Invalid email address.");
                    return false;
                }

                alert("An email has been sent with the verification code");
                window.location.href = "Login.php"; 
            });
        });
    </script>
</body>
</html>