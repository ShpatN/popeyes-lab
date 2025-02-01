<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login/LogIn.php"); 
        exit();
    }

    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popeye's Lab</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <?php
        include '../header.php';
    ?>
    <main>
        <div class="image">
            <img src="../images/popeyes-home.jpg" alt="Popeye's Lab Banner">
        </div>
        <div class="fitness">
            <h1>Fitness</h1>
            <h3>Transform your Body</h3>
            <p>With our gym equipment, gaining muscle is easier than ever! The setup is designed to maximize results, targeting every muscle group efficiently. Whether you’re just starting or are an experienced lifter, our high-quality gear helps you build strength and muscle faster, bringing you closer to your goals with every workout. </p>
            <a href="../Subscriptions/Subscriptions.php">
                <button type="submit">Push Your Limits Now</button>
            </a>
        </div>
       
        <div class="yoga">
            <h1>Yoga</h1>
            <h3>Breathe, Stretch, Transform</h3>
            <p>At Popeyes Lab, our yoga classes are carefully crafted to guide you through a journey of deep relaxation, flexibility, and mental clarity. We focus on strengthening both your body and mind, helping you find balance, improve posture, and unlock your full potential, all while fostering a sense of calm and inner peace.</p>
            <a href="../Subscriptions/Subscriptions.php">
                <button type="sumit">Find Your Balance Now</button>
            </a>
        </div>
        
        <div class="crossfit">
            <h1>Crossfit</h1>
            <h3>Find Strength in Every Rep</h3>
            <p>Come to CrossFit to experience a high-intensity, functional training approach that combines strength, endurance, and agility, setting it apart from traditional fitness routines. It’s designed to push your limits, build real-world strength, and help you achieve dynamic results.</p>
            <a href="../Subscriptions/Subscriptions.php">
                <button type="submit">Go Hard, Go CrossFit</button>
            </a>
        </div>
       
        <div class="spinning">
            <h1>Spinning</h1>
            <h3>Feel the Burn, Love the Ride</h3>
            <p>Our Spinning classes at Popeyes Lab offer a high-energy workout that boosts endurance, builds strength, and burns calories. With motivating music, expert instructors, and a supportive environment, each session challenges you to push your limits and leave feeling stronger and more energized.</p>
            <a href="../Subscriptions/Subscriptions.php"">
                <button type="submit">Pedal to Your Peak Now</button>
            </a>
        </div>
    </main>
    <?php 
        include '../footer.php';
    ?>
</body>
</html>
